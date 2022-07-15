@extends('layouts.main')

@section('container')
<article class="mb-5">
	<h1>{{ $post['title'] }}</h1>
	<h3>{{ $post['author'] }}</h3>
	<p>{{ $post['body'] }}</p>
</article>
<a href="/blog">Kembali</a>
@endsection