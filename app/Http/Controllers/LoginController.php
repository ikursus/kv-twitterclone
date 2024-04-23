<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function borangLogin() {
        return view('auth.login');
    }

    function authenticate() {
        return 'Proses Validasi Login';
    }
}
