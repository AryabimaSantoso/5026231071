@extends('template')

@section('content')

	<h3>Edit Plastik</h3>

	<a href="/plastik"> Kembali</a>

	<br/>
	<br/>

	<form action="/plastik/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $plastik->ID }}">
        <div class="row">
		    <div class="col-3">
                Merk Plastik
            </div>
            <div class="col-8">
                <input type="text" name="merkplastik" required="required" class="form-control" value="{{ $plastik->merkplastik }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Harga Plastik
            </div>
            <div class="col-8">
                <input type="text" name="hargaplastik" required="required" class="form-control" value="{{ $plastik->hargaplastik }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <input type="text" name="berat" required="required" class="form-control" value="{{ $plastik->berat }}">
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <div class="col-3">
                <label for="tersedia" class="form-label mb-0">Tersedia</label>
            </div>
            <div class="col-7">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="tersedia" name="tersedia"
                    style="transform: scale(1.5);"
                    {{ $plastik->tersedia ? 'checked' : '' }}>
                </div>
            </div>
        </div>


        <div>
		    <input type="submit" value="Simpan Data" class="btn btn-success">
        </div>

	</form>


@endsection
