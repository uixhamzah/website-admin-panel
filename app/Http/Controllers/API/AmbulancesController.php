<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\DriverDetails;
use App\Models\Order;
use App\Models\Tujuan;
use Carbon\Carbon;

class AmbulancesController extends Controller
{
    public function ambulances()
    {
        $users = User::where('role','Driver')->get();

        $result = collect();

        foreach ($users as $user) {
            $result->push([
                'id' => $user->id,
                'namaInstansi' => $user->driverDetails->penyedia->nama_penyedia,
                'kotaKabupaten' => $user->driverDetails->penyedia->kabupaten->name,
                'provinsi' => $user->driverDetails->penyedia->kabupaten->provinsi->name,
                'alamatDaerahOperasiAmbulance' => $user->driverDetails->penyedia->kabupaten->name,
                'kontakPicAmbulance' => $user->driverDetails->no_telp,
                'keterangan' => 'undefined',
                'namaDriver' => $user->name,
                'platNomor' => $user->driverDetails->plat,
                'geopoint' => [
                    '_latitude' => (float)$user->driverDetails->penyedia->lat,
                    '_longitude' => (float)$user->driverDetails->penyedia->long,
                ],
            ]);
        }

        $data = [
            'count' => $users->count(),
            'data' => $result
        ];

        if ($data) {
            return response()->json($data);
        } else {
            return ApiFormatter::createApi(400, 'Gagal mengambil data');
        }
    }

    public function closestV1(Request $request)
    {
        $location = $request->input('location');
        $radius = $request->input('radius');
        $users = User::where('role','Driver')->get();

        $result = collect();

        foreach ($users as $user) {

            $dis = rand(1500, 10000);

            $div = $dis * 1.2 + 100;
            $dit = $div / 1000;

            $duv = $div * 0.2;
            $dut = $duv / 60;
            
            

            $result->push([
                'id' => $user->id,
                'namaInstansi' => $user->driverDetails->penyedia->nama_penyedia,
                'kontakPicAmbulance' => $user->driverDetails->no_telp,
                'namaDriver' => $user->name,
                'platNomor' => $user->driverDetails->plat,
                'geopoint' => [
                    '_latitude' => (float)$user->driverDetails->penyedia->lat,
                    '_longitude' => (float)$user->driverDetails->penyedia->long,
                ],
                'distance' => $dis,
                'distanceOnTheRoad' => [
                    'text' => number_format($dit,1).' km',
                    'value' => (int)$div,
                ],
                'duration' => [
                    'text' => (int)$dut.' mins',
                    'value' => (int)$duv,
                ],
            ]);
        }

        $data = [
            'origin_addresses' => [$location],
            'found' => 5,
            // 'found' => $users->count(),
            'ambulances' => $result->take(5)
        ];

        if ($data) {
            return response()->json($data);
        } else {
            return ApiFormatter::createApi(400, 'Gagal mengambil data');
        }
    }

    public function closest(Request $request)
    {
        $key = 'AIzaSyC6SBYyFZItqh-p0a0695QOqhD_88xe94s';
        $origins = $request->input('location');
        $origin_1 = Str::before($origins, ',');
        $origin_2 = Str::after($origins, ',');
        $radius = $request->input('radius');

        $user = User::find(22);
        $drivers = User::where('role','Driver')->whereRelation('driverDetails','tersedia',1)->whereRelation('driverDetails.penyedia.kabupaten','province_id',$user->details->kabupaten->province_id)->get();

        // Membuat array untuk menyimpan data driver yang ditemukan
        $ambulances = collect();

        $destinations = [];
        foreach ($drivers as $driver) {
            // Mengecek driver yang berada di radius
            $distance = $this->getDistance($origin_1, $origin_2, $driver->driverDetails->penyedia->lat, $driver->driverDetails->penyedia->long);
            if ($distance < $radius) {
                // Jika driver berada di radius, maka akan ditambahkan ke array destinations
                $destinations[] = $driver->driverDetails->penyedia->lat.','.$driver->driverDetails->penyedia->long;

                // Menambahkan driver ke array ambulances
                $ambulances->push([
                    'id' => $driver->id,
                    'namaInstansi' => $driver->driverDetails->penyedia->nama_penyedia,
                    'kontakPicAmbulance' => $driver->driverDetails->no_telp,
                    'namaDriver' => $driver->name,
                    'platNomor' => $driver->driverDetails->plat,
                    'geopoint' => [
                        '_latitude' => (float)$driver->driverDetails->penyedia->lat,
                        '_longitude' => (float)$driver->driverDetails->penyedia->long,
                    ],
                    'distance' => $distance,
                    'distanceOnTheRoad' => [
                        'text' => '0 km',
                        'value' => 0,
                    ],
                    'duration' => [
                        'text' => '0 mins',
                        'value' => 0,
                    ],
                ]);
            }
        }

        // Jika tidak ada driver yang ditemukan, maka akan dikembalikan response dengan status 400
        if (!$destinations) {
            return response()->json([
                'found' => $ambulances->count(),
                'message' => 'no ambulance found in this area'
            ]);
        }

        $desJoin = (Arr::join($destinations, '%7C'));

        // Mengambil data jarak dan waktu dari google maps
        $result = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origins.'&destinations='.$desJoin.'&key='.$key));

        // Menggabungkan data jarak dan waktu dengan data driver yang ditemukan
        $newAmbulances = collect();
        $loopIndex = 0;
        foreach ($ambulances as $ambulance) {
            $newAmbulances->push([
                'id' => $ambulance['id'],
                'namaInstansi' => $ambulance['namaInstansi'],
                'kontakPicAmbulance' => $ambulance['kontakPicAmbulance'],
                'namaDriver' => $ambulance['namaDriver'],
                'platNomor' => $ambulance['platNomor'],
                'geopoint' => [
                    '_latitude' => $ambulance['geopoint']['_latitude'],
                    '_longitude' => $ambulance['geopoint']['_longitude'],
                ],
                'distance' => $ambulance['distance'],
                'distanceOnTheRoad' => [
                    'text' => $result->rows[0]->elements[$loopIndex]->distance->text,
                    'value' => $result->rows[0]->elements[$loopIndex]->distance->value,
                ],
                'duration' => [
                    'text' => $result->rows[0]->elements[$loopIndex]->duration->text,
                    'value' => $result->rows[0]->elements[$loopIndex]->duration->value,
                ],
            ]);
            $loopIndex++;
        }

        // Format data yang akan dikembalikan
        $data = [
            'origin_addresses' => $result->origin_addresses,
            'found' => $ambulances->count(),
            'ambulances' => $newAmbulances
        ];

        return response()->json($data);
    }

    public function store(Request $request)
    {
        // $user = auth()->user();
        $user = User::find($request->id_pengguna);
        $driver = User::find($request->id_driver);
        $tujuan = Tujuan::find($request->id_tujuan);
        $tanggal = Carbon::today();

        if (!$user) {
            return ApiFormatter::createApi(400, 'Pengguna tidak ditemukan');
        }
        if (!$driver) {
            return ApiFormatter::createApi(400, 'Driver tidak ditemukan');
        }
        if (!$tujuan) {
            return ApiFormatter::createApi(400, 'Tujuan tidak ditemukan');
        }

        $detail = [
            'pengguna' => $user,
            'driver' => $driver,
            'tujuan' => $tujuan,
        ];

        $order = Order::create([
            'id_pengguna' => $user->id,
            'id_driver' => $driver->id,
            'id_tujuan' => $tujuan->id,
            'keadaan' => $request->keadaan,
            'tanggal' => $tanggal,
        ]);

        $driverDetail = DriverDetails::find($driver->driverDetails->id);
        $driverDetail->tersedia = false;
        $driverDetail->save();

        return ApiFormatter::createApi(201, 'Pesanan berhasil dibuat', [
            'order' => $order,
            'detail' => $detail,
        ]);
    }
    
    public function show($id)
    {
        $item = Order::with(['pengguna','driver','driver.driverDetails.penyedia.kabupaten.provinsi','tujuan.kabupaten.provinsi'])->find($id);

        if ($item) {
            return ApiFormatter::createApi(200, 'Detail pesanan berhasil diambil', $item);
        } else {
            return ApiFormatter::createApi(404, 'Pesanan tidak ditemukan');
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $order = Order::find($id);

        if ($order) {

            $order->update($data);
            $driverDetail = DriverDetails::find($order->driver->driverDetails->id);
            $driverDetail->tersedia = true;
            $driverDetail->save();

            return ApiFormatter::createApi(200, 'Status pesanan berhasil diupdate', $order);
        } else {
            return ApiFormatter::createApi(404, 'Pesanan tidak ditemukan');
        }
    }

    public function distanceMatrix()
    {
        $pick = [-6.1714120085292, 106.82701447780497];
        $radius = 10000;
        $users = User::where('role','Driver')->get();

        $data = collect();

        foreach ($users as $user) {
            $data->push([
                'lat' => (float)$user->driverDetails->penyedia->lat,
                'lng' => (float)$user->driverDetails->penyedia->long,
            ]);
        }

        return view('pages.maps', [
            'data' => $data,
            'pick' => $pick,
            'radius' => $radius
        ]);
    }
}
