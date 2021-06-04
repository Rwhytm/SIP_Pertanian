<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(
    
    [['middleware' => ['role:pembeli']],'namespace' => 'Users', 'prefix' => 'users'],
    function(){
        Route::get('home', 'UserController@index')->name('home user');
        Route::get('home/terbaru', 'UserController@terbaru')->name('terbaru');
        Route::get('home/terlama', 'UserController@terlama')->name('terlama');
        Route::get('home/dari-tinggi', 'UserController@daritinggi')->name('hargatinggi');
        Route::get('home/dari-rendah', 'UserController@darirendah')->name('hargarendah');



        

        // pemesanan produk user
        Route::get('tampil-produk/{id}', 'UserController@produk')->name('tampil.produk');
        Route::post('keranjang', 'UserController@tambah')->name('keranjang');
        Route::get('keranjang/{id}', 'UserController@keranjang')->name('tampil keranjang');
        Route::delete('keranjang/hapus/{id}', 'UserController@hapus')->name('hapus keranjang');

        Route::get('pesanan','UserController@bayar')->name('bayar');
        Route::put('checkout', 'UserController@checkout')->name('checkout');
        Route::get('konfirmasi','UserController@konfirmasi')->name('konfirmasi');

    }
);
Route::group(
    
    [['middleware' => ['role:admin']],'namespace' => 'Admin', 'prefix' => 'admin'],
    function(){
        // dashboard
        Route::get('dashboard', 'DashboardController@index')->name('dashboard admin');
        Route::get('profile/{id}', 'DashboardController@profil')->name('profil admin');

        // tabel user
        Route::get('list-users', 'DashboardController@user')->name('admin_user');

        //table informasi
        Route::get('pengguna-baru', 'DashboardController@userbaru')->name('user.baru');
        Route::get('barang-baru', 'DashboardController@barangbaru')->name('barang.baru');

        // produk
        Route::get('produk', 'ProdukController@index')->name('produk admin');
        Route::get('produk/tambah', 'ProdukController@tambah');
        Route::get('produk/edit/{id}', 'ProdukController@edit')->name('produk.edit');
        Route::put('produk/update/{id}', 'ProdukController@update')->name('produk.update');
        Route::post('produk/store', 'ProdukController@store')->name('produk store');
        Route::delete('produk/hapus/{id}', 'ProdukController@hapus')->name('produk.hapus');

        // kategori
        Route::get('kategori', 'KategoriController@index')->name('kategori utama');
        Route::get('kategori/tambah', 'KategoriController@tambah')->name('kategori tambah');
        Route::post('kategori/store', 'KategoriController@store')->name('kategori store');
        Route::delete('kategori/hapus/{id}', 'KategoriController@hapus')->name('kategori.hapus');
        Route::get('kategori/edit/{id}', 'KategoriController@edit')->name('kategori.edit');
        Route::put('kategori/update/{id}', 'KategoriController@update')->name('kategori.update');

        // route image produk
        Route::get('produk/{id}/images', 'ProdukController@images')->name('produk.image');
        Route::get('produk/{id}/add-image', 'ProdukController@addImage')->name('add.image');
        Route::post('produk/images/{id}', 'ProdukController@upload_image')->name('upload_image');
        Route::delete('produk/images/{id}', 'ProdukController@remove_image')->name('hapus.image');
    }
);

Route::get('login/user', 'Auth\LoginController@showLoginForm')->name('login2');
Route::post('login/success', 'Auth\LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
