@extends('layouts.admin')

@section('title', '| Документы')

@section('content')

<h1 class = "text-center">Документы</h1>
<hr>
<div class="row">
	<div class="col-md-8">
		@foreach($categories as $category)
			<p>
				<span class = "pull-right">
					<button class = "btn btn-danger btn-sm" data-toggle="modal" data-target="{{"#myDelete".$category->id}}"><span class = "glyphicon glyphicon-trash"></span></button>

					<div id="{{"myDelete".$category->id}}" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        
					        <h4 class="modal-title text-center">Удалить?</h4>
					      </div>
					      <div class="modal-body">
					        <div class="row">
					        	<div class="col-md-6">
					        		{{ Form::open(['route' => ['categories.destroy', $category->id ], 'method' => 'DELETE'])}}
										{{ Form::submit('Да', ['class' => 'btn btn-block btn-danger'])}}
					        		{{ Form::close() }}
					        	</div>
					        	<div class="col-md-6">
					        		<button type="button" class="btn btn-block btn-success" data-dismiss="modal">Нет</button>
					        	</div>
					        </div>
					      </div>
				
					    </div>

					  </div>
					</div>
				</span>
				<b>{{ App::isLocale('uz') ? $category_uz : $category_ru }}</b>
			</p>
			<ul>
				@foreach($documents as $document)
					<li>
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
				<h3 class = "text-center margin">Добавить подраздел(категорию)</h3>
			</div>

			<div class="panel-body">
				{{ Form::open(['route' => 'categories.store'])}}
					<div class="form-group">
						{{ Form::label('category_uz', 'Nomi:')}}
						{{ Form::text('category_uz', null, ['class' => 'form-control'])}}
					</div>

					<div class="form-group">
						{{ Form::label('category_ru', 'Название:')}}
						{{ Form::text('category_ru', null, ['class' => 'form-control'])}}
					</div>

					<div class = "form-group">
						{{ Form::submit('Создать', ['class' => 'btn btn-success btn-block']) }}
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

@endsection