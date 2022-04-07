<?php

namespace App\Http\Controllers;

use App\Models\reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class DataReservasiControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = DB::table('kamar')->get();

        $users = DB::table('users')->get();
        return view('tamu/dashboard',['kamar' => $kamar, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('home');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = auth()->user()->id;

        // dd($id);

        // dd($awal);


       $awal = DB::table('kamar')->where('tipe_kamar', $request->tipe_kamar)->value('jumlah_kamar');

        $akhir = $awal - $request->jumlah_kamar;

        $this->validate($request,[
            'email' =>'required|email'
        ]);

        DB::table('reservasi')->insert([
            'user_id' => $id,
            'tgl_checkin' => $request->tgl_checkin,
            'tgl_checkout' => $request->tgl_checkout,
            'jumlah_kamar' => $request->jumlah_kamar,
            'nama_pemesanan' => $request->nama_pemesanan,
            'email' => $request->email,
            'nama_tamu' => $request->nama_tamu,
            'tipe_kamar' => $request->tipe_kamar,
        ]);

        // dd($akhir);

        DB::table('kamar')->where('tipe_kamar', $request->tipe_kamar)->update([
            'jumlah_kamar' => $akhir
        ]);

        // alihkan halaman ke halaman home
        return redirect('tamu/bukti_pemesanan');

    }
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
