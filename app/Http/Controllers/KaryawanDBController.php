<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    	public function index()
	{
    	        // mengambil data dari table karyawan
		$karyawan = DB::table('karyawan')->paginate(10);

    	        // mengirim data pegawai ke view index
		return view('karyawan.index',['karyawan' => $karyawan]);

	}

    public function tambah()
    {

	// memanggil view tambah
	return view('karyawan.tambah');

    }

    public function store(Request $request){
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman index
        return redirect('karyawan');

    }

    public function hapus($kodepegawai, Request $request)
    {
     DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();

    return redirect('/karyawan');
    }

}
