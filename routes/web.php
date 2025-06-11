<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MakananDBController;
use App\Http\Controllers\KeranjangDBController;
//sama dengan import java.io.*

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//system.out.println();
//Route.get();

Route::get('/', function () {
    return view('welcome');
});

//simple
Route::get('/selamat', function () {
    return view('welcome');
});

//view code
Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('blog', function () {
	return view('blog');
});

//controller
Route::get('hello', [Coba::class, 'helloword']);
//Route::get('hello', 'App\Http\Controllers\Coba@helloworld');

//namafile boleh sama dgn asli atau beda
Route::get('pertama', function () {
	return view('pertama');
});


//route kumpulan tugas
Route::get('frontend', function () {
	return view('satuEts.frontend');
});

//route untuk file tugas hingga ets
//pt 1
Route::get('pertama', function () {
	return view('satuEts.pertama');
});

//latihan pt2 diedit langsung di file pt1

//3
Route::get('bootsrap1', function () {
	return view('satuEts.bootsrap1');
});

Route::get('bootsrap2', function () {
	return view('satuEts.bootsrap2');
});

//pt 4
Route::get('latihan', function () {
	return view('satuEts.latihan');
});

//tugas linktree pt 5
Route::get('indahkus', function () {
	return view('satuEts.indahkus');
});

//pt 7
Route::get('js1', function () {
	return view('satuEts.js1');
});

Route::get('js2', function () {
	return view('satuEts.js2');
});

//ets
Route::get('ets', function () {
	return view('satuEts.ets');
});

//4
Route::get('dosen', [Coba::class, 'index']);

//5
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index'] );

//menangkap data dari inputan

//halaman isian formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
//action form : redirect
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//8
// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//9
//route CRUD
Route::get('/pegawai',[PegawaiDBController::class, 'index']);

//10
//route pegawai tambah
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);

//route pegawai store
Route::post('/pegawai/store', [PegawaiDBController:: class, 'store']);

//11
//data id
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
//update
Route::post('/pegawai/update', [PegawaiDBController:: class, 'update']);

//12
//hapus
Route::get('/pegawai/hapus/{id}', [PegawaiDBController:: class, 'hapus']);

//16
//cari
Route::get('/pegawai/cari', [PegawaiDBController:: class, 'cari']);

//tugas pt 14
//makanan
//menampilkan db
Route::get('/makanan', [MakananDBController:: class, 'index']);

//input data
Route::get('/makanan/tambah', [MakananDBController:: class, 'tambah']);

//store
Route::post('/makanan/store', [MakananDBController:: class, 'store']);

//edit
Route::get('/makanan/edit/{id}', [MakananDBController::class, 'edit']);
//update
Route::post('/makanan/update', [MakananDBController:: class, 'update']);

//hapus
Route::get('/makanan/hapus/{id}', [MakananDBController:: class, 'hapus']);

//cari
Route::get('/makanan/cari', [MakananDBController:: class, 'cari']);

//Route keranjangbelanja
//Route tampilkan dan beli
Route::get('/keranjang', [KeranjangDBController:: class, 'index']);
Route::get('/keranjang/beli', [KeranjangDBController:: class, 'beli']);
//store dan bata
Route::post('/keranjang/store', [KeranjangDBController:: class, 'store']);
Route::get('/keranjang/batal/{ID}', [KeranjangDBController:: class, 'batal']);
