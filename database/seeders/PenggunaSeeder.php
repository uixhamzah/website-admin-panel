<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::create([
            'id_kabupaten' => 7171,
            'nama' => 'Jenifer Damar',
            'no_telp' => '081234567890',
        ]);
        Pengguna::create([
            'id_kabupaten' => 7171,
            'nama' => 'Brenda Damar',
            'no_telp' => '082112342901',
        ]);
        Pengguna::create([
            'id_kabupaten' => 7171,
            'nama' => 'Jenifer Brenda',
            'no_telp' => '082112342902',
        ]);
    }
}
