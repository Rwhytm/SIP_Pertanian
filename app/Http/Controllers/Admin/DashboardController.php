<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }
    public function index(){
        return view('admin\dashboard\index');
    }

    public function user(){
        $user = User::orderBy('nama', 'ASC')->role('pembeli')->paginate(10);
        return view('admin\users\index', ['user' =>$user]);
    }
}
