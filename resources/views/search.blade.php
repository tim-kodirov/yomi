@extends('layouts.main')

@section('title', '| Поиск')

@section('content')

    {{ Form::open(['route' => 'search', 'method'=> 'GET']) }}
    <div class = "form-group">
        <div class = "row">
            <div class = "col-md-10">
                {{ Form::text('search', $search, ['class' => 'form-control'])}}
            </div>

            <div class = "col-md-2">
                {{ Form::submit('Искать', ['class' => 'btn btn-default btn-block'])}}
            </div>
        </div>
    </div>

    {{ Form::close() }}


    <h1 class = "color-title">{{  __('app.nav_news') }}</h1>
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
