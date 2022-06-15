<?php

use App\Http\Controllers\API\AlamatController;
use App\Http\Controllers\API\DriverController;
use App\Http\Controllers\API\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TujuanController;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [UserController::class, 'fetch']);
    Route::post('user', [UserController::class, 'updatePorfile']);
    Route::post('logout', [UserController::class, 'logout']);

    // Route::get('order', [OrderController::class, 'index']);
    Route::resource('order', OrderController::class);
});

Route::get('alamat/{prov?}/{kab?}/{kec?}/{des?}', [AlamatController::class, 'index']);
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::resource('tujuan', TujuanController::class);
Route::resource('driver', DriverController::class);