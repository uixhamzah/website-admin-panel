<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Jenifer Damar',
            'username' => 'jeniferdamar',
            'email' => 'jeniferdamar@gmail.com',
            'no_telp' => '081234567890',
            'password' => Hash::make('User123')
        ]);
        Pengguna::create([
            'id_kabupaten' => 7171,
            'name' => 'Brenda Damar',
            'username' => 'brendadamar',
            'email' => 'brendadamar@gmail.com',
            'no_telp' => '082112342901',
            'password' => Hash::make('User123')
        ]);
        Pengguna::create([
            'id_kabupaten' => 7171,
            'name' => 'Jenifer Brenda',
            'username' => 'jeniferbrenda',
            'email' => 'jeniferbrenda@gmail.com',
            'no_telp' => '082112342902',
            'password' => Hash::make('User123')
        ]);
    }
}
