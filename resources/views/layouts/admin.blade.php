<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Админ @yield('title')</title>

    <!-- Styles -->
	
    {{ Html::style("css/bootstrap/bootstrap.min.css") }}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">

    @yield('styles')
</head>
<body>
    <div id="app">

        
        <div class="admin-content">
            {{ Form::open(['route' => 'logout', 'class' => 'pull-right margin-left']) }}
                {{ Form::submit( __('app.exit'), ['class' => 'btn btn-warning']) }}
            {{ Form::close() }}

            {{ Form::open(['route' => 'lang', 'class' => 'pull-right margin-left']) }}
              <input type = "hidden" name = "lang" value = "ru"/>
              <button type="submit" class="btn {{ App::isLocale('ru') ? 'btn-primary' : 'btn-default'}}">RU</button>
            {{ Form::close() }}

            {{ Form::open(['route' => 'lang', 'class' => 'pull-right']) }}
              <input type = "hidden" name = "lang" value = "uz"/>
              <button type="submit" class="btn {{ App::isLocale('uz') ? 'btn-primary' : 'btn-default'}}">UZ</button>
            {{ Form::close() }}
        </div>

        <div class = "container-fluid admin-page"> 
			<div class = "row">
				<div class = "col-md-12">
                    
					<ul class = "nav nav-tabs">
						<li class = "{{ Request::is('admin') ? 'active' : '' }}"><a href="/admin"><h4>{{ __('app.nav_main') }}</h4></a></li>
                        <li class = "{{ Request::is('admin/news') ? 'active' : '' }}"><a href="/admin/news"><h4>{{ __('app.nav_news') }}</h4></a></li>
						<li class = "{{ Request::is('admin/photos') ? 'active' : '' }}"><a href="/admin/photos"><h4>{{ __('app.photos') }}</h4></a></li>
                        <li class = "{{ Request::is('admin/videos') ? 'active' : '' }}"><a href="/admin/videos"><h4>{{ __('app.videos') }}</h4></a></li>
                        <li class = "{{ Request::is('admin/documents') ? 'active' : '' }}"><a href="/admin/documents"><h4>{{ __('app.nav_documents') }}</h4></a></li>
                        <li class = "{{ Request::is('admin/wanted') ? 'active' : '' }}"><a href="/admin/wanted"><h4>{{ __('app.wanted') }}</h4></a></li>
                        <li class = "{{ Request::is('admin/questions') ? 'active' : '' }}"><a href="/admin/questions"><h4>{{ __('app.nav_questions') }}
                        @if($questions_count > 0)
                            <span class = "badge">{{ $questions_count }}</span>
                        @endif
                        </h4></a></li>
                        <li class = "{{ Request::is('admin/library') ? 'active' : '' }}"><a href="/admin/library"><h4>{{ __('app.library') }}</h4></a></li>
                        
					</ul>

                    

					<div class = "main-content admin-content">
                        @include('admin_partials._messages')

						@yield('content')
					</div>
					
				</div>
			</div>
        </div>
        
    </div>

    <!-- Scripts -->
    {{ Html::script('js/jquery-3.2.1.min.js') }}
    {{ Html::script('js/bootstrap/bootstrap.min.js') }}

    <script>
        /*$('#lang').change(function()
            {   
                $(this).form.submit;
                
            });*/
    </script>
    @yield('scripts')
</body>
</html>