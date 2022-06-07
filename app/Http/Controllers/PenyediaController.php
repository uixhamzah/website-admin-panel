<?php

namespace App\Http\Controllers;

use App\Models\Penyedia;
use App\Models\Provinsi;
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
        //
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
        //
    }
}
