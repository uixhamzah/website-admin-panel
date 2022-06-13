<?php

namespace Database\Seeders;

use App\Models\UserDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
