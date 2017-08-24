@extends('layouts.admin')

@section('title', '| '. (App::isLocale('uz') ? $document->title_uz : $document->title_ru))

@section('content')
	
	<h1 class = "text-center">
		<a href = "{{ route('documents.index') }}" class = "btn btn-large btn-primary pull-left"><span class = "glyphicon glyphicon-arrow-left"></span></a>
		{{ App::isLocale('uz') ? $document->category->category_uz : $document->category->category_ru}}
	</h1>
	<h3 class = "text-center color-title">{{ App::isLocale('uz') ? $document->title_uz : $document->title_ru }}</h3>
	<p>{!! App::isLocale('uz') ? $document->body_uz : $document->body_ru !!}</p>

@endsection