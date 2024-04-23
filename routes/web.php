<?php

use Illuminate\Support\Facades\Route;

// Halaman utama/homepage
Route::get('/', function() {
    // view() = resources/views
    return view('homepage');
});
// Paparkan Halaman login ke akaun pengguna
Route::get('/signin', function() {

    return view('auth.login');
});
// Alamat routing untuk terima data daripada borang login
Route::post('/login', function () {
    // Buat semakan data yang dihantar betul @ tidak
    // return 'Proses validasi borang login';
    // Jika betul, maka redirect ke halaman dashboard
    return redirect('/dashboard');
});


// Halaman dashboard pengguna selepas login
Route::get('/dashboard', function() {
    return 'Ini halaman dashboard pengguna';
});
