@extends('layouts.main')

@section('title', '| Вопросы и Ответы')

@section('content')

<h2>{{ __('app.nav_questions') }}</h2>
<hr>
<div class="panel-group" id="accordion">

@foreach($questions as $question)
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="{{ "#collapse".$question->id }}">
        {{ $question->question }}</a>
      </h4>
    </div>
    <div id="{{ "collapse".$question->id }}" class="panel-collapse collapse">
      <div class="panel-body">{{ $question->answer }}</div>
    </div>
  </div>
@endforeach

{!! $questions->links() !!}
</div>

@endsection