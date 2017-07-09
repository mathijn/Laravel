@extends('layouts.blog')

@section('content')

  <div class="container">
    <div class="col-sm-8 blog-main">
		
		@foreach($articles as $article)
			<h2><a href="{{ "/article/".$article->id }}">{{ $article->title }}</a></h2> <br>
			<p>{{ $article->body }}</p> 
		@endforeach()
		
    </div>

  </div><!-- /.container -->

@endsection

@section('footer')

@endsection
