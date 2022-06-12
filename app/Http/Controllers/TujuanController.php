<?php

namespace App\Http\Controllers;

use App\Models\Tujuan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function index()
    {
        $items = Tujuan::all()->sortDesc();
        return view('pages.tujuan', [
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
        // return response()->json($data);
        Tujuan::create($data);

        return redirect()->back()->with('success', $request->nama_rs.' berhasil ditambahakan!');
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

        $item = Tujuan::find($id);
        $item->update($data);

        return redirect()->back()->with('success', $request->nama_rs.' berhasil diubah!');
    }

    public function destroy($id)
    {
        $item = Tujuan::find($id);
        $title = $item->nama_rs;
        $item->delete();

        return redirect()->back()->with('success', $title.' dihapus!');
    }
}
