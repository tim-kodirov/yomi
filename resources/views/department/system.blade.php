@extends('layouts.main')

@section('title')

@section('content')

<h2 class = "color-title">{{ __('app.department_system') }}</h2>
<hr>


<br>
<br>
     
@endsection


@section('sidebar')

@include('partials._department_sidebar')

@endsection