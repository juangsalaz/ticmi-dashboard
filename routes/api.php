<?php

use App\Http\Controllers\API\PaketProdukController;
use App\Http\Controllers\API\PelangganController;
use App\Http\Controllers\API\TagihanController;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::apiResource('pelanggans', PelangganController::class);
Route::get('pelanggans', [PelangganController::class, 'index']);
Route::delete('pelanggans', [PelangganController::class, 'destroy']);
Route::put('pelanggans', [PelangganController::class, 'update']);
Route::get('pelanggans/{id}', [PelangganController::class, 'getProfileById']);

Route::resource('pelanggans.produks', PaketProdukController::class);
Route::resource('tagihans.produks', TagihanController::class);
