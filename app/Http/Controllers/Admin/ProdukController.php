<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $this->data['produk'] = Produk::orderBy('id', 'ASC')->paginate(10);
    }
}
