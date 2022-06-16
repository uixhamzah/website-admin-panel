<?php

namespace Database\Seeders;

use App\Models\Tujuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tujuan::create([
            'id_kabupaten' => 7171,
            'nama_rs' => 'Siloam Hospitals Manado',
            'lat' => '1.4876308588283509',
            'long' => '124.83760674457933',
        ]);
        Tujuan::create([
            'id_kabupaten' => 7106,
            'nama_rs' => 'Sentra Medika Hospital Minahasa Utara',
            'lat' => '1.4868969767230382',
            'long' => '124.9164488815423',
        ]);
        Tujuan::create([
            'id_kabupaten' => 7171,
            'nama_rs' => 'RSUP Prof. Dr. R. D. Kandou Manado',
            'lat' => '1.4535352685095706',
            'long' => '124.808170021948',
        ]);
    }
}
