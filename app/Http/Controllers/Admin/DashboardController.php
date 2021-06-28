<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Produk;
use App\Models\Keranjang;
use \App\Mail\TestMail;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }
    public function index(){
        $pelanggan = User::orderBy('id', 'DESC')->role('pembeli');
        $produk = Produk::orderBy('id', 'ASC');
        $keranjang1 = Keranjang::where('status', 'konfirmasi')->get();
        $keranjang = Keranjang::where('status', 'sukses')->get();
        return view('admin\dashboard\index',['pelanggan' => $pelanggan, 'produk' => $produk, 'keranjang' =>$keranjang, 'pending' => $keranjang1]);
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
        $user = User::orderBy('id', 'DESC')->role('pembeli')->paginate(5);
        return view('admin\informasi\pengguna', ['user' =>$user]);
    }
    public function barangbaru(){
        $barang = Produk::orderBy('id', 'DESC')->paginate(5);
        return view('admin\informasi\barang', ['barang' =>$barang]);
    }
    public function pesananpending(){
        $pembeli = User::get();
        $keranjang = Keranjang::where('status', 'pending')->get()->unique('nomor_transaksi');
        return view("admin.pesanan.pesanan-pending",['keranjang' => $keranjang,'pembeli' => $pembeli]);
    }
    public function pesanandibayar(){
        $pembeli = User::get();
        $keranjang = Keranjang::where('status', 'konfirmasi')->get()->unique('nomor_transaksi');
        return view("admin.pesanan.pesanan-konfirmasi",['keranjang' => $keranjang, 'pembeli' => $pembeli]);
    }
    public function pesananproses(){
        $pembeli = User::get();
        $keranjang = Keranjang::where('status', 'proses')->get()->unique('nomor_transaksi');
        return view("admin.pesanan.pesanan-diproses",['keranjang' => $keranjang,'pembeli' => $pembeli]);
    }
    public function pesanangagal(){
        $pembeli = User::get();
        $keranjang = Keranjang::where('status', 'gagal')->get()->unique('nomor_transaksi');
        return view("admin.pesanan.pesanan-cancel",['keranjang' => $keranjang, 'pembeli' => $pembeli]);
    }
    public function download(request $request, $id){
        // $path = Keranjang::where('nomor_transaksi', $id)->get('path')->first();
        return response()->download(public_path('storage/uploads/bukti/'.$id));
    //      dd($path);
    //     return view('welcome');
    }
    public function pesanansukses(){
        $pembeli = User::get();
        $keranjang = Keranjang::where('status', 'sukses')->get()->unique('nomor_transaksi');
        return view("admin.pesanan.pesanan-sukses",['keranjang' => $keranjang,  'pembeli' => $pembeli]);
    }
    // public function pesananpreorder(){
    //     $keranjang = Keranjang::where('status', 'PO')->whereNotNull('nomor_transaksi')->get();
    //     return view("admin.pesanan.pesanan-pending",['keranjang' => $keranjang]);
    // }
    public function prosespesanan(Request $request, $id){
        $nomor = Keranjang::where(['nomor_transaksi' => $id])->update([
            'status' => 'proses',
        ]);
        return redirect()->route('pesanan.diproses');
    }
    public function cancelpesanan(Request $request, $id){
        $nomor = Keranjang::where(['nomor_transaksi' => $id])->update([
            'status' => 'gagal',
        ]);
        $userid = Keranjang::where(['nomor_transaksi' => $id])->get()[0]->user_id;
        $user = User::find($userid)->email;
        
        $detail = [
            'title' => 'Pesanan Gagal',
            'body' => 'Pesanan Anda sudah dibatalkan oleh pihak bersangkutan'
        ];
        \Mail::to($user)->send(new TestMail($detail));
        
        return redirect()->route('pesanan.gagal');
    }
}
