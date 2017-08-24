@extends('layouts.main')

@section('title', '| '.$news->title_uz)

@section('content')

<h2 class = "text-center color-title">{{ App::isLocale('ru') ? $news->title_ru : $news->title_uz }}</h2>
<hr>
<h4><b>{{ App::isLocale('ru') ? $news->overview_ru : $news->overview_uz }}</b></h4>
<br>
<p><img src="{{ asset("images/".$news->image) }}" width = "100%"></p>
<br>
<p>{!! App::isLocale('ru') ? $news->body_ru : $news->body_uz  !!}</p>
@endsection