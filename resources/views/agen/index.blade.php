@extends('layout.bahagia')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Data Agen</h3>

    <a href="/agen/tambah" class="btn btn-primary" > + Tambah Data Agen Baru</a>
	<br/>
    <br/>

    <p>Cari Data Agen berdasarkan Nama :</p>
	<form action="/agen/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Agen .." value="{{ old('cari') }}">
		<input class="form-control btn-success" type="submit" value="CARI">
	</form>
    <br>
	<table class="table table-success table-striped">
		<tr>
            <th>No</th>
			<th>Nama Agen</th>
			<th>Jumlah Agen</th>
            <th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($agen as $a)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $a->namaagen }}</td>
			<td>{{ $a->jumlahagen }}</td>
            <td>{{ $a->tersedia }}</td>
			<td>
                <a href="/agen/detail/{{ $a->kodeagen }}" class="btn btn-default btn-sm" role="button">View Detail</a>
				<a href="/agen/edit/{{ $a->kodeagen }}" class="btn btn-warning">Edit</a>
				<a href="/agen/hapus/{{ $a->kodeagen }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $agen->links() }}
@endsection
