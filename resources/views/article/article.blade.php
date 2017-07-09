<?php 
// dd($articles);
?>

@extends('layouts.blog')

@section('content')

  <div class="container">
		<h2>Articles of: {{ $writer->name }}</h2>
		</br>
    <div class="col-sm-8 blog-main">
		@foreach($articles as $article)
			<h2><a href="{{ "/article/".$article->id }}">{{ $article->title }}</a></h2> <br>
			<p>{{ $article->body }}</p> 
			<i>wirtten: {{ $article->created_at }}</i>
			</br></br>
		@endforeach()
		
    </div>
	<a href="{{ URL::to('/') }}">Go back</a>
	
  </div><!-- /.container -->

@endsection

@section('footer')

@endsection
