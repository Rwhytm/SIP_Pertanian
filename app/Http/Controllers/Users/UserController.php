<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\ProdukImage;

class UserController extends Controller
{
    public function index(){
        $image =  ProdukImage::orderBy('id', 'ASC');
        $produk = Produk::orderBy('nama_produk', 'ASC')->paginate(15);
        return view('users\home',['produk' => $produk, 'image' => $image]);
    }
    public function terbaru(){
        $produk = Produk::orderBy('id', 'DESC')->paginate(15); 
        return view('users\home',['produk' => $produk]);
    }
    public function terlama(){
        $produk = Produk::orderBy('id', 'ASC')->paginate(15); 
        return view('users\home',['produk' => $produk]);
    }
    public function daritinggi(){
        $produk = Produk::orderBy('harga', 'DESC')->paginate(15); 
        return view('users\home',['produk' => $produk]);
    }
    public function darirendah(){
        $produk = Produk::orderBy('harga', 'ASC')->paginate(15); 
        return view('users\home',['produk' => $produk]);
    }
}
