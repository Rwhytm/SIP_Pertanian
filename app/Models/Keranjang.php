<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang';
    protected $fillable = [
        'nomor_transaksi',
        'user_id',
        'produk_id',
        'total',
        'jumlah',
        'nomor_rekening',
        'nama_rekening',
        'nama_bank',
        'tanggal_transfer',
        'jumlah_dibayar'
    ];

    // public function produk()
    // {
    //     return $this->hasMany('App\Models\Produk', 'id', 'produk_id');
    // }
    public function produk()
    {
        return $this->belongsTo('App\Models\Produk', 'produk_id');
    }
    public function user()
    {
        return $this->belongsToMany('App\Models\User', 'keranjang');
    }
}
