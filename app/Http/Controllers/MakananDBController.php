<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakananDBController extends Controller
{
    	public function index()
	{
    	        // mengambil data dari table makanan
		$makanan = DB::table('makanan')->paginate(10);

    	        // mengirim data pegawai ke view index
		return view('makanan.index',['makanan' => $makanan]);

	}

    public function tambah()
    {

	// memanggil view tambah
	return view('makanan.tambah');

    }


    // method untuk insert data ke table makanan
    public function store(Request $request)
    {
	// insert data ke table makanan
	DB::table('makanan')->insert([
		'merkmakanan' => $request->merk,
        'hargamakanan' => $request->harga,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman makanan
	return redirect('/makanan');

    }

    // method untuk edit data pegawai
public function edit($id)
{
	// mengambil data makanan berdasarkan id yang dipilih
	$makanan = DB::table('makanan')->where('id',$id)->get();
	// passing data makanan yang didapat ke view edit.blade.php
	return view('makanan.edit',['makanan' => $makanan]);

}

// update data makanan
public function update(Request $request)
{
	// update data makanan
	DB::table('makanan')->where('id',$request->id)->update([
		'merkmakanan' => $request->merk,
        'hargamakanan' => $request->harga,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman makanan
	return redirect('/makanan');
}

// method untuk hapus data makanan
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('makanan')->where('id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/makanan');
}

//cari data makanan
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table makanan sesuai pencarian data
		$makanan = DB::table('makanan')
		->where('merkmakanan','like',"%".$cari."%")
		->paginate();

    	// mengirim data makanan ke view index
		return view('makanan.index',['makanan' => $makanan]);

	}

}
