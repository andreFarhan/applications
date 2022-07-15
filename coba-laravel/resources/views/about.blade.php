@extends('layouts.main')

@section('container')
	<h1>Halaman About</h1>
	<p>{{ $nama; }}</p>
	<p>{{ $email; }}</p>
	<p><img src="gambar/{{ $gambar; }}" alt="{{ $nama; }}" width="200"></p>
@endsection