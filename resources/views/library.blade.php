@extends('layouts.main')

@section('title', '| '.__('app.library'))

@section('content')

  <h1 class = "color-title">{{  __('app.library') }}</h1>
  <hr>
  <table class="table">
      <thead>
        <tr>
          <th>№</th>
          <th>Название</th>
        </tr>
      </thead>

      <tbody>
        @foreach($libraries as $library)
        <tr>
          <th>{{ $library->id }}</th>
          <td>
          <img src="{{ asset('images/'.substr($library->file, strpos($library->file, '.')+1, 3).'.png') }}" width = "15px" height="15px">
          <a href="{{ asset('storage/library/'.$library->file) }}">{{ $library->name }} </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

    {!! $libraries->links() !!}
  
@endsection

