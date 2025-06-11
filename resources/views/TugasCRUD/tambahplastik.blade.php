@extends('template')

@section('content')
	<h3>Data Plastik</h3>

	<a href="/plastik"> Kembali</a>

	<br/>
	<br/>

	<form action="/plastik/store" method="post">
		{{ csrf_field() }}
        
        <div class="row">
            <div class="col-3">
                Merk Plastik
            </div>
            <div class="col-8">
                <input type="text" name="merkplastik" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Harga Plastik
            </div>
            <div class="col-8">
                <input type="number" name="hargaplastik" required="required" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <input type="number" name="berat" required="required" class="form-control">
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <div class="col-3">
                <label for="tersedia" class="form-label mb-0">Tersedia</label>
            </div>
            <div class="col-7">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="tersedia" name="tersedia" style="transform: scale(1.5);">
                </div>
            </div>
        </div>


        <div>
		    <input type="submit" value="Simpan Data" class="btn btn-success">
        </div>
	</form>

@endsection
