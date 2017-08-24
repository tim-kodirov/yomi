@extends('layouts.admin')

@section('title', '| Создать')

@section('content')

<h1 class = "text-center">
<a href = "{{ route('news.index') }}" class = "btn btn-large btn-primary pull-left"><span class = "glyphicon glyphicon-arrow-left"></span></a>
{{ __('app.create') }}</h1>
<hr>
{{ Form::open(['route' => 'news.store', 'class' => 'form-horizontal', 'files' => 'true']) }}

	<div class="row">
		<div class="col-md-6">
			<h2 class = "text-center">Узбекча</h2>
			<hr>
			<div class = "form-group">
				{{ Form::label('title_uz', 'Сарлавха:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::text('title_uz', null, ['class' => 'form-control'])}}
				</div>
			</div>

			<div class = "form-group">
				{{ Form::label('overview_uz', 'Тавсиф:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::text('overview_uz', null, ['class' => 'form-control'])}}
				</div>
			</div>

			<div class = "form-group">
				{{ Form::label('body_uz', 'Контент:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::textarea('body_uz', null, ['class' => 'form-control', 'rows' => '30'])}}
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h2 class = "text-center">Русский</h2>
			<hr>
			<div class = "form-group">
				{{ Form::label('title_ru', 'Заглавие:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::text('title_ru', null, ['class' => 'form-control'])}}
				</div>
			</div>

			<div class = "form-group">
				{{ Form::label('overview_ru', 'Описание:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::text('overview_ru', null, ['class' => 'form-control'])}}
				</div>
			</div>

			<div class = "form-group">
				{{ Form::label('body_ru', 'Контент:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::textarea('body_ru', null, ['class' => 'form-control', 'rows' => '30'])}}
				</div>
			</div>
		</div>
	</div>
	

	<div class = "form-group">
		{{ Form::label('image', 'Картина:', ['class' => 'col-md-1'])}}
		<div class = "col-md-11">
			{{ Form::file('image', null, ['class' => 'form-control'])}}
		</div>
	</div>

	<div class = "form-group">
		<div class = "col-md-11 col-md-offset-1">
			<label class = "radio-inline">{{ Form::radio('isDepartment', 0, true) }} Обычная новость</label>
			<label class = "radio-inline">{{ Form::radio('isDepartment', 1) }} Про департамент</label>
		</div>
	</div>

	
		{{ Form::submit( __('app.create'), ['class' => 'btn btn-success btn-lg btn-block'])}}
	
	
	

{{ Form::close() }}


@endsection


@section('scripts')

	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=a0p04bn5ynhonmwd7qcym2qju26ass5qtbrchg8wx7a6xv41"></script>
	<script>tinymce.init(
	{ 
		selector:'textarea' 		
	});
	</script>
	
@endsection