<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Penyedia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $items = Driver::all()->sortDesc();
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
        $data = $request->all();

        $data['nama'] = Str::title($request->nama);
        $plat_a = Str::upper($request->plat_a);
        $plat_c = Str::upper($request->plat_c);
        $data['plat'] = $plat_a.' '.$request->plat_b.' '.$plat_c;
        
        Driver::create($data);

        return redirect()->back()->with('success', $data['nama'].' berhasil ditambahakan!');
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
        //
    }

    public function destroy($id)
    {
        $item = Driver::find($id);
        $title = $item->nama;
        $item->delete();

        return redirect()->back()->with('success', $title.' dihapus!');
    }
}
