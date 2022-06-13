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
            'name' => 'Aditya Manansang',
            'username' => 'adityamanansang',
            'email' => 'adityamanansang@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Septio Angow',
            'username' => 'septioangow',
            'email' => 'septioangow@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Agung Berhimpon',
            'username' => 'agungberhimpon',
            'email' => 'agungberhimpon@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Priska Pilat',
            'username' => 'priskapilat',
            'email' => 'priskapilat@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Eka Enanto Putra',
            'username' => 'ekaenantoputra',
            'email' => 'ekaenantoputra@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        User::create([
            'name' => 'Ticoalu Sombouwadil',
            'username' => 'ticoalusombouwadil',
            'email' => 'ticoalusombouwadil@gmail.com',
            'role' => 'Driver',
            'password' => Hash::make('Driver123')
        ]);
        
        DriverDetails::create([
            'id_user' => 7,
            'id_penyedia' => 1,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'DB 2880 CM',
        ]);
        DriverDetails::create([
            'id_user' => 8,
            'id_penyedia' => 2,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'DB 5424 HD',
        ]);
        DriverDetails::create([
            'id_user' => 9,
            'id_penyedia' => 3,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'DB 5720 DL',
        ]);
        DriverDetails::create([
            'id_user' => 10,
            'id_penyedia' => 3,
            'jenis_kelamin' => 'Perempuan',
            'plat' => 'DB 4783 DL',
        ]);
        DriverDetails::create([
            'id_user' => 11,
            'id_penyedia' => 4,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'DN 9237 BD',
        ]);
        DriverDetails::create([
            'id_user' => 12,
            'id_penyedia' => 2,
            'jenis_kelamin' => 'Laki-laki',
            'plat' => 'DB 6745 FC',
        ]);
    }
}
