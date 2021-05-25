<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class UserController extends Controller
{
    public function index(){
        $produk = Produk::orderBy('nama_produk', 'ASC')->paginate(15);
        return view('users\home',['produk' => $produk]);
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
