@extends('layouts.blog')

@section('content')
  <h1>Create a post</h1>

	{!! Form::open(['url' => 'article']) !!}

		@include('article/_form', ['submitText' => 'Create article'])

	{!! Form::close() !!}
    
    @include('layouts.errors')


@endsection
