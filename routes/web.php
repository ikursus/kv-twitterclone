<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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
// Terima data daripada borang post / tweet
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); // Route parameter



Route::get('/signout', [LoginController::class, 'logout'])->name('logout');

