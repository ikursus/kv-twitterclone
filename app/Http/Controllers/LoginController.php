<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function borangLogin() {
        return view('auth.login');
    }

    function authenticate(Request $request) {

        // Dapatkan SEMUA data daripada borang login
        // $data = $request->all();
        // $data = $request->only('loginid', 'loginpass');
        // $data = $request->except('loginid');
        // $data = $request->input('loginid');
        $data = $request->validate([
            'loginid' => ['required', 'email:filter'],
            'loginpass' => 'required|min:3'
        ]);

        return $data;

        //return 'Proses Validasi Login';
        // return redirect('/dashboard');

    }
}
