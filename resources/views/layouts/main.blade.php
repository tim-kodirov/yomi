<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
</head>
<body>

  @include('partials._header')

  <div class="container my-container">
    @include('partials._navbar')
    
    <div class="row">

      <div class="col-sm-8 padding">
        @yield('content')
      </div><!-- end of content -->

      <div class="col-sm-4" >
        @yield('sidebar')

        @include('partials._sidebar')
      </div><!-- end of sidebar-->

    </div><!-- end of main row -->

    @yield('additional-content')
  </div>

  

  @include('partials._footer')

  @include('partials._scripts')

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        {!! Form::open(['route' => 'questions.store']) !!}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{ __('app.online_service') }}</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="first_name">{{ __('app.f_name') }}:</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
          </div>
          <div class="form-group">
            <label for="last_name">{{ __('app.s_name') }}:</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
          </div>
          <div class="form-group">
            <label for="middle_name">{{ __('app.m_name') }}:</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name">
          </div>
          <div class="form-group">
            <label for="phone_number">Телефон:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="901234567">
          </div>
          <div class="form-group">
            <label for="address">Адресc:</label>
            <input type="text" class="form-control" id="address" name="address">
          </div>
          <div class="form-group">
            <label for="question">{{ __('app.question') }}:</label>
            <textarea class="form-control" rows="5" id="question" name="question"></textarea>
          </div>
          <div class="form-group">
            <label class = "radio-inline">
              <input type="radio" name="is_citizen" value = "1" checked>
              {{ __('app.citizen_question') }}
            </label>

            <label class = "radio-inline">
              <input type="radio" name="is_citizen" value = "0">
              {{ __('app.employee_question') }}
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-block">{{ __('app.send') }}</button>
        </div>
        {!! Form::close() !!}
      </div>

    </div>
  </div>
</body>
</html>