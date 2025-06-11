@extends('template')

@section('content')
	<h3>Data Plastik</h3>

	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

	<h3>Data Plastik</h3>


	<p>Cari Data P :</p>
	<form action="/TugasCRUD/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Plastik .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

	<br/>

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Merk Plastik</th>
			<th>Harga Plastik</th>
			<th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
		</tr>
		@foreach($plastik as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->merkplastik }}</td>
			<td>{{ $p->hargaplastik }}</td>
			<td>{{ $p->tersedia }}</td>
            <td>{{ $p->berat }}</td>
		</tr>
		@endforeach
	</table>

	<br/>
	Halaman : {{ $plastik->currentPage() }} <br/>
	Jumlah Data : {{ $plastik->total() }} <br/>
	Data Per Halaman : {{ $plastik->perPage() }} <br/>


	{{ $pegawai->links() }}

@endsection
