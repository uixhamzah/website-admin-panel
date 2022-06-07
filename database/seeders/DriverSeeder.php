<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::create([
            'id_penyedia' => 1,
            'nama' => 'Aditya Manansang',
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'DB 2880 CM',
        ]);
        Driver::create([
            'id_penyedia' => 2,
            'nama' => 'Septio Angow',
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'DB 5424 HD',
        ]);
        Driver::create([
            'id_penyedia' => 3,
            'nama' => 'Agung Berhimpon',
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'DB 5720 DL',
        ]);
        Driver::create([
            'id_penyedia' => 3,
            'nama' => 'Priska Pilat',
            'jenis_kelamin' => 'Perempuan',
            'plat' => 'DB 4783 DL',
        ]);
        Driver::create([
            'id_penyedia' => 4,
            'nama' => 'Eka Enanto Putra',
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'DN 9237 BD',
        ]);
        Driver::create([
            'id_penyedia' => 2,
            'nama' => 'Ticoalu Sombouwadil',
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'DB 6745 FC',
        ]);
    }
}
