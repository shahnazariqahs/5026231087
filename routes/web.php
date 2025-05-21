<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
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
	return view('frontend');
});

//route untuk file tugas hingga ets
Route::get('pertama', function () {
	return view('pertama');
});

Route::get('latihan', function () {
	return view('latihan');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('ets', function () {
	return view('ets');
});

Route::get('indahkus', function () {
	return view('indahkus');
});

Route::get('bootsrap1', function () {
	return view('bootsrap1');
});

Route::get('bootsrap2', function () {
	return view('bootsrap2');
});


//4
Route::get('dosen', [Coba::class, 'index']);

//5
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index'] );

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
