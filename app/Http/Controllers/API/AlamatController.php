<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    public function index($prov = null, $kab = null, $kec = null, $des = null)
    {
        $data = Provinsi::all();

        if ($prov) {
            $data = [
                'provinsi' => Provinsi::find($prov),
                'kabupaten' => Kabupaten::where('province_id', $prov)->get(),
            ];
            if ($kab) {
                $data = [
                    'provinsi' => Provinsi::find($prov),
                    'kabupaten' => Kabupaten::find($kab),
                    'kecamatan' => Kecamatan::where('regency_id', $kab)->get(),
                ];
                if ($kec) {
                    $data = [
                        'provinsi' => Provinsi::find($prov),
                        'kabupaten' => Kabupaten::find($kab),
                        'kecamatan' => Kecamatan::find($kec),
                        'desa' => Desa::where('district_id', $kec)->get(),
                    ];
                    if ($des) {
                        $data = [
                            'provinsi' => Provinsi::find($prov),
                            'kabupaten' => Kabupaten::find($kab),
                            'kecamatan' => Kecamatan::find($kec),
                            'desa' => Desa::find($des),
                        ];
                    }
                }
            }
        }
        
        return ApiFormatter::createApi(200, 'Data alamat berhasil diambil', $data);
    }

    public function prov()
    {
        $provinsi = Provinsi::all();
        return ApiFormatter::createApi(200, 'Data tujuan berhasil diambil', $provinsi);
    }
    
    public function kab($id)
    {
        $provinsi = Provinsi::with('kabupaten')->find($id);
        return ApiFormatter::createApi(200, 'Data tujuan berhasil diambil', $provinsi);
    }
    
    public function kec($id)
    {
        $provinsi = Provinsi::with('kabupaten')->find($id);
        return ApiFormatter::createApi(200, 'Data tujuan berhasil diambil', $provinsi);
    }
    
    public function des($id)
    {
        $provinsi = Provinsi::with('kabupaten')->find($id);
        return ApiFormatter::createApi(200, 'Data tujuan berhasil diambil', $provinsi);
    }
}
