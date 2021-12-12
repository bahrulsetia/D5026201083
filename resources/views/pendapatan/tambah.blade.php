@extends('layout.bahagia')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
        Pegawai : <select id="idpegawai" name="idpegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>

		Bulan : <input type="number" name="bulan" required="required"> <br/>
		Tahun : <input type="number" name="tahun" required="required"> <br/>
		Gaji : <input type="number" name="gaji" required="required"> <br/>
        Tunjangan : <input type="number" name="tunjangan" required="required"> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
