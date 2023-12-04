<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{

    public function indexkuliah()
	{
    	// mengambil data dari table pegawai
		$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
		return view('indexkuliah',['nilaikuliah' => $nilaikuliah]);

	}
    	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'ID' => $request->ID,
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}

}
