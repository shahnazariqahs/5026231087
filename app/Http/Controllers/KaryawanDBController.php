<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//latihan eas
use Illuminate\Validation\Rule;

class KaryawanDBController extends Controller
{
    	public function index()
	{
    	        // mengambil data dari table karyawan
		$karyawan = DB::table('karyawan')->get();

    	        // mengirim data pegawai ke view index
		return view('karyawan.index',['karyawan' => $karyawan]);

	}

    public function tambah()
    {

	// memanggil view tambah
	return view('karyawan.tambah');

    }

    public function store(Request $request){
        //
        $request->validate([
            'kode' => [
                'required', // Tetap pastikan tidak kosong
                'string',
                'max:5',    // Batasi panjang sesuai definisi tabel
                Rule::unique('karyawan', 'kodepegawai'), // Pastikan kodepegawai unik
            ],
        ], [
            'kode.unique' => 'Kode Pegawai SUDAH ADA di tabel. Mohon gunakan kode lain.',
            'kode.required' => 'Kode Pegawai wajib diisi.', // Pesan tambahan jika kode kosong
            'kode.max' => 'Kode Pegawai tidak boleh lebih dari 5 karakter.', // Pesan tambahan jika panjang kode melebihi
        ]);

        //

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


    public function view($kodepegawai)
    {
        // Mengambil data karyawan berdasarkan kodepegawai
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();

        // Cek apakah karyawan ditemukan
        if (!$karyawan) {
            abort(404, 'Karyawan tidak ditemukan.'); // Atau redirect dengan pesan error
        }

        // Mengirim data karyawan ke view detail
        return view('karyawan.view',['karyawan' => $karyawan]);
    }
}
