<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use App\Models\User;
use App\Models\UserDetails;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
            $request->validate([
                'id_kabupaten' => ['required'],
                'name' => ['required','string','max:255'],
                'username' => ['required','string','min:3','max:255','unique:users','alpha_dash'],
                'email' => ['required','string','email','min:4','max:255','unique:users'],
                'no_telp' => ['required','string','max:255'],
                'password' => ['required','confirmed',Password::defaults()],
            ]);

            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user_details = UserDetails::create([
                'id_user' => $user->id,
                'id_kabupaten' => $request->id_kabupaten,
                'no_telp' => $request->no_telp,
            ]);

            // $tokenResult = $user->createToken('authToken')->plainTextToken;
            $token = $user->createToken('authToken');
            
            return ApiFormatter::createApi(201, 'Pengguna berhasil didaftarkan', [
                'access_token' => $token->plainTextToken,
                'token_type' => 'Bearer',
                'user' => $user
            ]);

        } catch (Exception $error) {
            return ApiFormatter::error($error, $request->all());
            // return ApiFormatter::createApi(400, 'Pengguna gagal didaftarkan');
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => ['required', 'string', 'email'],
                'password' => ['required', 'string'],
            ]);

            $credentials = request(['email','password']);

            if (! Auth::attempt($credentials)) {
                return ApiFormatter::createApi(500, 'Autentikasi gagal', $request->all());
            }

            $user = User::where('email', $request->email)->first();

            if (! Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Password salah');
            }

            if ($user->role != 'User') {
                return ApiFormatter::createApi(500, 'Login gagal, akun yang terdaftar bukan merupakan akun Pengguna', $request->all());
            }

            $token = $user->createToken('authToken')->plainTextToken;
            
            return ApiFormatter::createApi(200, 'Login berhasil', [
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user
            ]);

        } catch (Exception $error) {
            return ApiFormatter::error($error, $request->all());
        }
    }

    public function fetch(Request $request)
    {
        // $user = Auth::user();
        // $user = $request->user();
        $user = User::find($request->user()->id);
        $user['no_telp'] = auth()->user()->details->no_telp;
        $user['provinsi'] = auth()->user()->details->kabupaten->provinsi->name;
        $user['kabupaten'] = auth()->user()->details->kabupaten->name;
        return ApiFormatter::createApi(200,'Profile user berhasil diambil', $user);
    }

    public function updatePorfile(Request $request)
    {
        try {

            $request->validate([
                'id_kabupaten' => ['required'],
                'name' => ['required','string','min:4','max:255'],
                'username' => ['required','string','alpha_dash','min:3','max:255','unique:users,username,'. auth()->user()->id],
                'email' => ['required','string','email','min:4','max:255','unique:users,email,'. auth()->user()->id],
                'no_telp' => ['required','string','max:255']
            ]);

            $user = User::find(auth()->user()->id);
            $user_details = UserDetails::where('id_user', $user->id)->first();

            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
            ]);
            $user_details->update([
                'id_kabupaten' => $request->id_kabupaten,
                'no_telp' => $request->no_telp,
            ]);
            $user['id_kabupaten'] = $user_details->id_kabupaten;
            $user['no_telp'] = $user_details->no_telp;

            return ApiFormatter::createApi(200,'Profile user berhasil diupdate', $user);
            
        } catch (Exception $error) {
            return ApiFormatter::error($error, $request->all());
        }
    }

    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken()->delete();

        return ApiFormatter::createApi(200,'Token revoked', $token);
    }
}
