<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['nama_produk','jumlah','harga','deskripsi'];
    public function kategori(){
        return $this->belongTo('App\Models\Kategori', 'tabel_kategori_produk');
    }
    public static function statuses(){
        return [
            0 => 'draft',
            1 => 'active',
            2 => 'inactive',
        ];
        
    }
}
