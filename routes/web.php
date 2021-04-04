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
    ['namespace' => 'Admin', 'prefix' => 'admin'],
    function(){
        Route::get('dashboard', 'DashboardController@index');
        Route::get('kategori', 'KategoriController@index');
        Route::get('kategori/tambah', 'KategoriController@tambah');
        Route::post('kategori/store', 'KategoriController@store');
        Route::delete('kategori/hapus/{id}', 'KategoriController@hapus')->name('kategori.hapus');
        Route::get('kategori/delete/{id}', 'KategoriController@delete')->name('kategori.delete');
    }
);
