@extends('layout.bahagia')

@section('title', 'DATA AGEN')

@section('isikonten')

<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Detail Data Agen</h3>

    <a href="/agen"> Kembali</a>
    <br>
    <br>

	@foreach($agen as $a)
		Nama Agen :
        <label type="text" required="required" name="namaagen">{{ $a->namaagen }}</label> <br/>
		Jumlah Agen :
        <label type="number" required="required" name="jumlahagen">{{ $a->jumlahagen }}</label> <br/>
		Tersedia :
        <label type="text" required="required" name="tersedia">{{ $a->tersedia }}</label> <br/>
	@endforeach

@endsection
