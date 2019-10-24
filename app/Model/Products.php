<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
        'kode', 'nama', 'deskripsi', 'stok', 'harga', 'berat'
    ];
}
