@extends('layout.bahagia')

@section('title', 'EDIT DATA AGEN')

@section('isikonten')

<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Edit Data Agen</h3>

    <a href="/agen"> Kembali</a>

	@foreach($agen as $a)
	<form action="/agen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->kodeagen }}"> <br/>
		Nama Agen : <input type="text" required="required" name="namaagen" value="{{ $a->namaagen }}"> <br/>
		Jumlah Agen : <input type="number" required="required" name="jumlahagen" value="{{ $a->jumlahagen }}"> <br/>
		Tersedia :
        <input type="radio" id="tersedia" name="tersedia" value="Y" @if ($a->tersedia === "Y") checked="checked" @endif>
        <label for="tersedia">TERSEDIA</label>
        <input type="radio" id="tidak" name="tersedia" value="T" @if ($a->tersedia === "T") checked="checked" @endif>
        <label for="tidak">TIDAK TERSEDIA</label><br/><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
