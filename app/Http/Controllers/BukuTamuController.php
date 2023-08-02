<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BukuTamuController extends Controller
{
	public function index()
    {
    	// mengambil data dari table buku tamu
		$bukutamu = DB::table('buku_tamu')->get();
    	// mengirim data buku tamu ke view index
		return view('riwayatbukutamu',['buku_tamu' => $bukutamu]);
    }
	
    public function input() {
        return view('bukutamu');
    }

    public function store(Request $request)
    {
	// insert data ke table buku tamu
	$user = Auth::user();
	DB::table('buku_tamu')->insert([
		'nama' => $request->nama,
		'kontak' => $request->kontak,
		'jenis' => $request->jenis,
		'kegiatan' => $request->kegiatan,
        'file' => $request->file,
		'id' => $user->id,
	]);
	// alihkan halaman ke halaman home
	return redirect('/home');
    }
    
}