@extends('layouts.main')

@section('title', '| История Департамента')


@section('content')

    <h2 class = "color-title">{{ __('app.link_10') }}</h2>
    <hr>

    <img src="{{asset("images/mappp.png")}}" alt="map" height="100%" width="100%">
    <br>
    <br>
    <h4> ТАШКЕНТ Ш., ЧИЛОНЗОР ТУМАНИ, ИСЛОМ КАРИМОВ КЎЧАСИ, 45
                    <br><br>
                    ИНДЕКС 100003<br><br>
                    ТЕЛ: +998 71 232 60 69<br><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp +998 71 232 61 45<br><br>
                    ЭЛ. ПОЧТА: info@yomi.uz</h4>
    <br>

@endsection

@section('sidebar')
    @include('partials._department_sidebar')
@endsection

