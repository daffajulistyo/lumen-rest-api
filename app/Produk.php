<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model{
    protected $table = 'produk';

    // @var array

    protected $fillable = [
        'nama', 'harga', 'warna',
        'kondisi', 'deskripsi'

    ];


}