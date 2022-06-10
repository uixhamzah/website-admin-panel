<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 3,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(6),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 4,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(6),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 5,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDays(6),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 5,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDays(5),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 1,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(5),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 6,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(5),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 2,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(5),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 1,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 2,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 3,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 4,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 6,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 2,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 1,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 3,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 5,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 4,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 2,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 1,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 3,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 5,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 1,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 6,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 2,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 1,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 3,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 5,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 1,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 1,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 2,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 3,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 4,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 1,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 2,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 6,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 4,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 5,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 4,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 2,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 1,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 3,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 6,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 1,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 1,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 2,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 3,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 4,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 5,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 1,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 1,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 2,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 3,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 6,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 5,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 4,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 2,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 3,
            'id_driver' => 1,
            'id_tujuan' => 2,
            'tanggal' => Carbon::today(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 3,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today(),
            'status' => 'Sedang Berjalan',
        ]);
        Order::create([
            'id_pengguna' => 2,
            'id_driver' => 5,
            'id_tujuan' => 3,
            'tanggal' => Carbon::today(),
            'status' => 'Sedang Berjalan',
        ]);
        Order::create([
            'id_pengguna' => 1,
            'id_driver' => 6,
            'id_tujuan' => 1,
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
    }
}
