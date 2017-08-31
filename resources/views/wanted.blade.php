@extends('layouts.main')

@section('title', '| '.$title)

@section('content')
	<h1>{{ Request::is('wanted/0') ? __('app.criminals') : __('app.losts') }}</h1>
    <hr>
      

    <div class = "row">
        <div class = "col-sm-10 col-sm-offset-1">
	          {{ Form::open(['route' => ['wanted', $id], 'method' => 'get']) }}
	            <div class="row">
		            <div class="col-sm-4">
		              <label>{{ __('app.f_name') }}: </label>
		              <input type = "text" class = "form-control" name = "first_name" value = "{{$first_name}}"/>
		            </div>
					
		            <div class="col-sm-4">
		              <label>{{ __('app.s_name') }}: </label>
		              <input type = "text" class = "form-control" name = "last_name" value = "{{$last_name}}"/>
		            </div>
					
		            <div class="col-sm-4">
		              <label>{{ __('app.m_name') }}: </label>
		              <input type = "text" class = "form-control" name = "middle_name" value = "{{$middle_name}}"/>
		            </div>
	            </div>
				
				<div class = "form-group margin-top">
					<input type = "submit" class = "btn btn-success" value = "{{ __('app.search') }}">
				</div>
	              
	           
	          {{ Form::close() }}
			<hr>
	        @foreach($wanted as $want)
		        <div class = "row">
		            <div class = "col-sm-3 overflow-hidden">
		              <img src="{{ asset('images/wanted/'.$want->image) }}" height = "150px"/>
		              
		            </div>

		            <div class = "col-sm-9">      
		              <h4>{{ $want->last_name }} {{ $want->first_name }} {{ $want->middle_name }}</h4>
		              <p><b>{{ __('app.dob') }}:</b> {{ date('d.m.Y', strtotime($want->date_of_birth)) }}</p>
		            </div>
		        </div>
		        <hr>
	        @endforeach
      	</div>
    </div>
@endsection

@section('sidebar')

<div class="characters">
	<h2 class = "text-center">{{ __('app.wanted') }}</h2>
</div>
<br>
<div class="row text-center"> 
  <a href="{{ route('wanted', 0) }}"><h4>{{ __('app.criminals') }}</h4></a>
  <hr>
  <a href="{{ route('wanted', 1) }}"><h4>{{ __('app.losts') }}</h4></a>
  <hr>
</div>

@endsection