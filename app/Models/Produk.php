<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['nama_produk','jumlah','harga','deskripsi'];
    public function kategori(){
        return $this->belongsToMany('App\Models\Kategori', 'table_kategori_produk');
    }
}
