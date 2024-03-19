<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function check(){
    //     return view('master.dashboard.form.c_keterangan_surat',[
    //         'halaman' => 'Check Login',
    //     ]);
    // }

    public function index()
    {
        return view('master.dashboard.partials_dashboard.dashboard', [
            'halaman' => 'Dashboard',
            "active" => "dashboard"
        ]);
    }
}
