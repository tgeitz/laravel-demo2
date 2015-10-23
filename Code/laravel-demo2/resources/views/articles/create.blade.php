@extends ('app')
@section ('content')
	<h1>Write a New Article</h1>

	{!! Form::open(['url' => 'articles']) !!}
	@include ('articles.partials.form', ['submitButtonText' => "Create Article"])
	{!! Form::close() !!}
	@include ('errors.list')
@stop