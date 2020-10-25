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
Route::get('/', 'HomeController@welcome')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view-barang/{id}', 'HomeController@view_barang')->name('viewbarang');
Route::get('/input-tag/{id}', 'TagBarangController@input_tag');
Route::delete('/hapus-tag/{id}/{id2}', 'TagBarangController@delete_tag');
Route::get('/user-profile/update-profile', 'UserProfileController@update_profile');
Route::put('/user-profile/update-profile', 'UserProfileController@process_profile');

Route::resource('barang', 'BarangController');
Route::resource('kategori', 'KategoriController');
Route::resource('tag', 'TagController');
Route::resource('user-profile', 'UserProfileController');
Route::resource('tag-barang', 'TagBarangController');
