<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('registerForm');
Route::post('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');;

