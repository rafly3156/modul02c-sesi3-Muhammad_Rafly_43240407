<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProdukController; // Import Controller Produk [cite: 301]
use App\Http\Controllers\KategoriController; // Import Controller Kategori [cite: 331]

Route::get('/', function () { return view('welcome'); });

// Rute Resource Modul 5d [cite: 303, 331]
Route::resource('produk', ProdukController::class);
Route::resource('kategori', KategoriController::class);

// Rute Sesi sebelumnya tetap biarkan
Route::get('/halo', [InfoController::class, 'halo']);
Route::get('/dosen', [InfoController::class, 'dosen']);
use App\Http\Controllers\BukuController;

// Satu baris rute untuk URL /koleksi 
Route::resource('koleksi', BukuController::class);