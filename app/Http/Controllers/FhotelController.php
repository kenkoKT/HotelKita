<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Fhotel;

class FhotelControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table pegawai
    	$fhotel = DB::table('fhotel')->get();

    	// mengirim data pegawai ke view index
    	return view('admin/fhotel/dashboard',['fhotel' => $fhotel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // memanggil view tambah
	return view('admin/fhotel/create');
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
        $data = Fhotel::create($request->all());

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('fotohotel/', $request->file('gambar')->getClientOriginalName());
            $data ->gambar = $request->file('gambar')->getClientOriginalName();
            $data ->save();
        }
	// DB::table('fhotel')->insert([
    //     'nama_fasilitas' => $request->nama_fasilitas,
    //     'keterangan' => $request->keterangan,
    //     'image' => $request->image,
    // ]);


    // $request->validate([
    //     'nama_fasilitas' =>'required',
    //     'keterangan' => 'required',
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // ]);

    // $input = $request->all();

    // if ($image = $request->file('image')) {
    //     $destinationPath = 'image/';
    //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //     $image->move($destinationPath, $profileImage);
    //     $input['image'] = "$profileImage";
    // }

    // DB::table('fhotel')->insert($input);
	// alihkan halaman ke halaman pegawai
	return redirect('admin/fhotel/dashboard');
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
	$fhotel = DB::table('fhotel')->where('id_fhotel',$id)->get();
	// passing data kamar yang didapat ke view edit.blade.php
	return view('admin/fhotel/edit',['fhotel' => $fhotel]);
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
    //     // update data kamar
	DB::table('fhotel')->where('id_fhotel',$request->id)->update([
        'tipe_kamar' => $request->tipe_kamar,
        'nama_fasilitas' => $request->nama_fasilitas,
        'image' => $request->image,
    ]);

    // $request->validate([
    //     'nama_fasilitas' => 'required',
    //     'keterangan' => 'required'
    // ]);

    // $input = $request->all();

    // if ($image = $request->file('image')) {
    //     $destinationPath = 'image/';
    //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //     $image->move($destinationPath, $profileImage);
    //     $input['image'] = "$profileImage";
    // }else{
    //     unset($input['image']);
    // }

    // DB::table('fhotel')->where('id_fhotel',$request->id)->update($input);
	// alihkan halaman ke halaman kamar
	return redirect('admin/fhotel/dashboard');
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
	DB::table('fhotel')->where('id_fhotel',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('admin/fhotel/dashboard');
    }
}
