@extends('layouts.main')

@section('title')

@section('content')

<h2 class = "color-title">{{ __('app.department_system') }}</h2>
<hr>
<img src="{{ asset('images/tizim.png') }}" width = "100%">

<br>
<br>
     
@endsection


@section('sidebar')

@include('partials._department_sidebar')

@endsection