<?php

namespace App\Http\Controllers;

use App\Models\mahasiswabaru;
use Illuminate\Http\Request;

class mahasiswaController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $dataMhs['mhs2'] = mahasiswabaru::get();
        //return  $dataMhs;
        return view('tampilDataMhs', $dataMhs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('inputData');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $tambahDbs = new mahasiswabaru;
        $tambahDbs->kode_pendaftar =$request['kd_pendaftar'];
        $tambahDbs->nama_pendaftar=$request['nm_pendaftar'];
        $tambahDbs->periode=$request['periode'];
        $tambahDbs->jalur_pendaftaran=$request['jalur_pendaftaran'];
        $tambahDbs->gelombang=$request['gelombang'];
        $tambahDbs->sistem_kuliah=$request['sistem_kuliah'];
        $tambahDbs->progdi=$request['progdi'];
        $tambahDbs->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
