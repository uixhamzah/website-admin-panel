<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Tujuan;
use Exception;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function index()
    {
        $data = Tujuan::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'Data tujuan berhasil diambil', $data);
        } else {
            return ApiFormatter::createApi(400, 'Gagal mengambil data');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // try {
        //     $request->validate([
        //         'id_kabupaten' => 'required',
        //         'nama_rs' => 'required',
        //         'lat' => 'required',
        //         'long' => 'required',
        //     ]);

        //     $data = Tujuan::create($request->all());

        //     if ($data) {
        //         return ApiFormatter::createApi(201, 'Data tujuan berhasil dibuat', $data);
        //     } else {
        //         return ApiFormatter::createApi(400, 'Gagal menyimpan data');
        //     }
        // } catch (Exception $error) {
        //     return ApiFormatter::error($error);
        // }
    }

    public function show($id)
    {
        $data = Tujuan::with('kabupaten.provinsi')->find($id);

        if ($data) {
            return ApiFormatter::createApi(200, 'Data tujuan berhasil diambil', $data);
        } else {
            return ApiFormatter::createApi(404, 'Data tidak ditemukan');
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // try {
        //     $request->validate([
        //         'id_kabupaten' => 'required',
        //         'nama_rs' => 'required',
        //         'lat' => 'required',
        //         'long' => 'required',
        //     ]);

        //     $data = Tujuan::find($id);

        //     if ($data) {
        //         $data->update($request->all());
        //         return ApiFormatter::createApi(200, 'Data tujuan berhasil diupdate', $data);
        //     } else {
        //         return ApiFormatter::createApi(400, 'Tidak ditemukan data dengan id tersebut');
        //     }
        // } catch (Exception $error) {
        //     return ApiFormatter::error($error);
        // }
    }

    public function destroy($id)
    {
        // $data = Tujuan::find($id);

        // if ($data) {
        //     $data->delete();
        //     return ApiFormatter::createApi(200, 'Data tujuan berhasil dihapus', $data);
        // } else {
        //     return ApiFormatter::createApi(400, 'Tidak ditemukan data dengan id tersebut');
        // }
    }
}
