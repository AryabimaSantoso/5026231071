@extends('template')

@section('content')
	<h3>Data Plastik</h3>

	<a href="/plastik/tambah" class="btn btn-primary"> + Tambah Merk Baru</a>

    <p>Cari Data Plastik :</p>
	<form action="/plastik/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Plastik ..">
		<input type="submit" class="btn btn-info" value="CARI">
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
			<td>{{ $p->tersedia ? 'YES' : 'NO' }}</td>
            <td>{{ $p->berat }}kg </td>
			<td>
				<a href="/plastik/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
				|
				<form action="/plastik/hapus/{{ $p->ID }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>

			</td>
		</tr>
		@endforeach

	</table>
{{ $plastik->links() }}

@endsection
