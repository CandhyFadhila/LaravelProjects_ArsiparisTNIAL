<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthPassword_Controller extends Controller
{
    public function index(){
        return view('master.auth.master_reset_auth', [
            'halaman' => 'Kata Sandi Baru'
        ]);
    }
}
