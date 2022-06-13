<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Order;
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
        //
    }

    public function show($id)
    {
        $item = Order::with(['pengguna','driver.penyedia','tujuan.kabupaten.provinsi'])->find($id);

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
        //
    }

    public function destroy($id)
    {
        //
    }
}
