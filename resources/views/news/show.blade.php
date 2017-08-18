@extends('layouts.admin')


@section('title', "| Новость ".$news->id)


@section('content')

<a href="{{ route('news.index') }}" class = "pull-left btn btn-primary">
	<span class = "glyphicon glyphicon-arrow-left"></span>
</a> 
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2 class = "color-title">{{ App::isLocale('uz') ? $news->title_uz : $news->title_ru }}</h2>
		<h3><b>{{ App::isLocale('uz') ? $news->overview_uz : $news->overview_ru }}</b></h3>
		<br>

		<img src= "{{ asset('images/'.$news->image) }}" class = "img-responsive" width = "100%">
		<p class = "info margin-top">
			Создано: {{ date('d.m.y, h:i', strtotime($news->created_at)) }}
			</br>
			Изменено: {{ date('d.m.y, h:i', strtotime($news->updated_at)) }}
		</p>

				
		<hr>
			

		<div class = "body">
			{!! App::isLocale('uz') ? $news->body_uz : $news->body_ru !!}
		</div>
	</div>
</div>



@endsection
