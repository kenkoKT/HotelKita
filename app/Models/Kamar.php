<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = "kamar";

    protected $fillable = [
        'tipe_kamar',
		'jumlah_kamar',
        'image',
    ];
}
