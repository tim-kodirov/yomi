@extends('layouts.main')

@section('styles')
  <link href="{{ asset("css/lightbox.css") }}" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" media="screen" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{ asset("sliderengine/amazingslider-1.css")}}">
@endsection
<div class="website-appearance">
@section('content')

<ul class="nav nav-pills">
  <li class="active"><a data-toggle="tab" href="#menu1"><b> ФОТО </b></a></li>
  <li><a data-toggle="tab" href="#menu2"><b> ВИДЕО </b></a></li>
</ul>
<br>
<div class="tab-content" >
  <div id="menu1" class="tab-pane fade in active">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        @foreach($photos as $photo => $value)
          <div class="item {{ $photo == 0 ? "active" : ""}} text-center">
            <a data-lightbox ="{{ "image".$value->id }}" href="{{ asset('images/'.$value->photo) }}">
            <img src="{{asset("images/".$value->photo)}}" alt="Los Angeles" height="200px">
            <div class="carousel-caption">
              <p>{{ App::isLocale('ru') ? $value->title_ru : $value->title_uz }}</p>
            </div>
            </a>
          </div>
        @endforeach
      </div>
    
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
   
  </div>
  <div id="menu2" class="tab-pane fade">
    <video controls width = "100%">
      <source src="{{ asset('storage/videos/'.$video->video) }}" type="video/mp4">
      <source src="{{ asset('storage/videos/'.$video->video) }}" type="video/ogg">
      <source src="{{ asset('storage/videos/'.$video->video) }}" type="video/webm">
    </video>
  </div>
</div>

@if(Session::has('question_sent'))
  <div class="alert alert-success margin-top-20">
    {{ Session::get('question_sent') }}
  </div>
@endif
@if(count($errors) > 0)
<div class="alert alert-danger margin-top-20">
  <ul>
    @foreach($errors as $error)
    <li> {{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif






  
<h2>
<p class = "pull-right all-news-link margin-top-20"><a href="{{ route('news', 0) }}"><b>{{ __('app.all_news') }}</b></a></p>
<b>{{ mb_strtoupper(__('app.nav_news')) }}</b>
</h2>
<hr>
<div class="row">
  @foreach($news as $new)
  <div class="col-sm-6 news-list-item">
    <div class="panel panel-default">
        <div class="panel-heading">
          <strong><a class="post-title" href="{{ route('news.single', $new->slug) }}">
          {{App::isLocale('ru') ? $new->title_ru : $new->title_uz}}</a></strong>
        </div>
        <div class="panel-body news-list-item-body equal-items">
          <div class="col-md-6">
                <a href="{{ route('news.single', $new->slug) }}" class="thumbnail"><img src="{{asset("images/".$new->image)}}" alt=""></a>
          </div>     
          <p>
            {{ App::isLocale('ru') ? $new->overview_ru : $new->overview_uz }} 
          </p>
        </div>                  
        <div class="panel-footer">
         <span class="glyphicon glyphicon-calendar"></span> {{ date('d.m.Y, h:i', strtotime($new->created_at)) }}
        </div>
    </div>
  </div>
  @endforeach
</div>


<h2>
<p class = "pull-right margin-top-20 all-news-link"><a href="{{ route('news', 1) }}"><b>{{ __('app.all_news') }}</b></a></p>
<b>{{ mb_strtoupper(__('app.nav_news_dep')) }}</b>
</h2>
<hr>
<div class="row">
  @foreach($depNews as $new)
  <div class="col-sm-6 news-list-item">
    <div class="panel panel-default">
        <div class="panel-heading">
          <strong><a class="post-title" href="{{ route('news.single', $new->slug) }}">{{ mb_substr(App::isLocale('ru') ? $new->title_ru : $new->title_uz, 0, 30) }} {{ mb_strlen(App::isLocale('ru') ? $new->title_ru : $new->title_uz) > 35 ? '...' : ''}}</a></strong>
        </div>
        <div class="panel-body news-list-item-body equal-items-next">
          <div class="col-md-6">
                <a href="{{ route('news.single', $new->slug) }}" class="thumbnail"><img src="{{asset("images/".$new->image)}}" alt=""></a>
          </div>     
          <p>
            {{ App::isLocale('ru') ? $new->overview_ru : $new->overview_uz }}  
          </p>
        </div>                  
        <div class="panel-footer">
         <span class="glyphicon glyphicon-calendar"></span> {{ date('d.m.Y, h:i', strtotime($new->created_at)) }}
        </div>
    </div>
  </div>
  @endforeach
</div>



@endsection

@section('additional-content')
<!--
<div id = "world">
  <div id="vmap" style="width: 100%;"></div>
</div>
-->

@endsection
</div>


@section('scripts')
<script src="{{ asset('js/lightbox.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js" type="text/javascript"></script>

<script src ="{{ asset("js/vmap.uzbekistan.js")}}" type="text/javascript" ></script>

<script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#vmap').vectorMap({ map: 'uzbekistan',
            backgroundColor: 'inherit',
            borderColor: 'white',
            borderOpacity: 0,
            borderWidth: 1,
            color: '#71b9c6',
            enableZoom: false,
            hoverColor: '#42909e',
            hoverOpacity: null,
            normalizeFunction: 'linear',
            scaleColors: ['#b6d6ff', '#005ace'],
            selectedColor: '#42909e',
            selectedRegions: null,
            showTooltip: true,
            onRegionClick: function(element, code, region)
            {
                var message = 'You clicked "'
                    + region
                    + '" which has the code: '
                    + code.toUpperCase();

                alert(message);
            }    
                });
        });
</script>

<script src = "{{ asset('js/jquery.matchHeight.js') }}" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.equal-items').matchHeight();
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.equal-items-next').matchHeight();
    });
  </script>

  <script src="{{ asset("sliderengine/amazingslider.js")}}"></script>
    
    <script src="{{ asset("sliderengine/initslider-1.js")}}"></script>

@endsection




