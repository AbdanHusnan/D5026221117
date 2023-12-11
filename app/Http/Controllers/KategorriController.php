<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategorriController extends Controller
{
    public function index()
	{
        $kategorri = DB::table('kategorri')->get();
		return view('indexKategorri',['kategorri' => $kategorri]);

	}

    public function pilih(Request $request)
    {
        $selectedKategoriId = $request->input('kategorri');

        $kategoriNama = DB::table('kategorri')->where('ID', $selectedKategoriId)->value('Nama');

        return view('hasil', [
            'selectedKategoriId' => $selectedKategoriId,
        ]);
    }

}
