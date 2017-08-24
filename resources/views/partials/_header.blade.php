<header id = "my-header">
  <div class="container-fluid">
    <div class="btn-group-sm" style="padding: 20px;">
    {{ Form::open(['route' => 'lang', 'class' => 'pull-right margin-left']) }}
      <input type = "hidden" name = "lang" value = "ru"/>
      <button type="submit" class="btn {{ App::isLocale('ru') ? 'btn-primary' : 'btn-default'}}">RU</button>
    {{ Form::close() }}

    {{ Form::open(['route' => 'lang', 'class' => 'pull-right']) }}
      <input type = "hidden" name = "lang" value = "uz"/>
      <button type="submit" class="btn {{ App::isLocale('uz') ? 'btn-primary' : 'btn-default'}}">UZ</button>
    {{ Form::close() }}

    </div><!-- end of ru/uz -->
    <br>
    <div class="row">
      <div class="col-sm-5">
        <div class="row">
          <div class="col-sm-4">
            <img src="{{ asset("images/gerb1.png")}}" style="height: 150px; padding-left: 20px;">
          </div>
          <div class="col-sm-8">
            <h3><span class="glyphicon glyphicon-earphone"></span> {{ __('app.trust_call') }}: <br>(+99871) 143 07 70</h3>
            <h3><span class="glyphicon glyphicon-phone-alt"></span> {{ __('app.save_service') }}: 102</h3>
          </div>
        </div>
      </div>
      <div class="col-sm-2 text-center"><img src="{{ asset("images/logo.png")}}" width = "150px"></div>
      <div class="col-sm-5"><h1 id="text">МИНИСТЕРСТВО ВНУТРЕННИХ ДЕЛ РЕСПУБЛИКИ УЗБЕКИСТАН</h1></div>

    </div><!-- end of header row-->
    <br>
    <div class="container my-container">
      <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand my-main-brand" href="{{ route('main') }}"><span class = "glyphicon glyphicon-home"></span></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" >
              <li class="dropdown" >
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ __('app.nav_department') }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('department', 1) }}">{{ __('app.department_history') }}</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('department', 2) }}">{{ __('app.department_managers') }}</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('department', 3) }}">{{ __('app.department_system') }}</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('department', 4) }}">{{ __('app.department_expert') }}</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('department', 5) }}">{{ __('app.department_information') }}</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ __('app.nav_functions') }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('functions', 1) }}">{{ __('app.functions_main') }}</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('functions', 2) }}">{{ __('app.functions_rights') }}</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('functions', 3) }}">{{ __('app.functions_articles') }}</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('functions', 4) }}">{{ __('app.functions_library') }}</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('functions', 5) }}">{{ __('app.functions_work') }}</a></li>
                </ul>
              </li>
              <li><a href="{{ route('documents') }}">{{ __('app.nav_documents') }}</a></li>
              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Хужжатлар<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Давлат дастурлари, Олий Мажлис <br>қарорлари</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Ўзбекистон Республикаси<br> Президентининг Фармонлари</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Ўзбекистон Республикачи<br> Президентининг Қарорлари</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Ўзбекистон Республикаси<br> Вазирлар Махкамаси қарорлари</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Халқаро хужжатлар</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Ички ишлар вазирлиги меъёрий <br>хуқуқ хужжатлари</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Олий суд Пленуми қарорлари</a></li>
                  <li role="separator" class="divider"></li>  
                  <li><a href="#">Меъёрий хужжатлар лойихалари</a></li>
                </ul>
              </li> -->
              <li><a href="{{ route('news', 0) }}">{{ __('app.nav_news') }}</a></li>
              <li><a href="{{ route('questions') }}">{{ __('app.nav_questions') }}</a></li>
              <li><a href="{{ route('gallery') }}">{{ __('app.nav_gallery') }}</a></li>
            </ul>
            <!-- <form class="navbar-form navbar-right">
            <div class="form-group" >
              <input type="text" class="form-control" placeholder="Поиск">
            </div>
            <button type="submit" class="btn btn-default">Искать</button>
                      </form> -->
          </div><!-- /.navbar-collapse -->

      </nav><!-- end of navbar -->
    </div>
  </div>
</header><!-- end of header-->

