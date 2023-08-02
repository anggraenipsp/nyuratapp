<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    public function index()
    {
        $pengajuan = DB::table('pengajuan')->get();

        return view('riwayatpengajuan', ['pengajuan' => $pengajuan]);
    } //1

    public function userPengajuan() {
        
        $user = Auth::user();
        $pengajuan = DB::table('pengajuan')->get()->where('id', $user->id);

        return view('riwayatpengajuanuser', ['pengajuan' => $pengajuan]);
    } //2

    public function pengajuan()
    {
        return view('pengajuan');
    } //3

    public function store(Request $request) {
        $user = Auth::user();

        DB::table('pengajuan')->insert([
            'nama' => $request->nama,
            'kontak' => $request->kontak,
            'kementrian' => $request->kementrian,
            'programkerja' => $request->programkerja,
            'jenis' => $request->jenis,
            'tujuan' => $request->tujuan,
            'penerima' => $request->penerima,
            'perihal' => $request->perihal,
            'file' => $request->file,
            'status' => "Diulas",
            'id' => $user->id,
        ]);
        return redirect('/home');
    }

    public function updateStatus(Request $request) {
        DB::table('pengajuan')->where('idNo',$request->id)->update([
            'status' => $request->status,
        ]);
        return redirect('/pengajuan/riwayat');
    }

    public function updateKomentar(Request $request)
    {
        DB::table('pengajuan')->where('idNo',$request->id)->update([
            'feedback' => $request->komentar,
        ]);
        return redirect('/pengajuan/riwayat');
    }

    public function updateNomorSurat(Request $request)
    {
        DB::table('pengajuan')->where('idNo',$request->id)->update([
            'nomorSurat' => $request->nomorSurat,
        ]);
        return redirect('/pengajuan/riwayat');
    }
}