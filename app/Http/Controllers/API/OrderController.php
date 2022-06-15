<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\DriverDetails;
use App\Models\Order;
use App\Models\Tujuan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $items = Order::where('id_pengguna', auth()->user()->id)->get();

        if ($items->count()) {
            return ApiFormatter::createApi(200, 'Data pesanan berhasil diambil', $items);
        } else {
            return ApiFormatter::createApi(404, 'Tidak ada pesanan ditemukan');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $driverReady = DriverDetails::where('tersedia',true)->first();

        if (!$driverReady) {
            return ApiFormatter::createApi(201, 'Tidak ada driver yang tersedia saat ini');
        }

        $driver = User::find($driverReady->user->id);
        $tujuan = Tujuan::with('kabupaten.provinsi')->get()->random();
        $tanggal = Carbon::today();

        // $data = [
        //     'id_pengguna' => $user->id,
        //     'id_driver' => $driver->id,
        //     'id_tujuan' => $tujuan->id,
        //     'keadaan' => $request->keadaan,
        //     'tanggal' => $tanggal,
        //     'pengguna' => $user,
        //     'driver' => $driver,
        //     'tujuan' => $tujuan,
        // ];

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

        $order = Order::with(['pengguna','driver.driverDetails.penyedia.kabupaten.provinsi','tujuan.kabupaten.provinsi'])->find($order->id);

        return ApiFormatter::createApi(201, 'Pesanan berhasil dibuat', $order);
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

    public function edit($id)
    {
        //
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

    public function destroy($id)
    {
        //
    }
}
