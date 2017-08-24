@extends('layouts.admin')

@section('title', '| Вопросы')

@section('content')

<h1 class = "text-center">{{ __('app.nav_questions') }}</h1>
<hr>

@foreach($questions as $question)
<div class="well {{ Session::has('questions'.$question->id) ? 'question-not-seen' : '' }}">
	<div class="row">
		<div class="col-md-8">
			<p>
				{{ $question->question }}
				<!-- {{ mb_substr($question->question, 0, 100) }}<span id = "{{"read-more".$question->id}}" class = "collapse">{{mb_substr($question->question, 100)}}</span><a href="#" data-toggle="collapse" data-target = "{{"#read-more".$question->id}}">Читать полностью</a> -->
			</p>
			
			@if($question->answer != null)
			<p>
				<b data-toggle = "collapse" data-target = "{{ "#answer".$question->id }}">{{ App::isLocale('ru') ? 'Ответ' : 'Жавоб'}} <span class = "glyphicon glyphicon-triangle-bottom"></span></b>
				<br>
				<span class = "collapse" id = "{{ "answer".$question->id}}">
					{{ $question->answer }}
				</span>
			</p>
			@endif
			<div id = "{{ "myAnswer".$question->id }}" class = "collapse">
				{{ Form::open(['route'=> ['questions.answer', $question->id]]) }}
					<div class="form-group">
						{{ Form::label('answer', __('app.answer').': ', ['class' => 'control-label'])}}
						{{ Form::textarea('answer', $question->answer!=null ? $question->answer : null, ['class' => 'form-control']) }}
					</div>

					<div class = "form-group">
						{{ Form::submit( __('app.answer'), ['class' => 'btn btn-success']) }}
					</div>
					
				{{ Form::close() }}
			</div>
		</div>
		<div class="col-md-4">
			<table class = "table">
				<tr>
					<th>{{ __('app.author') }}: </th>
					<th>{{ $question->last_name }} {{ $question->first_name }} {{ $question->middle_name }}</th>
				</tr>
				<tr>
					<th>Номер: </th>
					<td>{{ $question->phone_number }}</td>
				</tr>

				<tr>
					<td>{{ __('app.created') }}: </td>
					<td>{{ date('d.m.Y, h:i', strtotime($question->created_at)) }}</td>
				</tr>
				<tr>
					<td>{{ __('app.updated') }}: </td>
					<td>{{ date('d.m.Y, h:i', strtotime($question->updated_at)) }}</td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="button" class="btn btn-success" data-toggle="collapse" data-target="{{ "#myAnswer".$question->id}}">{{__('app.answer')}}</button>

						<span class = "pull-right">
							<button class = "btn btn-sm btn-primary" data-toggle="modal" data-target = "{{ "#myEdit".$question->id}}"><span class = "glyphicon glyphicon-edit"></span></button>
							<button class = "btn btn-sm btn-danger" data-toggle ="modal" data-target = {{ "#myDelete"."$question->id" }}><span class = "glyphicon glyphicon-trash"></span></button>
						</span>
					</td>
				</tr>
			</table>

			<div id="{{"myEdit".$question->id}}" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        
			        <h4 class="modal-title text-center">{{ __('app.change') }}</h4>
			      </div>
			      <div class="modal-body">
			      	{{ Form::model($question, ['route' => ['questions.update', $question->id], 'method' => 'PUT'])}}
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
								{{ Form::label('phone_number', 'Номер: ') }}
								{{ Form::text('phone_number', null,['class' => 'form-control'])}}
							</div>

							<div class="form-group">
								{{ Form::label('question', __('app.question').': ') }}
								{{ Form::textarea('question', null,['class' => 'form-control'])}}
							</div>

			        	</div>
			        </div>	
			        <div class = "row">
			        	<div class="col-md-6">
							<div class = "form-group">
								{{ Form::submit(__('app.change'), ['class' => 'btn btn-danger btn-block']) }}
							</div>
							
			        	</div>
			        	<div class="col-md-6">
			        		<button type="button" class="btn btn-block btn-success" data-dismiss="modal">{{__('app.cancel')}}</button>
			        	</div>
			        	
			        </div>
			        {{ Form::close() }}
			      </div>
		
			    </div>

			  </div>
			</div>

			<div id={{ "myDelete"."$question->id"}} class="modal fade" role="dialog">
				<div class="modal-dialog">
					
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title text-center">{{__('app.delete')}}?</h4>
				      </div>
				      <div class="modal-body">
				      	<div class = "row">
				      		<div class = "col-md-6">
					        	{!! Form::open(['route' => ['questions.destroy', $question->id ], 'method' => "delete"]) !!}
					        		{{ Form::submit(__('app.yes'), ['class' => 'btn btn-success btn-large btn-block']) }}
					        	{!! Form::close() !!}
					        </div>

					        <div class = "col-md-6">
					        	<button type="button" class="btn btn-danger btn-large btn-block" data-dismiss="modal">{{__('app.no')}}</button>
					        </div>
				      	</div>
				        
				      </div>
				    </div>

				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection