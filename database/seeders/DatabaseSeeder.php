<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            TujuanSeeder::class,
            PenyediaSeeder::class,
            DriverSeeder::class,
            PenggunaSeeder::class,
            OrderSeeder::class,
        ]);

        
        User::create([
            'name' => 'Andre Gozali',
            'username' => 'andre_gozali',
            'email' => 'andre_gozali@gmail.com',
            // 'profile_pic' => '',
            'role' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
    }
}
