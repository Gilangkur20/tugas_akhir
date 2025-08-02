<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'nama_produk',
        'alamat',
        'no_hp',
        'harga_produk',
        'stok_gabah',
        'image_produk',
        'image_ktp',
    ];
}
