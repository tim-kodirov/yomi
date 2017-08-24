@extends('layouts.admin')

@section('title', '| Изменить документ')

@section('content')

<h1 class = "text-center">
<a href = "{{ route('documents.index') }}" class = "btn btn-large btn-primary pull-left"><span class = "glyphicon glyphicon-arrow-left"></span></a>
{{ __('app.change') }}</h1>
<hr>
{{ Form::model($document, ['route' => ['documents.update', $document->id],'method'=>'PUT', 'class' => 'form-horizontal']) }}

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
				{{ Form::label('body_ru', 'Контент:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::textarea('body_ru', null, ['class' => 'form-control', 'rows' => '30'])}}
				</div>
			</div>
		</div>
	</div>
	
	<div class = "form-group">
		{{ Form::label('category_id', 'Категория:', ['class' => 'col-md-1'])}}
		<div class = "col-md-11">
			<select class = "form-control" name = "category_id" id = "category_id">
				@foreach($categories as $category)
					<option value = "{{ $category->id }}" {{ $category->id==$document->category->id ? "selected" : ""}}>{{ $category->category_uz }} | {{$category->category_ru}}</option>
				@endforeach
			</select>
		</div>
	</div>

	{{ Form::submit(__('app.change'), ['class' => 'btn btn-success btn-lg btn-block'])}}
	
	
	

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