<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\DriverDetails;
use App\Models\Penyedia;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class DriverController extends Controller
{
    public function index()
    {
        $items = User::where('role','Driver')->get()->sortDesc();
        $penyedia = Penyedia::all();

        return view('pages.driver', [
            'items' => $items,
            'penyedia' => $penyedia
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $user = User::create([
            'name' => Str::title($request->name),
            'username' => Str::snake($request->name),
            'email' => $request->email,
            'role' => 'Driver',
            'password' => Hash::make('Driver123'),
        ]);


        $plat_a = Str::upper($request->plat_a);
        $plat_c = Str::upper($request->plat_c);

        DriverDetails::create([
            'id_user' => $user->id,
            'id_penyedia' => $request->id_penyedia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'plat' => $plat_a.' '.$request->plat_b.' '.$plat_c
        ]);

        return redirect()->back()->with('success', $user->name.' berhasil ditambahakan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        $data['name'] = Str::title($request->name);
        $item = User::find($id);
        $item->update($data);

        $plat_a = Str::upper($request->plat_a);
        $plat_c = Str::upper($request->plat_c);

        DriverDetails::where('id_user', $id)->update([
            'id_penyedia' => $request->id_penyedia,
            'jenis_kelamin' => $request->jenis_kelamin,
            'plat' => $plat_a.' '.$request->plat_b.' '.$plat_c
        ]);

        return redirect()->back()->with('success', $request->name.' berhasil diubah!');
    }

    public function destroy($id)
    {
        $item = User::find($id);
        $title = $item->name;
        $item->delete();
        $detail = DriverDetails::where('id_user', $id)->first();
        $detail->delete();

        return redirect()->back()->with('success', $title.' dihapus!');
    }
}
