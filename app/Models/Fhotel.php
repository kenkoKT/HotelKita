<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fhotel extends Model
{
    protected $table = "fhotel";

    protected $fillable = [
        'nama_fasilitas',
        'keterangan',
        'image',
    ];
}
