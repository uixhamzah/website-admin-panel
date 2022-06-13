<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Driver;
use App\Models\Pengguna;
use App\Models\Penyedia;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class MainController extends Controller
{
    public function home()
    {
        $a = User::where('role','User')->get()->count();
        $b = User::where('role','Driver')->get()->count();
        $c = Penyedia::where('kategori','NGO')->count();
        $d = Penyedia::where('kategori','Rumah Sakit')->count();

        $today = Carbon::today();
        $e = Order::whereDate('tanggal', $today)->get();

        $d1 = Carbon::today()->subDays(6);
        $d2 = Carbon::today()->subDays(5);
        $d3 = Carbon::today()->subDays(4);
        $d4 = Carbon::today()->subDays(3);
        $d5 = Carbon::today()->subDays(2);
        $d6 = Carbon::today()->subDay();
        $d7 = Carbon::today();

        // $d1 = Carbon::today()->subWeek();
        // $d2 = Carbon::today()->subDays(6);
        // $d3 = Carbon::today()->subDays(5);
        // $d4 = Carbon::today()->subDays(4);
        // $d5 = Carbon::today()->subDays(3);
        // $d6 = Carbon::today()->subDays(2);
        // $d7 = Carbon::today()->subDay();

        $dc1 = Order::whereDate('tanggal', $d1)->count();
        $dc2 = Order::whereDate('tanggal', $d2)->count();
        $dc3 = Order::whereDate('tanggal', $d3)->count();
        $dc4 = Order::whereDate('tanggal', $d4)->count();
        $dc5 = Order::whereDate('tanggal', $d5)->count();
        $dc6 = Order::whereDate('tanggal', $d6)->count();
        $dc7 = Order::whereDate('tanggal', $d7)->count();

        $dn1 = Carbon::parse($d1)->isoFormat('dddd');
        $dn2 = Carbon::parse($d2)->isoFormat('dddd');
        $dn3 = Carbon::parse($d3)->isoFormat('dddd');
        $dn4 = Carbon::parse($d4)->isoFormat('dddd');
        $dn5 = Carbon::parse($d5)->isoFormat('dddd');
        $dn6 = Carbon::parse($d6)->isoFormat('dddd');
        $dn7 = Carbon::parse($d7)->isoFormat('dddd');

        $pesanan = [$e->where('status','Sedang Berjalan')->count(), $e->where('status','Selesai')->count(), $e->where('status','Dibatalkan')->count()];
        $mingguan = [$dc1, $dc2, $dc3, $dc4, $dc5, $dc6, $dc7];
        $hari = [$dn1, $dn2, $dn3, $dn4, $dn5, $dn6, $dn7];

        return view('pages.dashboard', [
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'pesanan' => $pesanan,
            'mingguan' => $mingguan,
            'hari' => $hari,
        ]);
    }

    public function gantiPassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->back()->with('success', 'Kata sandi anda berhasil diubah');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Kata sandi anda salah'
        ]);
    }

    public function riwayat()
    {
        $items = Order::all()->sortDesc();

        return view('pages.riwayat', [
            'items' => $items
        ]);
    }
    
    public function pengguna()
    {
        $items = User::where('role','User')->get()->sortDesc();

        return view('pages.pengguna', [
            'items' => $items
        ]);
    }
}
