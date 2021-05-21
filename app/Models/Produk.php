<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['nama_produk','jumlah','harga','deskripsi','foto_produk'];
    public function kategori(){
        return $this->belongTo('App\Models\Kategori', 'produk_kategori');
    }
    public static function statuses(){
        return [
            0 => 'draft',
            1 => 'active',
            2 => 'inactive',
        ];
        
    }
}
