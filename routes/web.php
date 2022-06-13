<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PenyediaController;
use App\Http\Controllers\TujuanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth','is.admin'])->group(function () {

  Route::get('/', [MainController::class, 'home'])->name('dashboard');
  Route::put('ganti-password', [MainController::class, 'gantiPassword'])->name('ganti-password');
  Route::get('riwayat-pesanan', [MainController::class, 'riwayat'])->name('riwayat-pesanan');
  Route::resource('admin', AdminController::class)->middleware('role:Super Admin');
  Route::resource('rumah-sakit-tujuan', TujuanController::class);
  Route::resource('penyedia', PenyediaController::class);
  Route::resource('driver', DriverController::class);
  Route::get('pengguna', [MainController::class, 'pengguna'])->name('pengguna');

});

require __DIR__.'/auth.php';