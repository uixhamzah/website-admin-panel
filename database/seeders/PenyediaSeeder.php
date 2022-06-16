<?php

namespace Database\Seeders;

use App\Models\Penyedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'Ambulancesiagacom',
            'lat' => '-6.323468950182912',
            'long' => '106.87661716617346',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'Ambulans 24 jam',
            'lat' => '-6.292972172867294',
            'long' => '106.66623748528112',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'Ambulans Gratis Tugu Insurance',
            'lat' => '-6.215177029637141',
            'long' => '106.83102605525421',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'Ambulans gratis Smart city DKI Jakarta',
            'lat' => '-6.171883600070316',
            'long' => '106.8145894308074',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'Dinas Kesehatan Provinsi DKI Jakarta',
            'lat' => '-6.171880933406926',
            'long' => '106.8145894308074',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'Jasaambulancecom',
            'lat' => '-6.326718737529169',
            'long' => '106.87660851789161',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'Ono Ambulance',
            'lat' => '-6.243777763980154',
            'long' => '106.61377466112559',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'PMI Jakarta',
            'lat' => '-6.1849255447433515',
            'long' => '106.84465788946993',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'RS Fatmawati Jaksel',
            'lat' => '-6.271506700337714',
            'long' => '106.79745059106055',
            'kategori' => 'Rumah Sakit',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'Sinar Ambulance Service',
            'lat' => '-6.293141883276961',
            'long' => '106.85249609305062',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'Sistem Penanggulangan Gawat Darurat Terpadu (SPGDT)',
            'lat' => '-6.9104331315961725',
            'long' => '109.38225628330983',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3173,
            'nama_penyedia' => 'Transmulia ambulance',
            'lat' => '-6.29160531014454',
            'long' => '106.84576093903735',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3171,
            'nama_penyedia' => 'Yayasan Al Andalusia Pela',
            'lat' => '-6.245335793787019',
            'long' => '106.81781313893426',
            'kategori' => 'NGO',
        ]);
        Penyedia::create([
            'id_kabupaten' => 3172,
            'nama_penyedia' => 'Penyediaan layanan ambulance',
            'lat' => '-6.3523483905016045',
            'long' => '106.8690211709877',
            'kategori' => 'NGO',
        ]);
    }
}
