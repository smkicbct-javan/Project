<?php

use App\Produk;
use App\OrderDetail;
use App\Order;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produkpelanggan','ProjectController@produkpelanggan');
Route::get('/cari2', 'Cari2Controller@cari2');
Route::get('/hasil2', 'Cari2Controller@getName2');

Route::get('/homes','ProjectController@index2');
Route::get('/cari', 'CariController@cari');
Route::get('/hasil', 'CariController@getName');
//
Route::group(['middleware'=>['web','auth','admin']],function(){
Route::get('/produk','ProjectController@index');
Route::get('/auth/register', 'ProjectController@regis');
Route::get('/homes/berhasil','ProjectController@berhasil');
Route::get('/produk/list_transaksi','ProjectController@wakwaw');
Route::get('/produk/data_transaksi/{id}','ProjectController@data_transaksi');
Route::get('/produk/transaksi_detail/{id}','ProjectController@transaksi_detail');


});
//
Route::get('/produkpelanggan/produkcart','ProjectController@list_cart');
Route::get('/homes/contact','ProjectController@index3');
Route::get('/produkpelanggan/create','ProjectController@createpelanggan');
Route::post('/produkpelanggan','ProjectController@storer');
Route::get('produk/cart/{id}', 'ProjectController@cart');

Route::get('cart/delete/{id}' ,'ProjectController@deletecart');

Route::get('cart/checkout' ,'ProjectController@checkout');

Route::get('/produkpelanggan/transaksi','ProjectController@transaksi');
//
Route::group(['middleware'=>['web','auth','admin']],function(){
Route::get('/produk/create','ProjectController@create');

Route::get('/produk/pembayaran/','ProjectController@pembayaran');
Route::put('/produk/pembayaran/{id}','ProjectController@pembayarancart');
});
//
Route::get('/produk/{id}','ProjectController@show');
//
Route::group(['middleware'=>['web','auth','admin']],function(){
Route::put('/produkpelanggan/{id}','ProjectController@updateutang');
Route::get('/produkpelanggan/{id}/editutang','ProjectController@editutang');
Route::get('/produk/{id}/edit','ProjectController@edit');
Route::put('/produk/{id}','ProjectController@update');
Route::delete('/produk/{id}','ProjectController@destroy');
});
Route::delete('/produkpelanggan/{id}','ProjectController@destroyer');
//

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


