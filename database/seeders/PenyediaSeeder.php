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
            'id_kabupaten' => 7171,
            'nama_penyedia' => 'Siloam Hospitals Manado',
            'lat' => '1.4876308588283509',
            'long' => '124.83760674457933',
            'kategori' => 'Rumah Sakit',
        ]);
        Penyedia::create([
            'id_kabupaten' => 7106,
            'nama_penyedia' => 'Sentra Medika Hospital Minahasa Utara',
            'lat' => '1.4868969767230382',
            'long' => '124.9164488815423',
            'kategori' => 'Rumah Sakit',
        ]);
        Penyedia::create([
            'id_kabupaten' => 7171,
            'nama_penyedia' => 'RSUP Prof. Dr. R. D. Kandou Manado',
            'lat' => '1.4535352685095706',
            'long' => '124.808170021948',
            'kategori' => 'Rumah Sakit',
        ]);
        Penyedia::create([
            'id_kabupaten' => 7271,
            'nama_penyedia' => 'Yayasan Tanah Merdeka',
            'lat' => '-0.9074553069016901',
            'long' => '119.88100741551897',
            'kategori' => 'NGO',
        ]);
    }
}
