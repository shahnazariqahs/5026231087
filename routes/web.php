<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
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


//route untuk file tugas-ets
Route::get('frontend', function () {
	return view('frontend');
});

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

Route::get('index', function () {
	return view('index');
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
