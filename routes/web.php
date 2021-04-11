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
    [['middleware' => ['role:admin']],'namespace' => 'Admin', 'prefix' => 'admin'],
    function(){
        Route::get('dashboard', 'DashboardController@index');
        Route::get('kategori', 'KategoriController@index');
        Route::get('kategori/tambah', 'KategoriController@tambah');
        Route::post('kategori/store', 'KategoriController@store');
        Route::delete('kategori/hapus/{id}', 'KategoriController@hapus')->name('kategori.hapus');
        
        Route::get('kategori/edit/{id}', 'KategoriController@edit')->name('kategori.edit');
        Route::put('kategori/update/{id}', 'KategoriController@update')->name('kategori.update');
    }
);
Route::group(
    [['middleware' => ['role:pembeli']], 'namespace' => 'user', 'prefix' => 'user'], function(){

    }
);

Route::get('login/user', 'Auth\LoginController@showLoginForm')->name('login2');
Route::post('login/success', 'Auth\LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
