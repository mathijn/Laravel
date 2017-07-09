@extends('layouts.blog')

@section('content')


	<div class="blog-post">
  		<h2 class="blog-post-title">{{ $article->title }}</h2>
  		<p class="blog-post-meta">{{ $article->created_at }} by <a href="#"> {{ $writer->name }} </a></p>
		<p>{{ $article->body }}</p>
		@unless($article->tags->isEmpty())
			Tags: <ul>
				@foreach($article->tags as $tag)
					<li>{{ $tag->name }}</li>
				@endforeach
			</ul>
		@endunless
		<br/><br/>
		<a href="{{ URL::to('/') }}">Go back</a>
	</div><!-- /.blog-post -->


@endsection
