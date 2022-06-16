<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Phil Bawole',
            'username' => 'philanggara',
            'email' => 'philanggara@gmail.com',
            // 'profile_pic' => '',
            'role' => 'Super Admin',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Aditya Ekafernanda Manansang',
            'username' => 'adityamanansang',
            'email' => 'adityamanansang@gmail.com',
            // 'profile_pic' => '',
            'role' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Fajar Maftuh Fadli',
            'username' => 'fajarfadli',
            'email' => 'fajarfadli@gmail.com',
            // 'profile_pic' => '',
            'role' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
    }
}
