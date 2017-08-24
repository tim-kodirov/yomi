@extends('layouts.admin')

@section('title', '| Фотографии')

@section('styles')
	<link href="{{ asset("css/lightbox.css") }}" rel="stylesheet">
@endsection

@section('content')

	<h1 class = "text-center">{{ __('app.photos') }}</h1>
	<hr>
	<div class="row">
		<div class="col-md-8">
			<div class="row">
			@foreach($photos as $photo)
				<div class="col-md-4 photo-index-list">
					<div class = "photo-card">
						<a href = "{{ asset('images/'.$photo->photo)}}" data-lightbox="{{ "image".$photo->id }}"><img src="{{ asset('images/'.$photo->photo) }}" alt="{{ App::isLocale('uz') ? $photo->title_uz : $photo->title_ru }}" width = "100%"></a>
						<p class = "info margin-top">
							{{ __('app.created') }}: <span class = "pull-right">{{ date("d.m.y, H:i", strtotime($photo->created_at))}}</span>
							<br>
							{{ __('app.updated') }}: <span class = "pull-right">{{ date("d.m.y, H:i", strtotime($photo->updated_at))}}</span>
						</p>

						<p class = "text-right">
							<button class = "btn btn-danger btn-sm" data-toggle="modal" data-target="{{"#myDelete".$photo->id}}"><span class = "glyphicon glyphicon-trash"></span></button>

							<div id="{{"myDelete".$photo->id}}" class="modal fade" role="dialog">
							  <div class="modal-dialog">

							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        
							        <h4 class="modal-title text-center">{{ __('app.delete') }}?</h4>
							      </div>
							      <div class="modal-body">
							        <div class="row">
							        	<div class="col-md-6">
							        		{{ Form::open(['route' => ['photos.destroy', $photo->id ], 'method' => 'DELETE'])}}
												{{ Form::submit( __('app.yes'), ['class' => 'btn btn-block btn-danger'])}}
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
						</p>
						<h4 class = "text-center">
							{{ App::isLocale('uz') ? $photo->title_uz : $photo->title_ru }}
						</h4>
					</div>
					
				</div>
			@endforeach
			</div>

			<div class="text-center">
				{{ $photos->links() }}
			</div>
		</div>
		<div class="col-md-4">
			<div class = "panel panel-default">
				<div class = "panel-heading text-center">
					<h3 class = "margin">{{ __('app.create') }}</h3>
				</div>

				<div class = "panel-body">
					{{ Form::open(['route' => 'photos.store', 'files' => 'true']) }}
						<div class = "form-group">
							{{ Form::file('image') }}
						</div>

						<div class = "form-group">
							{{ Form::label('title_uz', 'Сарлавха(узб): ', ['class' => 'control-label'])}}
							{{ Form::text('title_uz', null, ['class' => 'form-control']) }}
							
						</div>

						<div class = "form-group">
							{{ Form::label('title_ru', 'Заглавие(рус): ', ['class' => 'control-label'])}}
							{{ Form::text('title_ru', null, ['class' => 'form-control']) }}
							
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

@section('scripts')

	<script src="{{ asset('js/lightbox.js') }}"></script>
	
	<script type="text/javascript">
		
		$("#my-image").hover(function()
			{
				$(this).toggleClass('my-image-hover');
			});

	</script>
	

@endsection