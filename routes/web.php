<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resources(['barang' => App\Http\Controllers\BarangController::class]);
Route::resources(['jenis' => App\Http\Controllers\JenisController::class]);
Route::resources(['supplier' => App\Http\Controllers\SupplierController::class]);
Route::resources(['transaksi' => App\Http\Controllers\TransaksiController::class]);
