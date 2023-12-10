<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KabelController extends Controller
{
    public function index()
	{
    	// mengambil data dari table kabel
		// $kabel = DB::table('kabel')->get();

        $kabel = DB::table('kabel')->paginate(10);

    	// mengirim data kabel ke view index
		return view('indexkabel',['kabel' => $kabel]);

	}

	// method untuk menampilkan view form tambah kabel
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkabel');

	}

	// method untuk insert data ke table kabel
    public function store(Request $request)
    {
	// insert data ke table kabel
	DB::table('kabel')->insert([
		'merkkabel' => $request->merkkabel,
		'stockkabel' => $request->stockkabel,
	    'tersedia' => $request->has('is_checked') ? 'y' : 'n'
	]);
	// alihkan halaman ke halaman kabel
	return redirect('/kabel');

}

	// method untuk edit data kabel
	public function edit($id)
	{
		// mengambil data kabel berdasarkan id yang dipilih
		$kabel = DB::table('kabel')->where('kodekabel',$id)->get();
		// passing data kabel yang didapat ke view edit.blade.php
		return view('editkabel',['kabel' => $kabel]);

	}

	// update data kabel
	public function update(Request $request)
	{
		// update data kabel
		DB::table('kabel')->where('kodekabel',$request->id)->update([
		    'merkkabel' => $request->merk,
		    'stockkabel' => $request->stock,
		    'tersedia' => $request->has('is_checked') ? 'y' : 'n'
		]);
		// alihkan halaman ke halaman kabel
		return redirect('/kabel');
	}

	// method untuk hapus data kabel
	public function hapus($id)
	{
		// menghapus data kabel berdasarkan id yang dipilih
		DB::table('kabel')->where('kodekabel',$id)->delete();

		// alihkan halaman ke halaman kabel
		return redirect('/kabel');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table kabel sesuai pencarian data
		$kabel = DB::table('kabel')
		->where('merkkabel','like',"%".$cari."%")
		->paginate();

    		// mengirim data kabel ke view index
		return view('index',['kabel' => $kabel]);

	}

    public function view($id)
    {
        // mengambil data kabel berdasarkan id yang dipilih
        $kabel = DB::table('kabel')->where('kodekabel',$id)->get();
        // passing data kabel yang didapat ke view view.blade.php
        return view('viewkabel',['kabel' => $kabel]);

    }
}
