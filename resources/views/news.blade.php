@extends('layouts.main')

@section('title', '| Новости')

@section('content')

  <select name = "isDepartment" class = "pull-right margin-top-20 news-type-select">
    <option value = "0" {{ Request::is('news/0') ? 'selected' : ''}}>{{ __('app.nav_news') }}</option>
    <option value = "1" {{ Request::is('news/1') ? 'selected' : ''}}>{{ __('app.nav_news_dep') }}</option>
  </select>

  <h1 class = "color-title">{{ Request::is('news/0') ? __('app.nav_news'): __('app.nav_news_dep') }}</h1>
  <hr>
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

  {!! $news->links() !!}
  
  
@endsection

@section('scripts')
  <script type="text/javascript">
    $('.news-type-select').change(function()
      { 
        var val = $(this).val();
        window.location.replace('/news/'+val);
      });
  </script>
@endsection