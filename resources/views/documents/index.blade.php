@extends('layouts.admin')

@section('title', '| Документы')

@section('content')

<h1 class = "text-center">
	{{ __('app.nav_documents') }}
	<a href = "{{ route('documents.create') }}" class = "btn btn-lg btn-primary pull-right">{{ __('app.create') }}</a>
</h1>
<hr>
<div class="row">
	<div class="col-md-8">
		@foreach($categories as $category)
			<p class = "overflow-hidden">
				<span class = "pull-right">
					<button class = "btn btn-sm btn-primary" data-toggle="modal" data-target = "{{ "#myEdit".$category->id}}"><span class = "glyphicon glyphicon-edit"></span></button>
					<button class = "btn btn-danger btn-sm" data-toggle="modal" data-target="{{"#myDelete".$category->id}}"><span class = "glyphicon glyphicon-trash"></span></button>
				</span>
				<b>{{ App::isLocale('uz') ? $category->category_uz : $category->category_ru }}</b>
			</p>
			<div id="{{"myEdit".$category->id}}" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        
			        <h4 class="modal-title text-center">{{ App::isLocale('uz') ? "Категорияни озрагтириш" : "Изменить подраздел(категорию)" }}</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	<div class = "col-md-12">
			        		{{ Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT'])}}
			        		<div class = "form-group">
								{{ Form::label('category_uz', 'Номи:')}}
								{{ Form::text('category_uz', null, ['class' => 'form-control'])}}
							</div>
	
							<div class = "form-group">
								{{ Form::label('category_ru', 'Название:')}}
								{{ Form::text('category_ru', null, ['class' => 'form-control'])}}
							</div>
			        	</div>
			        </div>	
			        <div class = "row">
			        	<div class="col-md-6">
							<div class = "form-group">
								{{ Form::submit( __('app.change'), ['class' => 'btn btn-danger btn-block']) }}
							</div>
							
			        	</div>
			        	<div class="col-md-6">
			        		<button type="button" class="btn btn-block btn-success" data-dismiss="modal">{{ __('app.cancel') }}</button>
			        	</div>
			        	{{ Form::close() }}
			        </div>
			      </div>
		
			    </div>

			  </div>
			</div>
			<div id="{{"myDelete".$category->id}}" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        
			        <h4 class="modal-title text-center">{{ __('app.delete') }}?</h4>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-6">
			        		{{ Form::open(['route' => ['categories.destroy', $category->id ], 'method' => 'DELETE'])}}
								{{ Form::submit(__('app.yes'), ['class' => 'btn btn-block btn-danger'])}}
			        		{{ Form::close() }}
			        	</div>
			        	<div class="col-md-6">
			        		<button type="button" class="btn btn-block btn-success" data-dismiss="modal">{{ __('app.no') }}</button>
			        	</div>
			        </div>
			      </div>
		
			    </div>

			  </div>
			</div>
			<ul>
				@foreach($category->documents as $document)
					<li class = "overflow-hidden document-list-item">
						<span class = "pull-right">
							<a href = "{{ route('documents.edit', $document->id) }}" class = "btn btn-sm btn-primary"><span class = "glyphicon glyphicon-edit"></span></a>
							<button class = "btn btn-sm btn-danger" data-toggle ="modal" data-target = {{ "#docDelete"."$document->id" }}><span class = "glyphicon glyphicon-trash"></span></button>
						</span>
						<div id={{ "docDelete"."$document->id"}} class="modal fade" role="dialog">
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
								        	{!! Form::open(['route' => ['documents.destroy', $document->id ], 'method' => "delete"]) !!}
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
						<a href="{{ route('documents.show', $document->id) }}">
							{{ App::isLocale('uz') ? $document->title_uz : $document->title_ru }}
						</a>
					</li>
				@endforeach
			</ul>
		@endforeach
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class = "text-center margin">{{ App::isLocale('uz') ? "Категорияни киргизищ" : "Добавить подраздел(категорию)" }}</h3>
			</div>

			<div class="panel-body">
				{{ Form::open(['route' => 'categories.store'])}}
					<div class="form-group">
						{{ Form::label('category_uz', 'Номи:')}}
						{{ Form::text('category_uz', null, ['class' => 'form-control'])}}
					</div>

					<div class="form-group">
						{{ Form::label('category_ru', 'Название:')}}
						{{ Form::text('category_ru', null, ['class' => 'form-control'])}}
					</div>

					<div class = "form-group">
						{{ Form::submit(__('app.create'), ['class' => 'btn btn-success btn-block']) }}
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

@endsection