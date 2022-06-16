<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function closest(Request $request)
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

    public function test(Request $request)
    {
        // $pick = str_replace(' ', '', $request->input('pick'));
        // $delivery = str_replace(' ', '', $request->input('delivery'));
        $pick = str_replace(' ', '', 'Manado, Manado City, North Sulawesi');
        $delivery = str_replace(' ', '', 'Bitung, Bitung City, North Sulawesi');

        $milleage_result = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='. $pick . '&destinations=' . $delivery. '&key=AIzaSyC6SBYyFZItqh-p0a0695QOqhD_88xe94s');

        $milleage_result = json_decode($milleage_result);

        return response()->json($milleage_result);


        // $data = User::all();

        // return response()->json($data);
    }
}
