@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-12">
		<h1>Lista de Articulos</h1>
	</div>

@foreach ($posts as $post)
		<div class="card">
				<img src="{{ $post->file }}" class=" card-img-top">	
				  <div class="card-body">
					    <h5 class="card-title"><b>{{ $post->name }}</b></h5>
					    <p class="card-text">{{ $post->excerpt }}</p>
					    <a href="{{ route('post', $post->slug) }}" class="pull-rigth">Leer màs</a>
				  </div>
		</div>
		<br>
	@endforeach
		<br>
	{{ $posts->render() }}

</div>
@endsection