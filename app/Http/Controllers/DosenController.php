<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $a = 3;
        $b = 7;
        $c = $a * $b;
        return "<h1>Hasil Perkalian = " . (string)$c . "</h1>";
    }

    public function showBlog()
    {
        $nama = "Ilung";
        $alamat = "Probolinggo";
        $umur = 19;
        return view('week1', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function shownama($nama) { //$nama; itu sama dengan {nama} di web.php
        return "Anda telah mengisikan: " . $nama;
    }

    public function formulir(){
    //  cek soal hak akses
    	return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }

	public function home(){
		return view('home');
	}

	public function tentang(){
		return view('tentang');
	}

	public function kontak(){
		return view('kontak');
	}

}
