<header id = "my-header">
  <div class="container-fluid">
    <div class="btn-group-sm" style="padding: 20px;">
    {{ Form::open(['route' => 'lang', 'class' => 'pull-right margin-left']) }}
      <input type = "hidden" name = "lang" value = "ru"/>
      <input type="image" src="{{ asset("images/rus.gif") }}" width = "40px" height="25px"/>
    {{ Form::close() }}

    {{ Form::open(['route' => 'lang', 'class' => 'pull-right']) }}
      <input type = "hidden" name = "lang" value = "uz"/>
      <input type="image" src="{{ asset("images/uzb.png") }}" width = "40px" height="25px" />
    {{ Form::close() }}

    </div><!-- end of ru/uz -->
    <br>
    <div class="row">
      <div class = "col-sm-8 col-sm-offset-2">
        <div class="row vcenter">
          <div class="col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3 text-center"><img src="{{ asset("images/logo.png")}}" class = "brand-image"></div>
          <div class="col-sm-5 hidden-xs">
                <h4><span class="glyphicon glyphicon-earphone"></span> {{ __('app.trust_call') }}: (+99871) 143 07 70</h4>
                <h4><span class="glyphicon glyphicon-phone-alt"></span> {{ __('app.save_service') }}: 102</h4>
          </div>
        </div>
      </div>
      
    </div><!-- end of header row-->
    <h1 class="text-center">{{ __('app.dep_name') }}</h1>
    <br>
  </div>
</header><!-- end of header-->

