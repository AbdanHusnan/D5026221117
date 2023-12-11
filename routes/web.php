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

Route::get('/ets', function () {
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


// Route::get('pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');


// Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
// Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
// Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
// Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
// Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
// Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@indexkuliah');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaiKuliahController@tambah');
Route::get('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//route PRa EAS
Route::get('/kabel','App\Http\Controllers\KabelController@index');
Route::get('/kabel/tambahkabel','App\Http\Controllers\KabelController@tambah');
Route::get('/kabel/store','App\Http\Controllers\KabelController@store');
Route::get('/kabel/editkabel/{id}','App\Http\Controllers\KabelController@edit');
Route::get('/kabel/update','App\Http\Controllers\KabelController@update');
Route::get('/kabel/hapus/{id}','App\Http\Controllers\KabelController@hapus');
Route::get('/kabel/viewkabel/{id}','App\Http\Controllers\KabelController@view');

//route EAS
Route::get('/kategorri','App\Http\Controllers\KategorriController@index');
Route::post('/kategorri/pilih','App\Http\Controllers\KategorriController@pilih');

