<?php

use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PortoController::class, 'home']);
Route::get('/portofolio', [PortoController::class, 'portofolio']);
Route::get('/kontak', [PortoController::class, 'kontak']);
