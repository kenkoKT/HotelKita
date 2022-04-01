<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepsionisControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $reservasi = DB::where('nama')
        $reservasi = DB::table('reservasi')
        ->get();

    	// mengirim data tamu ke view index
    	return view('resepsionis/dashboard',['reservasi' => $reservasi]);
    }

    public function search(Request $request)
    {


        // dd($request->nama_tamu);
        $reservasi = DB::table('reservasi')->where('nama_tamu', $request->nama_tamu)->get();

        return view('resepsionis/dashboard', ['reservasi' => $reservasi]);
    }
    public function filter(Request $request)
    {

        // dd($request->nama_tamu);
        $reservasi = DB::table('reservasi')->where('tgl_checkin', $request->tgl_checkin)->get();

        return view('resepsionis/dashboard', ['reservasi' => $reservasi]);
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
        //
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
    public function destroy($id)
    {
        //
    }
}
