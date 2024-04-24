<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Halaman utama/homepage
Route::get('/', function() {
    // view() = resources/views
    return view('homepage');
});
// Paparkan Halaman login ke akaun pengguna
Route::get('/daftar-masuk', [LoginController::class, 'borangLogin'])->name('login');
//Route::view('/signin', 'auth.login');

// Alamat routing untuk terima data daripada borang login
Route::post('/signin', [LoginController::class, 'authenticate'])->name('login.authenticate');


// Halaman dashboard pengguna selepas login
Route::get('/dashboard', DashboardController::class)->middleware('auth')->name('dashboard');

Route::get('/signout', [LoginController::class, 'logout'])->name('logout');

