<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(){
        $this->data['produk'] = Produk::orderBy('id', 'ASC')->paginate(10);
        return view('admin.produk.index', $this->data);
    }
}
