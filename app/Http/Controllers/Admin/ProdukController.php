<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;   
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(){
        $this->data['produk'] = Produk::orderBy('id', 'ASC')->paginate(10);
        return view('admin.produk.produk', $this->data);
    }
    public function tambah(){
        return view('admin.produk.tambah_produk');
    }
    public function store(Request $request){
        $this->validate($request,
            []
        );    
        $produk = Produk::create([
            'nama_produk' =>  Str::upper($request->nama),
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto_produk' => $request->deskripsi,
        ]);
        return redirect('admin/produk');
    }
}
