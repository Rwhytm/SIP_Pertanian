<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Produk;

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
}
