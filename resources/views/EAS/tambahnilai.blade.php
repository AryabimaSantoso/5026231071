@extends('template')

@section('content')
	<h3>Data Nilai</h3>

	<a href="/eas"> Kembali</a>

	<br/>
	<br/>

	<form action="/eas/store" method="post">
		{{ csrf_field() }}

        <div class="row">
            <div class="col-3">
                NRP
            </div>
            <div class="col-8">
                <input type="text" name="nomorinduksiswa" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Nilai Angka
            </div>
            <div class="col-8">
                <input type="number" name="nilaiangka" required="required" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                SKS
            </div>
            <div class="col-8">
                <input type="number" name="sks" required="required" class="form-control">
            </div>
        </div>

        <div>
		    <input type="submit" value="Simpan" class="btn btn-success">
        </div>
	</form>

@endsection
