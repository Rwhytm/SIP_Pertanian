<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Keranjang;
use App\User;
use App\Models\ProdukImage;
use DB;

class UserController extends Controller
{
    public function index(){
        $image =  ProdukImage::orderBy('id', 'ASC');
        $produk = Produk::orderBy('nama_produk', 'ASC')->paginate(20);
        return view('users\home',['produk' => $produk, 'image' => $image]);
    }


    #filter untuk menampilkan produk
    public function terbaru(){
        $produk = Produk::orderBy('id', 'DESC')->paginate(15); 
        return view('users\filter\pterbaru',['produk' => $produk]);
    }
    public function terlama(){
        $produk = Produk::orderBy('id', 'ASC')->paginate(15); 
        return view('users\filter\pterlama',['produk' => $produk]);
    }
    public function daritinggi(){
        $produk = Produk::orderBy('harga', 'DESC')->paginate(15); 
        return view('users\filter\ptermahal',['produk' => $produk]);
    }
    public function darirendah(){
        $produk = Produk::orderBy('harga', 'ASC')->paginate(15); 
        return view('users\filter\ptermurah',['produk' => $produk]);
    }
    public function produk($id){
        $produk = Produk::find($id);
        return view('users.tampil-produk', ['produk' => $produk]);
    }

    public function tambah(Request $request){
        $keranjang = Keranjang::create([
            'user_id' => $request->user_id,
            'produk_id' => $request->id_produk, 
            'total' =>  $request->jumlah * $request->harga,
            'jumlah' => $request->jumlah,
            
        ]);
        return redirect(route('home user'));
    }

    public function keranjang($id){
        $user = User::find($id);
        $produk = Produk::find($id);
        $keranjang = Keranjang::get()->where('user_id', $user->id);
        return view('users.keranjang',['keranjang' => $keranjang, 'produk' => $produk]);
    }

    public function hapus($id){
        $keranjang = Keranjang::find($id);
        return route('tampil keranjang');
    }
    
}
