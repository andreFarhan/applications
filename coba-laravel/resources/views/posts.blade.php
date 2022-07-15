@extends('layouts.main')

@section('container')
	<h1>Halaman Posts</h1>
@foreach($posts as $post)
	<article class="mb-5">
		<h3>
			<a href="/post/{{ $post['slug'] }}">{{ $post['title'] }}</a>
		</h3>
		<h5>by: {{ $post['author'] }}</h5>
		<p>{{ $post['body'] }}</p>
	</article>
@endforeach
@endsection