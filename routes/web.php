<?php

use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('home');
});

// Rute untuk halaman lainnya menggunakan PortoController
Route::prefix('/')->group(function () {
    Route::get('portofolio', [PortoController::class, 'portofolio'])->name('portofolio');
    Route::get('kontak', [PortoController::class, 'kontak'])->name('kontak');
});