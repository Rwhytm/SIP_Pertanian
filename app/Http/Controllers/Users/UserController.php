<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Keranjang;
use App\Models\Kategori;
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
            'user_id' => auth()->user()->id,
            'produk_id' => $request->id_produk, 
            'total' =>  $request->jumlah * $request->harga,
            'jumlah' => $request->jumlah,
        ]);
        return redirect(route('home user'));
    }

    public function keranjang($id){
        $user = User::find($id);
        $keranjang = Keranjang::where(['user_id'=> $user->id, 'status' => 'belum bayar'])->get();
        return view('users.keranjang',['keranjang' => $keranjang]);
    }

    public function kategori($id){
        // $kategori = Kategori->where('id', $id)->get();
        $produk = Kategori::find($id)->products[0]->id;
        return view('users.filter.hasilfilter', ['produk' => $produk]);
    }

    public function hapus($id){
        $userid = auth()->user()->id;
        $keranjang = Keranjang::find($id)->delete();
        return  redirect(route("keranjang", $userid));
    }
    public function bayar(){
        $user_id = auth()->user()->id;
        $keranjang = Keranjang::where(['user_id' => $user_id, 'status' => 'belum bayar'])->get();
        $order_total = Keranjang::where(['user_id' => $user_id, 'status' => 'belum bayar'])->sum('total');

        // dd($bayar);

        return view('users.pesanan', compact('keranjang', 'order_total'));
    }

    public function checkout(Request $request){
        $user_id = auth()->user()->id;
        $keranjang = Keranjang::where(['user_id' => $user_id, 'status' => 'belum bayar'])->update([
            'nomor_transaksi' => 'TRX-' . time(),
            'status' => 'pending'
        ]);
         return redirect()->route('home user');
    }
    public function pesanansaya(){
        $user_id = auth()->user()->id;
        $pesanansaya = Keranjang::distinct()->where(['user_id' => $user_id])->whereNotNull('nomor_transaksi')->get();
        return view('users.list-pesanan', ['pesanan' => $pesanansaya]);
    }
    public function konfirmasi(){
        return view('users.pembayaran');
    }
    // Mencari produk
    public function cari(Request $request){
        $cari = $request->cari;
        $produk = Produk::where('nama_produk', 'like',"%". $cari."%")->paginate(10);
        return view('users\filter\hasilcari', ['produk' => $produk]);
    }
    
}
