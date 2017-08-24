<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
</head>
<body>

  @include('partials._header')

  <div class="container my-container">
    <div class="row">

      <div class="col-sm-8 padding">
        @yield('content')
      </div><!-- end of content -->

      <div class="col-sm-4" >
        @yield('sidebar')

        @include('partials._sidebar')
      </div><!-- end of sidebar-->

    </div><!-- end of main row -->
  </div>

  

  @include('partials._footer')

  @include('partials._scripts')
  
</body>
</html>