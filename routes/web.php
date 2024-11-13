<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('registerForm');
Route::post('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('loginForm');
Route::post('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');



