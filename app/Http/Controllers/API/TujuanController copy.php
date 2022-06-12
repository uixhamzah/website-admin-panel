<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function all(Request $request)
    {
        $tujuan = Tujuan::with('kabupaten')->get();

        return ResponseFormatter::success(
            $tujuan,
            'Data tujuan berhasil diambil'
        );
    }
}
