<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

// Pastikan pengguna yang sudah login tidak bisa mengakses halaman login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman "app" hanya bisa diakses oleh pengguna yang sudah login
// Route::get('/app', function () {
//     return view('layouts.app');
// })->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
    Route::resource('doctor', \App\Http\Controllers\DoctorController::class);
    Route::resource('clinic-room', \App\Http\Controllers\ClinicRoomController::class);
});