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
            'id_pengguna' => 6,
            'id_driver' => 9,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(6),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 10,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Berat',
            'tanggal' => Carbon::today()->subDays(6),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 11,
            'id_tujuan' => 3,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(6),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 11,
            'id_tujuan' => 3,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(5),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 7,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Berat',
            'tanggal' => Carbon::today()->subDays(5),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 12,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(5),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 8,
            'id_tujuan' => 2,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(5),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 7,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 8,
            'id_tujuan' => 2,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 9,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 10,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 12,
            'id_tujuan' => 3,
            'keadaan' => 'Luka Berat',
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 8,
            'id_tujuan' => 3,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 7,
            'id_tujuan' => 2,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 9,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Berat',
            'tanggal' => Carbon::today()->subDays(4),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 11,
            'id_tujuan' => 3,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 10,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 8,
            'id_tujuan' => 3,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 7,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 9,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 11,
            'id_tujuan' => 3,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 7,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(3),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 12,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 8,
            'id_tujuan' => 3,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 7,
            'id_tujuan' => 2,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 9,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 11,
            'id_tujuan' => 3,
            'keadaan' => 'Luka Berat',
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 7,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 7,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 8,
            'id_tujuan' => 2,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 9,
            'id_tujuan' => 2,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 10,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDays(2),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 7,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 8,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 12,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 10,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 11,
            'id_tujuan' => 3,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 10,
            'id_tujuan' => 2,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 8,
            'id_tujuan' => 3,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 7,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Berat',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 9,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 12,
            'id_tujuan' => 3,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 7,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 7,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 8,
            'id_tujuan' => 2,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 9,
            'id_tujuan' => 2,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 10,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 11,
            'id_tujuan' => 3,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today()->subDay(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 7,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 7,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 8,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 9,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 12,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 11,
            'id_tujuan' => 3,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 10,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Berat',
            'tanggal' => Carbon::today(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 8,
            'id_tujuan' => 3,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
        Order::create([
            'id_pengguna' => 6,
            'id_driver' => 7,
            'id_tujuan' => 2,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today(),
            'status' => 'Dibatalkan',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 9,
            'id_tujuan' => 1,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today(),
            'status' => 'Sedang Berjalan',
        ]);
        Order::create([
            'id_pengguna' => 5,
            'id_driver' => 11,
            'id_tujuan' => 3,
            'keadaan' => 'Fatal',
            'tanggal' => Carbon::today(),
            'status' => 'Sedang Berjalan',
        ]);
        Order::create([
            'id_pengguna' => 4,
            'id_driver' => 12,
            'id_tujuan' => 1,
            'keadaan' => 'Luka Ringan',
            'tanggal' => Carbon::today(),
            'status' => 'Selesai',
        ]);
    }
}
