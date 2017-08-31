@extends('layouts.main')

@section('title', '| Галарея')

@section('styles')
	<link href="{{ asset("css/lightbox.css") }}" rel="stylesheet">
@endsection

@section('content')

<h2>Галерея</h2>
<hr>
    
    <ul class="nav nav-pills">
      <li class="{{ Request::is('gallery/0') ? 'active' : ''}}"><a href="{{ route('gallery', 0) }}">{{ __('app.photos') }}</a></li>
      <li class="{{ Request::is('gallery/1') ? 'active' : ''}}"><a href="{{ route('gallery', 1) }}">{{ __('app.videos') }}</a></li>
    </ul>
    <br>
    @if(Request::is('gallery/0'))
    <div class="row">
        
    	@foreach($photos as $photo)
        <div class="col-sm-6 col-md-4 photo-list">
            <div class="thumbnail">
                <a data-lightbox ="{{ "image".$photo->id }}" href="{{ asset('images/'.$photo->photo) }}">
                    <img src="{{ asset('images/'.$photo->photo) }}" alt="Park">
                <div class="caption">
                    <p class = "margin-0 text-center"><b>{{ App::isLocale('ru') ? $photo->title_ru : $photo->title_uz }}</b></p>
                </div>
                </a>
            </div>
        </div>
        @endforeach
       
    </div>

    {!! $photos->links() !!}
    @endif

    @if(Request::is('gallery/1'))
    <div class="row">
        
        @foreach($videos as $video)
        <div class="col-sm-6 video-list text-center">
            <video controls width = "100%">
              <source src="{{ asset('storage/videos/'.$video->video) }}" type="video/mp4">
              <source src="{{ asset('storage/videos/'.$video->video) }}" type="video/ogg">
              <source src="{{ asset('storage/videos/'.$video->video) }}" type="video/webm">
            </video>
            <h4>{{ App::isLocale('ru') ? $video->title_ru : $video->title_uz }}</h4>
        </div>
        @endforeach
       
    </div>

    {!! $videos->links() !!}
    @endif
@endsection

@section('scripts')
	<script src="{{ asset('js/lightbox.js') }}"></script>
@endsection