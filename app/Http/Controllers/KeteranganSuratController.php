<?php

namespace App\Http\Controllers;

use App\Models\KeteranganSurat;
use Illuminate\Http\Request;

class KeteranganSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keterangan_surat = KeteranganSurat::all();

        return view('keterangan', [
            'keterangan_surat' => $keterangan_surat,

            'halaman' => 'Keterangan Surat'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KeteranganSurat $keteranganSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KeteranganSurat $keteranganSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KeteranganSurat $keteranganSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KeteranganSurat $keteranganSurat)
    {
        //
    }
}
