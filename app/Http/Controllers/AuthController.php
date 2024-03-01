<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin(){
        return view('master.auth.partials_auth.login', [
            'halaman' => 'Login'
        ]);
    }

    public function signup(){
        return view('master.auth.partials_auth.signup', [
            'halaman' => 'Buat Akun'
        ]);
    }
}
