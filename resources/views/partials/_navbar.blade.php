<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" >
        <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>{{ __('app.nav_department') }}</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('department', 1) }}"><b>{{ __('app.department_history') }}</b></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('department', 2) }}"><b>{{ __('app.department_managers') }}</b></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('department', 4) }}"><b>{!!  __('app.department_functions') !!} </b></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('department', 5) }}"><b>{!!  __('app.department_rights') !!}</b></a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#"><b>{!! __('app.doc_2')  !!} </b></a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ route('department', 19) }}"><b>{!!   __('app.doc_14') !!}</b></a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('department', 20) }}"><b>{{ __('app.doc_15') }}</b></a></li>
              </ul>
            </li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#"><b>{!! __('app.doc_3')  !!} </b></a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ route('department', 21) }}"><b>{{ __('app.doc_9') }}</b></a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('department', 22) }}"><b>{{ __('app.doc_10') }}</b></a></li>
                <li role="separator" class="divider"></li>
                <li><a tabindex="-1" href="{{ route('department', 23) }}"><b>{{ __('app.doc_11') }}</b></a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('department', 24) }}"><b>{{ __('app.doc_12') }}</b></a></li>
                <li role="separator" class="divider"></li>
                <li><a tabindex="-1" href="{{ route('department', 25) }}"><b>{{ __('app.doc_13') }}</b></a></li>
              </ul>
            </li>

            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>{{ __('app.nav_expert') }}</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#"><b>{!! __('app.expert_contact')  !!} </b></a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ route('department', 28) }}"><b>{{ __('app.nav_documents') }}</b></a></li>
                <li><a href="#"><b>{{ __('app.department_system') }}</b></a></li>
              </ul>
            </li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#"><b>{!! __('app.expert_main')  !!} </b></a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#"><b>{{ __('app.nav_documents') }}</b></a></li>
                <li><a href="#"><b>{{ __('app.department_system') }}</b></a></li>
              </ul>
            </li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#"><b>{!! __('app.expert_main1')  !!}</b></a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#"><b>{{ __('app.nav_documents') }}</b></a></li>
                <li><a href="#"><b>{{ __('app.department_system') }}</b></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>{{ __('app.doc_4') }}</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><a href="{{ route('department', 8) }}"><b>{{ __('app.doc_5') }}</b></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('department', 10) }}"><b>{{ __('app.doc_6') }}</b></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('department', 11) }}"><b>{{ __('app.doc_7') }}</b></a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>{{ __('app.link_4') }}</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('department', 14) }}"><b>{{ __('app.link_4') }}</b></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('department', 15) }}"><b>{{ __('app.link_5') }}</b></a></li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>{{ __('app.doc_8') }}</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('news', 0) }}"><b>{{ __('app.library') }}</b></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('department', 13) }}"><b>{{ __('app.link_3') }}</b></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('department', 16) }}"><b>{{ __('app.link_6') }}</b></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('department', 17) }}"><b>{{ __('app.link_7') }}</b></a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>{{ __('app.link_10') }}</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><a href="{{ route('department',18) }}"><b>{{ __('app.link_10') }}</b></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('questions') }}"><b>{{ __('app.nav_questions') }}</b></a></li>
            <li role="separator" class="divider"></li>
            <li><a data-toggle="modal" data-target="#myModal" class="btn" role="button"><b>{{ __('app.online_service') }}</b></a></li>
          </ul>
        </li>



      </ul>

      <!-- <form class="navbar-form navbar-right">
      <div class="form-group" >
        <input type="text" class="form-control" placeholder="Поиск">
      </div>
      <button type="submit" class="btn btn-default">Искать</button>
                </form> -->
    </div><!-- /.navbar-collapse -->

</nav><!-- end of navbar -->