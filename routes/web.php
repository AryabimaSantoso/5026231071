<?php

use Illuminate\Support\Facades\Route;

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
