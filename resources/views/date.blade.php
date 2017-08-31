@extends('layouts.main')

@section('title', '| Новости')

@section('content')
  
  <p><b>Дата: {{ $date }} ({{$news->count()+$depNews->count()}})</b></p>
  <hr>
  <h1 class = "color-title">{{ __('app.nav_news') }}</h1>
  <hr>
  @if($news->count() == 0 )
  <p><b>{{ __('app.no_results') }}</b></p>
  @endif
  @foreach($news as $new)
  <div class="panel panel-default">
    <div class="panel-heading">
      {{ App::isLocale('ru') ? $new->title_ru : $new->title_uz }}
    </div>

    <div class="panel-body">
      <div class="row">
        <div class="col-sm-3 text-center overflow-hidden">
          <img src="{{ asset("images/".$new->image)}}" height="100px">
        </div>

        <div class="col-sm-9">
          {{ $new->overview_uz }}
          <a href="{{ route('news.single', $new->slug) }}"> {{ __('app.read_more') }} </a>
        </div>
      </div>
    </div>

    <div class="panel-footer">
      <span class="glyphicon glyphicon-calendar"></span> {{ date('d.m.Y, h:i', strtotime($new->created_at)) }}
    </div>
  </div>
  @endforeach

  <h1 class = "color-title">{{ __('app.nav_news_dep') }}</h1>
  <hr>
  @if($depNews->count() == 0 )
  <p><b>{{ __('app.no_results') }}</b></p>
  @endif
  @foreach($depNews as $new)
  <div class="panel panel-default">
    <div class="panel-heading">
      {{ App::isLocale('ru') ? $new->title_ru : $new->title_uz }}
    </div>

    <div class="panel-body">
      <div class="row">
        <div class="col-sm-3 text-center overflow-hidden">
          <img src="{{ asset("images/".$new->image)}}" height="100px">
        </div>

        <div class="col-sm-9">
          {{ $new->overview_uz }}
          <a href="{{ route('news.single', $new->slug) }}"> {{ __('app.read_more') }} </a>
        </div>
      </div>
    </div>

    <div class="panel-footer">
      <span class="glyphicon glyphicon-calendar"></span> {{ date('d.m.Y, h:i', strtotime($new->created_at)) }}
    </div>
  </div>
  @endforeach

  
  
@endsection
