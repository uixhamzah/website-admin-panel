<?php

namespace Database\Seeders;

use App\Models\DriverDetails;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mahesa Adriansyah',
            'username' => 'mahesaadriansya',
            'email' => 'mahesaadriansya@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Lamar Widodo',
            'username' => 'lamarwidodo',
            'email' => 'lamarwidodo@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Ganjaran Pranowo',
            'username' => 'ganjaranpranowo',
            'email' => 'ganjaranpranowo@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Jarwa Sinaga',
            'username' => 'jarwasinaga',
            'email' => 'jarwasinaga@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Gaiman Jailani',
            'username' => 'gaimanjailani',
            'email' => 'gaimanjailani@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Ajimin Kusumo',
            'username' => 'ajiminkusumo',
            'email' => 'ajiminkusumo@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Emong Narpati',
            'username' => 'emongnarpati',
            'email' => 'emongnarpati@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Simon Pradana',
            'username' => 'simonpradana',
            'email' => 'simonpradana@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Dadap Waluyo',
            'username' => 'dadapwaluyo',
            'email' => 'dadapwaluyo@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Karya Thamrin',
            'username' => 'karyathamrin',
            'email' => 'karyathamrin@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Adinata Wibowo',
            'username' => 'adinatawibowo',
            'email' => 'adinatawibowo@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Uda Hakim',
            'username' => 'udahakim',
            'email' => 'udahakim@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Nyoman Waluyo',
            'username' => 'nyomanwluyo',
            'email' => 'nyomanwluyo@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Prayoga Habibi',
            'username' => 'prayogahabibi',
            'email' => 'prayogahabibi@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);


        
        DriverDetails::create([
            'id_user' => 4,
            'id_penyedia' => 1,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 2222 DV',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 5,
            'id_penyedia' => 2,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 2804 ZS',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 6,
            'id_penyedia' => 3,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 1704 XT',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 7,
            'id_penyedia' => 4,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 9550 OG',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 8,
            'id_penyedia' => 5,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 6325 NF',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 9,
            'id_penyedia' => 6,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 4908 KH',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 10,
            'id_penyedia' => 7,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 2642 ML',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 11,
            'id_penyedia' => 8,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 4906 KM',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 12,
            'id_penyedia' => 9,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 6593 SK',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 13,
            'id_penyedia' => 10,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 6319 AN',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 14,
            'id_penyedia' => 11,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 8036 VU',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 15,
            'id_penyedia' => 12,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 3643 VH',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 16,
            'id_penyedia' => 13,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 5163 MP',
            'no_telp' => '6281517520208'
        ]);
        DriverDetails::create([
            'id_user' => 17,
            'id_penyedia' => 14,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'B 1374 IH',
            'no_telp' => '6281517520208'
        ]);
    }
}
