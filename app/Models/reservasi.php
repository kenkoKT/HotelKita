<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{

    protected $table = "reservasi";

    protected $primaryKey = 'id_reservasi';

    protected $fillable = ['tgl_checkin','tgl_checkout','jumlah_kamar','nama_pemesanan','email','nama_tamu','tipe_kamar'];
}
