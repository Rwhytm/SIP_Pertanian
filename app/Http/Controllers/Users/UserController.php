<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class UserController extends Controller
{
    public function index(){
        $produk = Produk::orderBy('id', 'ASC')->paginate(10);
        return view('users\home',['produk' => $produk]);
    }
}
