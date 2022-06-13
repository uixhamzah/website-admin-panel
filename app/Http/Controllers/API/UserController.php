<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
            $request->validate([
                'id_kabupaten' => ['required'],
                'name' => ['required','string','max:255'],
                'username' => ['required','string','max:255','unique:pengguna', 'alpha_dash'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'no_telp' => ['required','string','max:255'],
                'password' => ['required', 'confirmed', Password::defaults()],
            ]);

            Pengguna::create([
                'id_kabupaten' => $request->id_kabupaten,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'password' => $request->password,
            ]);

            $user = Pengguna::where('email', $request->email)->first();

            $tokenResult = $user->create_token('authToken')->plainTextToken;
            
            return ApiFormatter::createApi(200, 'Data tujuan berhasil diupdate', $user);

        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Gagal', [
                'error' => $error->getMessage(),
                'user' => Pengguna::first()
            ]);
        }
    }
}
