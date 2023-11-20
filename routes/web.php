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

Route::get('/blog', function () {
    return view('blog');
});

Route::get('ets', function () {
    return view('ets');
});

Route::get('soal1', function () {
    return view('soal1');
});

Route::get('validasi1', function () {
    return view('validasi1');
});



Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');


Route::get('pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');


Route::get('/pegawai','PegawaiController@index');
