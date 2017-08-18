@extends('layouts.admin')


@section('title', '| Новости')

@section('content')

			<h1 class = "text-center">
				Новости
				<a href = "{{ route('news.create') }}" class = "btn btn-lg btn-primary pull-right">Создать</a>
			</h1>
			<hr>
			@foreach($news as $new)
			<div class = "well">
				<div class = "row">
					
					<div class = "col-md-2">
						<img src="{{ asset('images/'.$new->image) }}" class = "img-responsive" width = "100%">

						<p class = "info margin-top">
							Создано: <span class = "pull-right">{{ date('d.m.y, h:i', strtotime($new->created_at)) }}</span>
							</br>
							Изменено: <span class = "pull-right">{{ date('d.m.y, h:i', strtotime($new->updated_at)) }}</span>
							
						</p>
						
					</div>

					<div class = "col-md-8">
						<h4 class = "news-title"><a href="{{ route('news.show', $new->id) }}">
							{{ App::isLocale('uz') ? $new->title_uz : $new->title_ru }}
							{{ ($count = strlen(App::isLocale('uz') ? $new->title_uz : $new->title_ru) > 100) ? '...' : '' }}
							{{ mb_strlen($new->title_ru)}}
							</a>
						</h4>
						
					
							<p> 
								{{ mb_substr(App::isLocale('uz') ? $new->overview_uz : $new->overview_ru, 0, 150+mb_strlen(App::isLocale('uz') ? $new->title_uz : $new->title_ru)) }} 
								{{ (mb_strlen(App::isLocale('uz') ? $new->overview_uz : $new->overview_ru) > (150+mb_strlen(App::isLocale('uz') ? $new->title_uz : $new->title_ru))) ? '...' : '' }} 
							</p> 

						
					</div>


					<div class = "col-md-2 text-right">
						<a href = "{{ route('news.edit', $new->id) }}" class = "btn btn-sm btn-primary"><span class = "glyphicon glyphicon-edit"></span></a>
						<button class = "btn btn-sm btn-danger" data-toggle ="modal" data-target = {{ "#myDelete"."$new->id" }}><span class = "glyphicon glyphicon-trash"></span></button>

						<div id={{ "myDelete"."$new->id"}} class="modal fade" role="dialog">
							<div class="modal-dialog">
								
							    <!-- Modal content-->
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <h4 class="modal-title text-center">Удалить?</h4>
							      </div>
							      <div class="modal-body">
							      	<div class = "row">
							      		<div class = "col-md-6">
								        	{!! Form::open(['route' => ['news.destroy', $new->id ], 'method' => "delete"]) !!}
								        		{{ Form::submit('Да', ['class' => 'btn btn-success btn-large btn-block']) }}
								        	{!! Form::close() !!}
								        </div>

								        <div class = "col-md-6">
								        	<button type="button" class="btn btn-danger btn-large btn-block" data-dismiss="modal">Нет</button>
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

			{{ $news->links() }}


@endsection