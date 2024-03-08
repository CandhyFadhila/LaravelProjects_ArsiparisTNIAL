<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function signin()
    {
        return view('master.auth.partials_auth.login', [
            'halaman' => 'Login'
        ]);
    }

    public function signup()
    {
        return view('master.auth.partials_auth.signup', [
            'halaman' => 'Buat Akun'
        ]);
    }

    public function signin_code(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ], [
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Email wajib menggunakan @.',

            'password.required' => 'Password tidak boleh kosong.',
            'password.min' => 'Minimum password 5 karakter.',
        ]);

        $info_login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($info_login)) {
            Debugbar::info('Login successful');
            // return redirect('dashboard')->with('success', 'Selamat Datang, "' . Auth::user()->name . '" di Lanal Semarang | StaffMin');
            return redirect('/');
        } else {
            Debugbar::warning('Password is incorrect');
            return redirect('/')->with('error_password', 'error_password');
        }
    }

    public function signup_code(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ], [
            'name.required' => 'Nama tidak boleh kosong.',

            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Email wajib menggunakan @.',
            'email.unique' => 'Email tersebut sudah pernah digunakan.',

            'password.required' => 'Password tidak boleh kosong.',
            'password.min' => 'Minimum password 5 karakter.'
        ]);

        $data_register = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        // return $data_register;
        User::create($data_register);

        $info_login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($info_login)) {
            // Debugbar::info($info_login);
            return redirect('/')->with('success_register', 'message_success');
        }
    }
}
