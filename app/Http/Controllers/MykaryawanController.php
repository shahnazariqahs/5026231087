<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MykaryawanController extends Controller
{
    	public function index()
	{
    	        // mengambil data dari table mykaryawan
		$mykaryawan = DB::table('mykaryawan')->get();

    	        // mengirim data pegawai ke view index
		return view('mykaryawan.index',['mykaryawan' => $mykaryawan]);

	}

    // method untuk edit data pegawai
    public function edit($kodepegawai)
    {
	$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();

	// passing data pegawai yang didapat ke view edit.blade.php
	return view('mykaryawan.edit',['mykaryawan' => $mykaryawan]);

    }

    public function update(Request $request)
    {
	DB::table('mykaryawan')->where('kodepegawai', $request->kodepegawai)->update([
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);

	return redirect('/eas');
    }

    public function view($kodepegawai)
    {

        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();

        if (!$mykaryawan) {
            abort(404, 'Karyawan tidak ditemukan.');
        }

        return view('mykaryawan.view',['mykaryawan' => $mykaryawan]);
    }
}
