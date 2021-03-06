<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kamar;

class TamuKamarControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table kamar
        $kamar_deluxe = DB::table('kamar')->where('tipe_kamar', 'Deluxe')->get();
        $kamar_superior = DB::table('kamar')->where('tipe_kamar', 'Superior')->get();
        $superior = DB::table('fkamar')->where('tipe_kamar', 'Superior')->get();
        $deluxe = DB::table('fkamar')->where('tipe_kamar', 'Deluxe')->get();
    	// mengirim data kamar ke view index
    	return view('tamu.kamar',compact('kamar_deluxe','kamar_superior','deluxe','superior'));
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
	// DB::table('kamar')->insert([
	// 	'tipe_kamar' => $request->tipe_kamar,
	// 	'jumlah_kamar' => $request->jumlah_kamar,
	// ]);

    $data = Kamar::create($request->all());

    if($request->hasFile('gambar')){
        $request->file('gambar')->move('fotohotel/', $request->file('gambar')->getClientOriginalName());
        $data -> gambar = $request->file('gambar')->getClientOriginalName();
        $data ->save();
    }
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
