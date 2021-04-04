<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;     
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
        $this->validate($request,
            ['nama_kategori' => 'required',]
        );    
        $kategori = Kategori::create([
            'nama_kategori' =>  Str::lower($request->nama_kategori),
        ]);
        return redirect('admin/kategori');
    }
    public function delete($id){
        $hapus = Kategori::find($id)->delete();
        return redirect('admin/kategori');
    }
    public function hapus($id){
        $hapus = Kategori::find($id)->delete();
        return redirect('admin/kategori');
    }
}
