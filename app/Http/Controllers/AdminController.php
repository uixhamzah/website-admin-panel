<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $items = User::where('role','Admin')->get()->sortDesc();

        return view('pages.admin', [
            'items' => $items
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
            'username' => ['required', 'string', 'min:3', 'max:255', 'unique:users', 'alpha_dash'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => 'Admin',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', $request->name.' berhasil didaftarkan!');
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
        $data = $request->validate([
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'username' => ['required', 'string', 'alpha_dash', 'min:3', 'max:255', 'unique:users,username,' . $id],
            'email' => ['required', 'string', 'email', 'min:4', 'max:255', 'unique:users,email,' . $id],
        ]);
        
        $data['name'] = Str::title($request->name);
        $item = User::find($id);
        $item->update($data);

        return redirect()->back()->with('success', $request->name.' berhasil diubah!');
    }

    public function destroy($id)
    {
        $item = User::find($id);
        $title = $item->name;
        $item->delete();

        return redirect()->back()->with('success', $title.' dihapus!');
    }
}
