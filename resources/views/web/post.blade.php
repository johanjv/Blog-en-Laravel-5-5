@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-12">
		<h1>{{ $post->name }}</h1>
	</div>

		<div class="card">
			@if ($post->file)
				<img src="{{ $post->file }}" class=" card-img-top">	
			@endif
				  <div class="card-body">
					    <h5 class="card-title">
					    	<b>Categoria</b>
					    	<a href="#">{{ $post->category->name }}</a>
					    </h5>
					    
					    <p class="card-text">{{ $post->excerpt }}</p>
					    
					    <hr>
					    	{!! $post->body !!}
					    <hr>
					    
					    	<b>Etiquetas</b>
					    		@foreach ($post->tags as $tag)
					    	<a href="#">{{ $tag->name }}</a>
					    		@endforeach
				  </div>
		</div>
</div>
@endsection