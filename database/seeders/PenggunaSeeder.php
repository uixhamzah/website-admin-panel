<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetails;
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
        User::create([
            'name' => 'Jenifer Damar',
            'username' => 'jeniferdamar',
            'email' => 'jeniferdamar@gmail.com',
            // 'profile_pic' => '',
            'password' => Hash::make('Pengguna123')
        ]);
        User::create([
            'name' => 'Brenda Damar',
            'username' => 'brendadamar',
            'email' => 'brendadamar@gmail.com',
            // 'profile_pic' => '',
            'password' => Hash::make('Pengguna123')
        ]);
        User::create([
            'name' => 'Jenifer Brenda',
            'username' => 'jeniferbrenda',
            'email' => 'jeniferbrenda@gmail.com',
            // 'profile_pic' => '',
            'password' => Hash::make('Pengguna123')
        ]);

        UserDetails::create([
            'id_user' => 4,
            'id_kabupaten' => 7171,
            'no_telp' => '081234567890'
        ]);
        UserDetails::create([
            'id_user' => 5,
            'id_kabupaten' => 7171,
            'no_telp' => '082112342901'
        ]);
        UserDetails::create([
            'id_user' => 6,
            'id_kabupaten' => 7171,
            'no_telp' => '082112342902'
        ]);
    }
}
