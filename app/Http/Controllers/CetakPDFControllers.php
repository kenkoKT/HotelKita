<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CetakPDFControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = auth()->user()->id;   

        // $reservasi = DB::where('nama')
        $reservasi = DB::table('reservasi')->where('user_id', $id)->get();

    	// mengirim data tamu ke view index
    	return view('tamu/bukti_pemesanan',['reservasi' => $reservasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            // mengambil data kamar berdasarkan id yang dipilih
        $reservasi = DB::table('reservasi')->where('id_reservasi',$id)->get();
        // passing data kamar yang didapat ke view edit.blade.php
        return view('tamu/cetak_bukti_pemesanan',['reservasi' => $reservasi]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
    DB::table('reservasi')->where('id_reservasi',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('tamu/bukti_pemesanan');
    }
}
