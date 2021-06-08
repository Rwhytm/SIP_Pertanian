<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Produk;
use App\Models\Keranjang;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }
    public function index(){
        $pelanggan = User::orderBy('id', 'DESC')->role('admin');
        $produk = Produk::orderBy('id', 'ASC');
        return view('admin\dashboard\index',['pelanggan' => $pelanggan, 'produk' => $produk]);
    }

    public function user(){
        $user = User::orderBy('nama', 'ASC')->role('pembeli')->paginate(10);
        return view('admin\users\index', ['user' =>$user]);
    }

    public function profil(){
        $user = User::get();
        return view('admin\users\profil',['user' => $user]);
    }
    public function userbaru(){
        $user = User::orderBy('id', 'DESC')->role('admin')->paginate(5);
        return view('admin\informasi\pengguna', ['user' =>$user]);
    }
    public function barangbaru(){
        $barang = Produk::orderBy('id', 'DESC')->paginate(5);
        return view('admin\informasi\barang', ['barang' =>$barang]);
    }
    public function pesananpending(){
        $keranjang = Keranjang::whereNotNull('nomor_transaksi')->get();
        return view("admin.pesanan.pesanan-pending",['keranjang' => $keranjang]);
    }
    public function pesanansukses(){
        $keranjang = Keranjang::where('status', 'sukses')->whereNotNull('nomor_transaksi')->get();
        return view("admin.pesanan.pesanan-sukses",['keranjang' => $keranjang]);
    }
    public function pesananpreorder(){
        $keranjang = Keranjang::where('status', 'PO')->whereNotNull('nomor_transaksi')->get();
        return view("admin.pesanan.pesanan-pending",['keranjang' => $keranjang]);
    }
}
