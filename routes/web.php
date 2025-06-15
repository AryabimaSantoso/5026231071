<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PlastikController;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog/blog');
});

Route::get('hello', [Link::class, 'helloworld'] );
// Jika berupa controller gunakan []

Route::get('AllFrontEnd/pertama', function () {
	return view('AllFrontEnd.pertama');
});

Route::get('AllFrontEnd/bootstrap1', function () {
	return view('AllFrontEnd.bootstrap1');
});

Route::get('AllFrontEnd/pertemuan4', function () {
	return view('AllFrontEnd.pertemuan4');
});

Route::get('AllFrontEnd/linktree', function () {
	return view('AllFrontEnd.linktree');
});

Route::get('AllFrontEnd/js1', function () {
	return view('AllFrontEnd.js1');
});

Route::get('AllFrontEnd/js2', function () {
	return view('AllFrontEnd.js2');
});

Route::get('AllFrontEnd/danantara', function () {
	return view('AllFrontEnd.danantara');
});

Route::get('AllFrontEnd/ets', function () {
    return view('AllFrontEnd.ets');
});

Route::get('allfrontend', function () {
	return view('allfrontend');
});

Route::get('template', function () {
	return view('template');
});

Route::get('dosen', [Link::class, 'index'] );

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

// crud karyawan (Latihan EAS Kode X2)
Route::get('/karyawan', [KaryawanController::class, 'index'] );
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah'] );
Route::post('/karyawan/store', [KaryawanController::class,'store']);
Route::post('/karyawan/hapus/{id}', [KaryawanController::class,'hapus']);
