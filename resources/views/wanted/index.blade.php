@extends('layouts.admin')

@section('title', '| Разыскиваемые')

@section('content')

<div class="pull-right margin-top-20">

	<select name = "is_lost" class = "news-type-select">
		<option value = "0" {{ $is_lost ? '' : 'selected'}}>{{ __('app.criminals') }}</option>
		<option value = "1" {{ $is_lost ? 'selected' : ''}}>{{ __('app.losts') }}</option>
	</select>
</div>

<h1 class = "text-center">{{__('app.wanted')}}</h1>
<hr>
<div class="row">
	<div class="col-md-8">
		@foreach($wanted as $want)
			<div class = "row">
				<div class = "col-md-2">
					<img src="{{ asset('images/wanted/'.$want->image) }}" height = "150px"/>
					
				</div>

				<div class = "col-md-10">
					<p class = "pull-right">
						<button class = "btn btn-sm btn-primary" data-toggle="modal" data-target = "{{ "#myEdit".$want->id}}"><span class = "glyphicon glyphicon-edit"></span></button>
						<button class = "btn btn-sm btn-danger" data-toggle ="modal" data-target = {{ "#myDelete"."$want->id" }}><span class = "glyphicon glyphicon-trash"></span></button>
					</p>

					<div id="{{"myEdit".$want->id}}" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        
					        <h4 class="modal-title text-center">{{__('app.change')}}</h4>
					      </div>
					      <div class="modal-body">
					      	{{ Form::model($want, ['route' => ['wanted.update', $want->id], 'method' => 'PUT', 'files' => 'true'])}}
					        <div class="row">
					        	<div class = "col-md-12">
					        		
					        		<div class="form-group">
										{{ Form::label('first_name', __('app.f_name').': ') }}
										{{ Form::text('first_name', null,['class' => 'form-control'])}}
									</div>

									<div class="form-group">
										{{ Form::label('last_name', __('app.s_name').': ') }}
										{{ Form::text('last_name', null,['class' => 'form-control'])}}
									</div>

									<div class="form-group">
										{{ Form::label('middle_name', __('app.m_name').': ') }}
										{{ Form::text('middle_name', null,['class' => 'form-control'])}}
									</div>

									<div class="form-group">
										{{ Form::label('dob', __('app.dob').': ') }}
										{{ Form::date('dob', $want->date_of_birth, ['class' => 'form-control'])}}
									</div>

									<div class="form-group">
										{{ Form::label('image', __('app.image').': ') }}
										{{ Form::file('image')}}
									</div>

									<div class="form-group">
										<label class = "radio-inline">{{ Form::radio('is_lost', 0) }} {{ __('app.criminal') }} </label>
										<label class = "radio-inline">{{ Form::radio('is_lost', 1) }} {{ __('app.lost') }}  </label>
									</div>

					        	</div>
					        </div>	
					        <div class = "row">
					        	<div class="col-md-6">
									<div class = "form-group">
										{{ Form::submit(__('app.change') , ['class' => 'btn btn-danger btn-block']) }}
									</div>
									
					        	</div>
					        	<div class="col-md-6">
					        		<button type="button" class="btn btn-block btn-success" data-dismiss="modal">{{ __('app.cancel') }} </button>
					        	</div>
					        	
					        </div>
					        {{ Form::close() }}
					      </div>
				
					    </div>

					  </div>
					</div>

					<div id={{ "myDelete"."$want->id"}} class="modal fade" role="dialog">
							<div class="modal-dialog">
								
							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title text-center">{{ __('app.delete') }} ?</h4>
							      </div>
							      <div class="modal-body">
							      	<div class = "row">
							      		<div class = "col-md-6">
								        	{!! Form::open(['route' => ['wanted.destroy', $want->id ], 'method' => "delete"]) !!}
								        		{{ Form::submit( __('app.yes'), ['class' => 'btn btn-success btn-large btn-block']) }}
								        	{!! Form::close() !!}
								        </div>

								        <div class = "col-md-6">
								        	<button type="button" class="btn btn-danger btn-large btn-block" data-dismiss="modal">{{ __('app.no') }} </button>
								        </div>
							      	</div>
							        
							      </div>
							    </div>

							</div>
						</div>
					<p class = "info">
						{{ __('app.created') }} : <span>{{ date('d.m.y, h:i', strtotime($want->created_at)) }}</span>
						<br>
						{{ __('app.updated') }} : <span>{{ date('d.m.y, h:i', strtotime($want->updated_at)) }}</span>
					</p>
					<h4>{{ $want->last_name }} {{ $want->first_name }} {{ $want->middle_name }}</h4>
					<p><b>{{ __('app.dob') }} :</b> {{ date('d.m.Y', strtotime($want->date_of_birth) )}}</p>
				</div>
			</div>
			<hr>
		@endforeach

		<div class = "text-center">
			{!! $wanted->links() !!}
		</div>
	</div>

	<div class = "col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class = "text-center">{{ __('app.create') }} </h4>
			</div>
			<div class="panel-body">
				{{ Form::open(['route' => 'wanted.store', 'files' => 'true']) }}
					<div class="form-group">
						{{ Form::label('first_name', __('app.f_name').': ') }}
						{{ Form::text('first_name', null,['class' => 'form-control'])}}
					</div>

					<div class="form-group">
						{{ Form::label('last_name', __('app.s_name').': ') }}
						{{ Form::text('last_name', null,['class' => 'form-control'])}}
					</div>

					<div class="form-group">
						{{ Form::label('middle_name', __('app.m_name').': ') }}
						{{ Form::text('middle_name', null,['class' => 'form-control'])}}
					</div>

					<div class="form-group">
						{{ Form::label('dob', __('app.dob').': ') }}
						{{ Form::date('dob', null, ['class' => 'form-control'])}}
					</div>

					<div class="form-group">
						{{ Form::label('image', __('app.image').': ') }}
						{{ Form::file('image')}}
					</div>

					<div class="form-group">
						<label class = "radio-inline">{{ Form::radio('is_lost', 0, ['selected']) }} {{ __('app.criminal') }}</label>
						<label class = "radio-inline">{{ Form::radio('is_lost', 1) }} {{ __('app.lost') }} </label>
					</div>

					<div class="form-group">
						{{ Form::submit(__('app.create'), ['class' => 'btn btn-success btn-block'])}}
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
	<script type="text/javascript">
		$('.news-type-select').change(function()
			{	
				var val = $(this).val();
				window.location.replace('/admin/wanted?is_lost='+val);
			});
	</script>
@endsection