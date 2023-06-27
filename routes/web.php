<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang');
Route::post('/simpan', [App\Http\Controllers\BarangController::class, 'simpan'])->name('simpan');
Route::get('/hapus/{id}', [App\Http\Controllers\BarangController::class, 'hapus'])->name('hapus');
Route::get('/update/{id}', [App\Http\Controllers\BarangController::class, 'update'])->name('update');
