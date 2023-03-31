<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPesanController;
use App\Http\Controllers\DataPenggunaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/data-sewa', function () {
    return view('data-sewa');
});
Route::get('/data-lapangan', [DataPesanController::class, 'data_lapangan']);

Route::get('/data-lama-sewa', function () {
    return view('data-lama-sewa');
});
Route::get('/data-pengguna', [DataPenggunaController::class, 'data_pengguna']);

Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/ketentuan', function () {
    return view('ketentuan');
});
Route::get('/data-pesan', [DataPesanController::class, 'data_pesan']);