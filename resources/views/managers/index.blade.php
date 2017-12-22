@extends('layouts.admin')

@section('title', '| Руководители')

@section('content')


<div class="pull-right margin-top-20">

	<select name = "region" class = "news-type-select">
		@foreach($cities as $city)
		<option value = "{{ $city->id }}" {{ $selectedCity->id == $city->id ? 'selected' : ''}}>{{ App::isLocale('ru') ? $city->name_ru : $city->name_uz }}</option>
		@endforeach
	</select>

	<a href = "{{ route('managers.create') }}" class = "btn btn-lg btn-primary">{{ __('app.create') }}</a>
</div>

<h1 class = "text-center">{{ __('app.department_managers') }}</h1>
<hr>

<div class="row">
	<div class="col-md-8 col-md-offset-2">	
		<table class = "table table-striped">
			<thead>	
				<tr>
					<th>№</th>	
					<th>{{ __('app.image') }}</th>
					<th>{{ __('app.manager_info') }}</th>
					<th>Тел</th>
					<th>{{ __('app.manager_admission') }}</th>
					<th>Адресс</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				@foreach($managers as $manager)
				<tr>
					<th>{{ $manager->id }}</th>
					<td><img src="{{ asset('images/managers/'.$manager->image) }}" height = "200px"></td>
					<td>{{ App::isLocale('ru') ? $manager->info_ru : $manager->info_uz }}</td>
					<td>{{ $manager->contact }}</td>
					<td>{{ App::isLocale('ru') ? $manager->admission_days_ru : $manager->admission_days_uz }}</td>
					<td>{{ App::isLocale('ru') ? $manager->address_uz : $manager->address_ru }}</td>
					<td>
						<a href = "{{ route('managers.edit', $manager->id) }}" class = "btn btn-info btn-sm"><span class = "glyphicon glyphicon-pencil"></span></a>

						<button data-toggle = "modal" data-target = "{{"#delete".$manager->id}}" class = "btn btn-danger btn-sm margin-top"><span class = "glyphicon glyphicon-trash"></span></button>

						<div id={{ "delete"."$manager->id"}} class="modal fade" role="dialog">
							<div class="modal-dialog">
								
							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title text-center">{{ __('app.delete') }}?</h4>
							      </div>
							      <div class="modal-body">
							      	<div class = "row">
							      		<div class = "col-md-6">
								        	{!! Form::open(['route' => ['managers.destroy', $manager->id ], 'method' => "delete"]) !!}
								        		{{ Form::submit(__('app.yes'), ['class' => 'btn btn-success btn-large btn-block']) }}
								        	{!! Form::close() !!}
								        </div>

								        <div class = "col-md-6">
								        	<button type="button" class="btn btn-danger btn-large btn-block" data-dismiss="modal">{{ __('app.no') }}</button>
								        </div>
							      	</div>
							        
							      </div>
							    </div>

							</div>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>	
		</table>
	</div>
</div>

@endsection

@section('scripts')
	<script type="text/javascript">
		$('.news-type-select').change(function()
			{	
				var val = $(this).val();
				window.location.replace('/admin/managers?region='+val);
			});
	</script>
@endsection