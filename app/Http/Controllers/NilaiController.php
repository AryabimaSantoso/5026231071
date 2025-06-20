<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
	{
    	// mengambil data dari table plastik
        $nilai = DB::table('nilai')->paginate(10);

    	// mengirim data plastik ke view index
		return view('EAS/indexnilai',['nilai' => $nilai]);

	}

    public function tambah()
	{

		// memanggil view tambah
		return view('EAS/tambahnilai');

	}

    public function store(Request $request)
	{

		DB::table('nilai')->insert([
			'id' => $request->id,
			'nomorinduksiswa' => $request->nomorinduksiswa,
			'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
		]);

		return redirect('/eas');

	}
}
