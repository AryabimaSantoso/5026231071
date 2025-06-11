<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PlastikController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class, 'helloworld'] );
// Jika berupa controller gunakan []

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('pertemuan4', function () {
	return view('pertemuan4');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('danantara', function () {
	return view('danantara');
});

Route::get('ets', function () {
	return view('ets');
});

Route::get('template', function () {
	return view('template');
});

Route::get('dosen', [Link::class, 'index'] );

// Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index'] );

Route::get('/formulir', [PegawaiController::class, 'formulir'] );

Route::post('/formulir/proses', [PegawaiController::class, 'proses'] );

// route blog
Route::get('/blog', [BlogController::class, 'home'] );
Route::get('/blog/tentang', [BlogController::class, 'tentang'] );
Route::get('/blog/kontak', [BlogController::class, 'kontak'] );

// crud pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'] );
Route::get('/pegawai/cari', [PegawaiController::class, 'cari'] );
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah'] );
Route::post('/pegawai/store', [PegawaiController::class,'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit']);
Route::post('/pegawai/update', [PegawaiController::class,'update']);
Route::post('/pegawai/hapus/{id}', [PegawaiController::class,'hapus']);

// crud plastik
Route::get('/plastik', [PlastikController::class, 'index'] );
Route::get('/plastik/cari', [PlastikController::class, 'cari'] );
Route::get('/plastik/tambah', [PlastikController::class, 'tambah'] );
Route::post('/plastik/store', [PlastikController::class,'store']);
Route::get('/plastik/edit/{id}', [PlastikController::class,'edit']);
Route::post('/plastik/update', [PlastikController::class,'update']);
Route::post('/plastik/hapus/{id}', [PlastikController::class,'hapus']);

