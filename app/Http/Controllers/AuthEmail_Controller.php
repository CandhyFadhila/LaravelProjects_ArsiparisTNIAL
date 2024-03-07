<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class AuthEmail_Controller extends Controller
{
    public function notice()
    {
        // return redirect('session_users')->with('error_verifcation', 'silahkan verifikasi email');
        return view('master.auth.master_reset_auth', [
            "halaman" => 'Email Verification',
        ]);
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect('/')->with('udah_verif', 'Thank you for your registering. Please log in.');
    }

    public function resendEmailVerif(Request $request)
    {
        try {
            $request->user()->sendEmailVerificationNotification();

            return redirect('/email/verify')->with('berhasil_kirim', 'Thank you for your registering. Please log in.');

        } catch (\Exception $e) {
            return redirect('/email/verify')->with('gagal_kirim', 'Thank you for your registering. Please log in.');
        }
    }
}
