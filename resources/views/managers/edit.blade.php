@extends('layouts.admin')

@section('title', '| Изменить')

@section('content')

<h1 class = "text-center">
<a href = "{{ route('managers.index') }}" class = "btn btn-large btn-primary pull-left"><span class = "glyphicon glyphicon-arrow-left"></span></a>
{{ __('app.change') }}</h1>
<hr>

{{ Form::model($manager, ['route' => ['managers.update', $manager->id], 'method'=> 'PUT', 'class' => 'form-horizontal', 'files' => 'true']) }}
	

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

			<div class = "form-group">
				{{ Form::label('admission_days_uz', 'Кабул кунлари:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::text('admission_days_uz', null, ['class' => 'form-control'])}}
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

			<div class = "form-group">
				{{ Form::label('admission_days_ru', 'Даты приема:', ['class' => 'col-md-2'])}}
				<div class = "col-md-10">
					{{ Form::text('admission_days_ru', null, ['class' => 'form-control'])}}
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
				<option value = "{{ $city->id }}" {{ $manager->city->id == $city->id ? "selected" : ""}}> {{ $city->name_uz }}</option>
				@endforeach
			</select>
		</div>
	</div>


	{{ Form::submit( __('app.change'), ['class' => 'btn btn-success btn-lg btn-block'])}}
	
	
	

{{ Form::close() }}


@endsection
