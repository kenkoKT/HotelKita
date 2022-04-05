<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fkamar extends Model
{
    protected $table = "fkamar";

    protected $fillable = [
        'tipe_kamar',
		'nama_fasilitas',
        'image',
    ];
}
