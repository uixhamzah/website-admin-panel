<?php

namespace App\Http\Controllers;

use App\Models\Penyedia;
use App\Models\Provinsi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PenyediaController extends Controller
{
    public function index()
    {
        $items = Penyedia::all()->sortDesc();

        return view('pages.penyedia', [
            'items' => $items,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['lat'] = Str::before($request->latlong, ', ');
        $data['long'] = Str::after($request->latlong, ', ');
        
        Penyedia::create($data);

        return redirect()->back()->with('success', $request->nama_penyedia.' berhasil ditambahakan!');
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
        $data['lat'] = Str::before($request->latlong, ', ');
        $data['long'] = Str::after($request->latlong, ', ');

        $item = Penyedia::find($id);
        $item->update($data);

        return redirect()->back()->with('success', $request->nama_penyedia.' berhasil diubah!');
    }

    public function destroy($id)
    {
        $item = Penyedia::find($id);
        foreach ($item->driver as $driver) {
            $driver->delete();
        }
        $title = $item->nama_penyedia;
        $item->delete();

        return redirect()->back()->with('success', $title.' dihapus!');
    }
}
