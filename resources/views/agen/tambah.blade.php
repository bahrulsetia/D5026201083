@extends('layout.bahagia')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Data Agen</h3>

	<a href="/agen"> Kembali</a>

	<br/>
	<br/>

	<form action="/agen/store" method="post">
		{{ csrf_field() }}
		Nama Agen : <input type="text" name="namaagen" required="required"> <br/>
		Jumlah Agen : <input type="number" name="jumlahagen" required="required"> <br/>
		Tersedia :
        <input type="radio" id="tersedia" name="tersedia" value="Y">
        <label for="tersedia">TERSEDIA </label>
        <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
        <label for="tidak">TIDAK TERSEDIA</label><br/><br>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
