<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class AuthPassword_Controller extends Controller
{
    public function index()
    {
        return view('master.auth.partials_reset.forgot-password-form', [
            'halaman' => 'Lupa Kata Sandi'
        ]);
    }

    public function resetPassword(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required|email'
        ], [
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Email wajib menggunakan @.'
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function resetPasswordIndex(string $token)
    {
        return view('master.auth.partials_reset.reset-password-form', [
            'halaman' => 'Kata Sandi Baru',
            'token' => $token
        ]);
    }

    public function resetPasswordForm(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|confirmed',
        ], [
            'password.required' => 'Password tidak boleh kosong.',
            'password.min' => 'Minimum password 5 karakter.',
            'password.confirmed' => 'Password tidak sama.'
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect('/')->with('status_password_reset', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
