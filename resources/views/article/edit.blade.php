@extends('layouts.blog')

@section('content')
  <h1>Edit article</h1>
	
	{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticleController@update', $article->id]]) !!}

	    @include('article/_form', ['submitText' => 'Update article'])

	{!! Form::close() !!}	
    
    @include('layouts.errors')


@endsection
