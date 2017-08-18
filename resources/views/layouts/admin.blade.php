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

        <div class = "container-fluid admin-page"> 
			<div class = "row">
				<div class = "col-md-12">
					<ul class = "nav nav-tabs">
						<li class = "{{ Request::is('admin') ? 'active' : '' }}"><a href="/admin"><h3>Главная</h3></a></li>
                        <li class = "{{ Request::is('admin/news') ? 'active' : '' }}"><a href="/admin/news"><h3>Новости</h3></a></li>
						<li class = "{{ Request::is('admin/photos') ? 'active' : '' }}"><a href="/admin/photos"><h3>Фото</h3></a></li>
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
    @yield('scripts')
</body>
</html>