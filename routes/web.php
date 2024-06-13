<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BlogController::class, 'home']);
Route::get('/portofolio', [BlogController::class, 'portofolio']);
Route::get('/kontak', [BlogController::class, 'kontak']);
