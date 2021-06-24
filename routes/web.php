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


Auth::routes();
Route::get('/', 'HomeController@client');
Route::get('/home', 'HomeController@client')->name('home');
Route::get('/admin', 'AdminController@admin');

Route::resource('admin/produk','ProdukController');
Route::resource('admin/brand','BrandController');
Route::resource('admin/member','MemberController');
Route::resource('admin/lokasi','LokasiController');