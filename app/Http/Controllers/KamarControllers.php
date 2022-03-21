<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table pegawai
    	$kamar = DB::table('kamar')->get();
 
    	// mengirim data pegawai ke view index
    	return view('admin/kamar/dashboard',['kamar' => $kamar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // memanggil view tambah
	return view('admin/kamar/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table kamar
	DB::table('kamar')->insert([
		'tipe_kamar' => $request->tipe_kamar,
		'jumlah_kamar' => $request->jumlah_kamar,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('admin/kamar/dashboard');
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
        // mengambil data kamar berdasarkan id yang dipilih
	$kamar = DB::table('kamar')->where('id_kamar',$id)->get();
	// passing data kamar yang didapat ke view edit.blade.php
	return view('admin/kamar/edit',['kamar' => $kamar]);
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
        // update data kamar
	DB::table('kamar')->where('id_kamar',$request->id)->update([
        'tipe_kamar' => $request->tipe_kamar,
        'jumlah_kamar' => $request->jumlah_kamar,
        
	]);
	// alihkan halaman ke halaman kamar
	return redirect('admin/kamar/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
	DB::table('kamar')->where('id_kamar',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('admin/kamar/dashboard');
    }
}
