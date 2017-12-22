@extends('layouts.main')

@section('title', '| Документы')

@section('content')


	<h2 class = "color-title">{{__('app.nav_documents')}}</h2>
      <hr>
      {{-- @foreach($categories as $category)
      <ul>
        <h4><b>{{ App::isLocale('ru') ? $category->category_ru : $category->category_uz }}</b></h4>
        @foreach($category->documents as $doc)
        <li>
          <a href="#">{{ App::isLocale('ru') ? $doc->title_ru : $doc->title_uz }}</a>
        </li>
        @endforeach
      </ul>
      @endforeach --}}
    <!--
      <h4><a href="http://lex.uz">{{ __('app.doc_1') }}</a></h4>
      <h4><a href="http://lex.uz">{{ __('app.doc_2') }}</a></h4>
      <h4><a href="http://lex.uz">{{ __('app.doc_3') }}</a></h4>
      <h4><a href="http://lex.uz">{{ __('app.doc_4') }}</a></h4>
      <h4><a href="http://lex.uz">{{ __('app.doc_5') }}</a></h4>
      <h4><a href="http://lex.uz">{{ __('app.doc_6') }}</a></h4>
      <h4><a href="http://lex.uz">{{ __('app.doc_7') }}</a></h4>
      <h4><a href="http://lex.uz">{{ __('app.doc_8') }}</a></h4>
-->

    
@endsection