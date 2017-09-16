@extends('layouts.admin')

@section('title', '| Создать')

@section('content')

<h1 class = "text-center">Создать</h1>
<hr>
{{ Form::open(['route' => 'managers.store', 'class' => 'form-horizontal', 'files' => 'true']) }}
	

	<div class="row">
		<div class="col-md-6">
			<h2 class = "text-center">Узбекча</h2>
			<hr>
			<div class = "form-group">
				{{ Form::label('info_uz', 'Лавозими, унвони, ФИО:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::text('info_uz', null, ['class' => 'form-control'])}}
				</div>
			</div>

			<div class = "form-group">
				{{ Form::label('address_uz', 'Адресс:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::text('address_uz', null, ['class' => 'form-control'])}}
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h2 class = "text-center">Русский</h2>
			<hr>
			<div class = "form-group">
				{{ Form::label('info_ru', 'Должность, Звание, ФИО:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::text('info_ru', null, ['class' => 'form-control'])}}
				</div>
			</div>

			<div class = "form-group">
				{{ Form::label('address_ru', 'Адресс:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::text('address_ru', null, ['class' => 'form-control'])}}
				</div>
			</div>
		</div>
	</div>
	
	
	<div class = "form-group">
		<div class="col-md-1">
			{{ Form::label('contact', 'Телефон:')}}
		</div>
		
		<div class = "col-md-11">
			{{ Form::text('contact', null, ['class' => 'form-control'])}}
		</div>
	</div>

	<div class = "form-group">
		<div class="col-md-1">
			{{ Form::label('admission', 'Кабул кунлари:')}}
		</div>
		
		<div class = "col-md-11">
			{{ Form::text('admission', null, ['class' => 'form-control'])}}
		</div>
	</div>

	<div class = "form-group">
		<div class="col-md-1">
			{{ Form::label('image', 'Картина:')}}
		</div>
		
		<div class = "col-md-11">
			{{ Form::file('image', null, ['class' => 'form-control'])}}
		</div>
	</div>

	<div class = "form-group">
		<div class="col-md-1">
			{{ Form::label('city_id', 'Туман:')}}
		</div>
		
		<div class = "col-md-11">
			<select name="city_id" class = "form-control">
				@foreach($cities as $city)
				<option value = "{{ $city->id }}"> {{ $city->name_uz }}</option>
				@endforeach
			</select>
		</div>
	</div>


	{{ Form::submit( __('app.create'), ['class' => 'btn btn-success btn-lg btn-block'])}}
	
	
	

{{ Form::close() }}


@endsection
