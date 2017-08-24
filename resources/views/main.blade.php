@extends('layouts.main')

@section('styles')
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" media="screen" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<ul class="nav nav-tabs" style="padding-left: 15px;">
  <li class="active"><a data-toggle="tab" href="#menu1" style="color: blueviolet;">{{ __('app.photos') }}</a></li>
  <li><a data-toggle="tab" href="#menu2" style="color: blueviolet;">{{ __('app.videos') }}</a></li>
</ul>

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
            <img src="{{asset("images/".$value->photo)}}" alt="Los Angeles" height="200px">
            <div class="carousel-caption">
              <p>{{ App::isLocale('ru') ? $value->title_ru : $value->title_uz }}</p>
            </div>
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
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XGSy3_Czz8k" style="height: 400px;"></iframe>
    </div>
  </div>
</div>


<p class = "pull-right margin-top-30"><a href="{{ route('news', 0) }}">{{ __('app.all_news') }}</a></p>
<h2>{{ __('app.nav_news') }}</h2>
<hr>
<div class="row">
  @foreach($news as $new)
  <div class="col-sm-6 news-list-item">
    <div class="panel panel-default">
        <div class="panel-heading">
          <strong><a class="post-title" href="{{ route('news.single', $new->slug) }}">{{ mb_substr( App::isLocale('ru') ? $new->title_ru : $new->title_uz, 0, 30) }} {{ mb_strlen(App::isLocale('ru') ? $new->title_ru : $new->title_uz) > 35 ? '...' : ''}}</a></strong>
        </div>
        <div class="panel-body news-list-item-body">
          <div class="col-md-6">
                <a href="#" class="thumbnail"><img src="{{asset("images/".$new->image)}}" alt=""></a>
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

<p class = "pull-right margin-top-30"><a href="{{ route('news', 1) }}">{{ __('app.all_news') }}</a></p>
<h2>{{ __('app.nav_news_dep') }}</h2>
<hr>
<div class="row">
  @foreach($depNews as $new)
  <div class="col-sm-6 news-list-item">
    <div class="panel panel-default">
        <div class="panel-heading">
          <strong><a class="post-title" href="#">{{ mb_substr(App::isLocale('ru') ? $new->title_ru : $new->title_uz, 0, 30) }} {{ mb_strlen(App::isLocale('ru') ? $new->title_ru : $new->title_uz) > 35 ? '...' : ''}}</a></strong>
        </div>
        <div class="panel-body news-list-item-body ">
          <div class="col-md-6">
                <a href="#" class="thumbnail"><img src="{{asset("images/".$new->image)}}" alt=""></a>
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

<div id="vmap" style="width: 100%; height: 400px;"></div>

@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js" type="text/javascript"></script>

<script src ="{{ asset("js/vmap.uzbekistan.js")}}" type="text/javascript" ></script>

<script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#vmap').vectorMap({ map: 'uzbekistan',
            backgroundColor: 'inherit',
            borderColor: 'white',
            borderOpacity: 0,
            borderWidth: 1,
            color: '#4da9ec',
            enableZoom: true,
            hoverColor: 'lightgreen',
            hoverOpacity: null,
            normalizeFunction: 'linear',
            scaleColors: ['#b6d6ff', '#005ace'],
            selectedColor: 'blue',
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

@endsection



