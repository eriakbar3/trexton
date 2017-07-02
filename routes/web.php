<?php

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

Route::get('/', 'FrontController@index');
Route::get('/about-us', 'FrontController@about');
Route::get('/kontak', 'FrontController@kontak');
Route::get('/db', function () {
    return view('layouts.plane');
});
Route::get('/admin','AdminController@index');
Route::get('/admin/barang-jasa','ProdukController@index');
Route::get('/admin/barang-jasa/tambah-barang-jasa','ProdukController@create');
Route::post('/admin/barang-jasa','ProdukController@post');
Route::resource('/admin/barang-jasa/kategori','KategoriController');
Route::get('admin/transaksi','TransaksiController@index');
Route::get('admin/transaksi/tambah','TransaksiController@create');
Route::get('admin/transaksi/detail/{id}','TransaksiController@show');
Route::get('admin/transaksi/print/{id}','TransaksiController@prints');
Route::DELETE('admin/transaksi/delete/{id}','TransaksiController@destroy');
Route::post('admin/transaksi/post','TransaksiController@store');
Route::get('admin/getharga','TransaksiController@getharga');
Route::post('to-cart','CartController@cart');
Route::post('hitung-ulang','CartController@hitung');
