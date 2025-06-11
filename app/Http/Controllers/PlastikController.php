<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlastikController extends Controller
{
    public function index()
	{
    	// mengambil data dari table plastik
        $plastik = DB::table('plastik')->paginate(10);

    	// mengirim data plastik ke view index
		return view('TugasCRUD/indexplastik',['plastik' => $plastik]);

	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table plastik sesuai pencarian data
		$plastik = DB::table('plastik')
		->where('merkplastik','like',"%".$cari."%")
		->paginate();

    	// mengirim data plastik ke view index
		return view('TugasCRUD/indexplastik',['plastik' => $plastik,'cari' => $cari]);

	}

    public function tambah()
	{

		// memanggil view tambah
		return view('TugasCRUD/tambahplastik');

	}

    public function store(Request $request)
	{

		DB::table('plastik')->insert([
			'merkplastik' => $request->merkplastik,
			'hargaplastik' => $request->hargaplastik,
			'tersedia' => $request->has('tersedia') ? 1 : 0,
            'berat' => $request->berat
		]);

		return redirect('/plastik');

	}

    public function edit($id)
	{
		// mengambil data plastik berdasarkan id yang dipilih
		$plastik = DB::table('plastik')->where('ID',$id)->first();
		// passing data plastik yang didapat ke view edit.blade.php
		return view('TugasCRUD/editplastik',['plastik' => $plastik]);

	}

    public function update(Request $request)
	{
		// update data plastik
		DB::table('plastik')->where('ID',$request->ID)->update([
			'ID' => $request->ID,
			'merkplastik' => $request->merkplastik,
            'hargaplastik' => $request->hargaplastik,
			'tersedia' => $request->has('tersedia') ? 1 : 0,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman plastik
		return redirect('/plastik');
	}

    public function hapus($id)
	{
		// menghapus data plastik berdasarkan id yang dipilih
		DB::table('plastik')->where('ID',$id)->delete();


		// alihkan halaman ke halaman plastik
		return redirect('/plastik');
	}

}
