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
            'name' => 'Rifqi Luthfi',
            'username' => 'rifqiluthfi',
            'email' => 'rifqiluthfi@gmail.com',
            // 'profile_pic' => '',
            'password' => Hash::make('Pengguna123')
        ]);
        User::create([
            'name' => 'Muhammad Ridho Saputra',
            'username' => 'muhammadridho',
            'email' => 'muhammadridho@gmail.com',
            // 'profile_pic' => '',
            'password' => Hash::make('Pengguna123')
        ]);
        User::create([
            'name' => 'Luthfirrahman Dzulkarnain',
            'username' => 'luthfirrahmandzulkarnain',
            'email' => 'luthfirrahmandzulkarnain@gmail.com',
            // 'profile_pic' => '',
            'password' => Hash::make('Pengguna123')
        ]);
        User::create([
            'name' => 'Federico Saputra',
            'username' => 'federicosaputra',
            'email' => 'federicosaputra@gmail.com',
            // 'profile_pic' => '',
            'password' => Hash::make('Pengguna123')
        ]);
        User::create([
            'name' => 'Nicolas Maria Andre Gozali',
            'username' => 'andregozali',
            'email' => 'andregozali@gmail.com',
            // 'profile_pic' => '',
            'password' => Hash::make('Pengguna123')
        ]);
        User::create([
            'name' => 'Wesley Mulia Salim',
            'username' => 'wesleymulia',
            'email' => 'wesleymulia@gmail.com',
            // 'profile_pic' => '',
            'password' => Hash::make('Pengguna123')
        ]);

        UserDetails::create([
            'id_user' => 18,
            'id_kabupaten' => 3173,
            'no_telp' => '628127523486'
        ]);
        UserDetails::create([
            'id_user' => 19,
            'id_kabupaten' => 3173,
            'no_telp' => '6289530349815'
        ]);
        UserDetails::create([
            'id_user' => 20,
            'id_kabupaten' => 3173,
            'no_telp' => '6281533375594'
        ]);
        UserDetails::create([
            'id_user' => 21,
            'id_kabupaten' => 3173,
            'no_telp' => '6285814092191'
        ]);
        UserDetails::create([
            'id_user' => 22,
            'id_kabupaten' => 3173,
            'no_telp' => '6282183541629'
        ]);
        UserDetails::create([
            'id_user' => 23,
            'id_kabupaten' => 3173,
            'no_telp' => '6287774157732'
        ]);
    }
}
