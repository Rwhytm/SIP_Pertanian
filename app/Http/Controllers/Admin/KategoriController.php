<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(){
        $this->data['kategori'] = Kategori::orderBy('id', 'ASC')->paginate(10);
        return view('admin.categories.kategori', $this->data);
    }
    public function tambah(){
        return view('admin.categories.tambah_kategori');
    }
    public function store(Request $request){
        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
        ]);
        return redirect('admin/kategori');
    }
}
