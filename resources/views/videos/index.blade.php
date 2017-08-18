@extends('layouts.admin')

@section('title', '| Видео')

@section('content')

	<h1 class = "text-center">Видео</h1>
	<hr>
	<div class="row">
		<div class="col-md-8">
			<div class="row">
			@foreach($videos as $video)
				<div class="col-md-6">
					<video width = "100%" controls>
						<source src="{{ asset('storage/videos/'.$video->video) }}" type="video/mp4">
						<source src="{{ asset('storage/videos/'.$video->video) }}" type="video/ogg">
						<source src="{{ asset('storage/videos/'.$video->video) }}" type="video/webm">
					</video>

					<p class = "info margin-top">
						Создано: <span class = "pull-right">{{ date("d.m.y, H:i", strtotime($video->created_at))}}</span>
							<br>
					</p>
					<p class = "text-right">
						<button class = "btn btn-danger btn-sm" data-toggle="modal" data-target="{{"#myDelete".$video->id}}"><span class = "glyphicon glyphicon-trash"></span></button>

						<div id="{{"myDelete".$video->id}}" class="modal fade" role="dialog">
						  <div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						      <div class="modal-header">
						        
						        <h4 class="modal-title text-center">Удалить?</h4>
						      </div>
						      <div class="modal-body">
						        <div class="row">
						        	<div class="col-md-6">
						        		{{ Form::open(['route' => ['videos.destroy', $video->id ], 'method' => 'DELETE'])}}
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
					</p>
					<h4 class = "text-center">
							{{ App::isLocale('uz') ? $video->title_uz : $video->title_ru }}
						</h4>
				</div>
			@endforeach
			</div>

			<div class="text-center">
				{{ $videos->links() }}
			</div>
		</div>
		<div class="col-md-4">
			<div class = "panel panel-default">
				<div class = "panel-heading text-center">
					<h3 class = "margin">Добавить видео</h3>
				</div>

				<div class = "panel-body">
					{{ Form::open(['route' => 'videos.store', 'files' => 'true']) }}
						<div class = "form-group">
							{{ Form::file('video') }}
						</div>

						<div class = "form-group">
							{{ Form::label('title_uz', 'Заглавие(узб): ', ['class' => 'control-label'])}}
							{{ Form::text('title_uz', null, ['class' => 'form-control']) }}
							
						</div>

						<div class = "form-group">
							{{ Form::label('title_ru', 'Заглавие(рус): ', ['class' => 'control-label'])}}
							{{ Form::text('title_ru', null, ['class' => 'form-control']) }}
							
						</div>

						<div class = "form-group">
							{{ Form::submit('Добавить', ['class' => 'btn btn-success btn-block']) }}
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>

@endsection
