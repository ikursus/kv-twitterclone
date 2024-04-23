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
Route::get('/signin', [LoginController::class, 'borangLogin']);
//Route::view('/signin', 'auth.login');

// Alamat routing untuk terima data daripada borang login
Route::post('/signin', [LoginController::class, 'authenticate']);


// Halaman dashboard pengguna selepas login
Route::get('/dashboard', DashboardController::class);
