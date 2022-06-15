<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\DriverDetails;
use App\Models\User;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $data = DriverDetails::with('user')->where('tersedia',true)->get();

        if (count($data)) {
            return ApiFormatter::createApi(200, 'Data driver berhasil diambil', $data);
        } else {
            return ApiFormatter::createApi(400, 'Tidak ada driver yang tersedia saat ini');
        }
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
