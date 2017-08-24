@extends('layouts.main')

@section('title', '| Галарея')

@section('styles')
	<link href="{{ asset("css/lightbox.css") }}" rel="stylesheet">
@endsection

@section('content')

<h2>Галерея</h2>
<hr>

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
@endsection

@section('scripts')
	<script src="{{ asset('js/lightbox.js') }}"></script>
@endsection