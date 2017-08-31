<div class="characters">
	<h2 class = "text-center">{{ __('app.nav_department') }}</h2>
</div>
<br>
<div class="row text-center"> 
  <a href="{{ route('department', 1) }}"><h4>{{ __('app.department_history') }}</h4></a>
  <hr>
  <a href="{{ route('department', 2) }}"><h4>{{ __('app.department_managers') }}</h4></a>
  <hr>
  <a href="{{ route('department', 3) }}"><h4>{{ __('app.department_system') }}</h4></a>
  <hr>
  <a href="{{ route('department', 4) }}"><h4>{{ __('app.department_expert') }}</h4></a>
  <hr>
  <a href="{{ route('department', 5) }}"><h4>{{ __('app.department_information') }}</h4></a>
  <hr>
</div>