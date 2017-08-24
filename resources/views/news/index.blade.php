@extends('layouts.admin')


@section('title', '| Новости')

@section('content')
	
<div class="pull-right margin-top-20">

	<select name = "isDepartment" class = "news-type-select">
		<option value = "0" {{ $isDepartment ? 'selected' : ''}}>{{ __('app.nav_news') }}</option>
		<option value = "1" {{ $isDepartment ? 'selected' : ''}}>{{ __('app.nav_news_dep') }}</option>
	</select>

	<a href = "{{ route('news.create') }}" class = "btn btn-lg btn-primary">{{ __('app.create') }}</a>
</div>

<h1 class = "text-center">
	{{ __('app.nav_news') }}
</h1>
<hr>

@foreach($news as $new)
<div class = "well">
	<div class = "row">
		
		<div class = "col-md-3 overflow-hidden">
			<div class = "text-center">
				<img src="{{ asset('images/'.$new->image) }}" height="150px">
			</div>
			<p class = "info margin-top">
				{{ __('app.created') }}: <span class = "pull-right">{{ date('d.m.y, h:i', strtotime($new->created_at)) }}</span>
				</br>
				{{ __('app.updated') }}: <span class = "pull-right">{{ date('d.m.y, h:i', strtotime($new->updated_at)) }}</span>
				
			</p>
			
		</div>

		<div class = "col-md-8">
			<h4 class = "news-title"><a href="{{ route('news.show', $new->id) }}">
				{{ App::isLocale('uz') ? $new->title_uz : $new->title_ru }}
				</a>
			</h4>
			
		
				<p> 
					{{ mb_substr(App::isLocale('uz') ? $new->overview_uz : $new->overview_ru, 0, 150+mb_strlen(App::isLocale('uz') ? $new->title_uz : $new->title_ru)) }} 
					{{ (mb_strlen(App::isLocale('uz') ? $new->overview_uz : $new->overview_ru) > (150+mb_strlen(App::isLocale('uz') ? $new->title_uz : $new->title_ru))) ? '...' : '' }} 
				</p> 

			
		</div>


		<div class = "col-md-1 text-right">
			<a href = "{{ route('news.edit', $new->id) }}" class = "btn btn-sm btn-primary"><span class = "glyphicon glyphicon-edit"></span></a>
			<button class = "btn btn-sm btn-danger" data-toggle ="modal" data-target = {{ "#myDelete"."$new->id" }}><span class = "glyphicon glyphicon-trash"></span></button>

			<div id={{ "myDelete"."$new->id"}} class="modal fade" role="dialog">
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
					        	{!! Form::open(['route' => ['news.destroy', $new->id ], 'method' => "delete"]) !!}
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
		</div>

	</div>
	
</div>
@endforeach

{{ $news->links() }}


@endsection

@section('scripts')
	<script type="text/javascript">
		$('.news-type-select').change(function()
			{	
				var val = $(this).val();
				window.location.replace('/admin/news?isDepartment='+val);
			});
	</script>
@endsection