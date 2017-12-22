@extends('layouts.admin')

@section('title', '| Библиотека')

@section('content')

<div class="row">
	<div class="col-md-8">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>№</th>
					<th>Название</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				@foreach($libraries as $library)
				<tr>
					<th>{{ $library->id }}</th>
					<td><a href="{{ asset('storage/library/'.$library->file) }}">{{ $library->name }} </a></td>
					<td>
						<button data-toggle = "modal" data-target = "{{ "#edit".$library->id}}" class = "btn btn-sm btn-info">
							<span class = "glyphicon glyphicon-pencil"></span>
						</button>

						<div id="{{ "edit".$library->id }}" class="modal fade" role="dialog">
						  <div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						    	{{ Form::model($library, ['route' => ['library.update', $library->id ], 'method' => 'PUT', 'class' => 'form-horizontal', 'files' => 'true']) }}
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h4 class="modal-title text-center">Изменить</h4>
						      </div>
						      <div class="modal-body">
									
									<div class="form-group">
										{{ Form::label('name', 'Название: ', ['class' => 'control-label col-md-2']) }}
										<div class="col-md-10">
											{{ Form::text('name', null, ['class' => 'form-control'])}}
										</div>
									</div>

									<div class="form-group"> 
									    <div class="col-md-offset-2 col-md-10">
									      <div class="checkbox">
									        <label><input type="checkbox" name = "is_russian" value = "1" {{ $library->is_uzbek ? '' : 'checked'}}> Русское?</label>
									      </div>
									    </div>
									</div>
								
						      </div>
						      <div class="modal-footer">

						      	<div class="row">
						      		<div class="col-md-6">
						      			<button type="submit" class="btn btn-success btn-block">Сохранить</button>
						      		</div>
						      		<div class="col-md-6">
						      			<button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Отмена</button>
						      		</div>
						      	</div>
						      	
						        
						      </div>
						      {{ Form::close() }}
						    </div>

						  </div>
						</div>

						<button data-toggle = "modal" data-target = "{{ "#delete".$library->id}}" class = "btn btn-sm btn-danger">
							<span class = "glyphicon glyphicon-trash"></span>
						</button>

						<div id="{{ "delete".$library->id }}" class="modal fade" role="dialog">
						  <div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						    	{{ Form::open(['route' => ['library.destroy', $library->id ], 'method' => 'DELETE']) }}
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h4 class="modal-title text-center">Удалить</h4>
						      </div>
						      <div class="modal-body">
									
									<div class="row">
							      		<div class="col-md-6">
							      			<button type="submit" class="btn btn-success btn-block">Да</button>
							      		</div>
							      		<div class="col-md-6">
							      			<button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Нет</button>
							      		</div>
							      	</div>
								
						      </div>
						      {{ Form::close() }}
						    </div>

						  </div>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		{!! $libraries->links() !!}
	</div>

	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class = "text-center margin-0">Создать</h2>
			</div>

			<div class="panel-body">
				{{ Form::open(['route' => 'library.store', 'class' => 'form-horizontal', 'files' => 'true']) }}
					<div class="form-group">
						{{ Form::label('file', 'Файл: ', ['class' => 'control-label col-md-3']) }}
						<div class="col-md-9">
							{{ Form::file('file', null, ['class' => 'form-control'])}}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('name', 'Название: ', ['class' => 'control-label col-md-3']) }}
						<div class="col-md-9">
							{{ Form::text('name', null, ['class' => 'form-control'])}}
						</div>
					</div>

					<div class="form-group"> 
					    <div class="col-md-offset-3 col-md-9">
					      <div class="checkbox">
					        <label><input type="checkbox" name = "is_russian" value = "1"> Русское?</label>
					      </div>
					    </div>
					</div>
					
					<div class="form-group">
						<div class="col-md-offset-3 col-md-9">
							{{ Form::submit('Создать', ['class' => 'btn btn-default']) }}
						</div>
					</div>
					
				{{ Form::close() }}
			</div>
		</div>
	</div>	
</div>

@endsection
