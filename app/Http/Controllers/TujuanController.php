<?php

namespace App\Http\Controllers;

use App\Models\Tujuan;
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
