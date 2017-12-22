<footer id = "my-footer">
  <div class = "container-fluid">
    <br>
    <div class = "container">
      <div class="row">
        <div class="col-sm-4 col-xs-6">
          <h5>Тошкент ш., Ислом Каримов кўчаси, 45</h5>
          <h5>ИНДЕКС 100003</h5>
          <h5>ТЕЛ: +998 71 232 60 69</h5>
          <h5>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp +998 71 232 61 45</h5>
          <h5>ПОЧТА: info@yomi.uz</h5>
        </div>
        <div class="col-sm-4 hidden-xs text-center">
          <img width = "90px" height="90px" src="{{ asset("images/logogo.png")}}">
          <hr>
          <h5>© БАРЧА ХУКУКЛАР ХИМОЯЛАНГАН 2017</h5>
          </div>
        <div class="col-sm-4 col-xs-6">

          <ul>
          <div class = "pull-right">

            <a href="#"><img src="http://mvd.uz/img/social_icon2.png" width = "30px" height="30px"></a>
            <a href="#"><img src="http://mvd.uz/img/social_icon3.png" width = "30px" height="30px"></a>
          </div>
             <li><a href="{{ route('main') }}"> {{ __('app.nav_main') }} </a></li>
            <li><a href="{{ route('news', 0) }}">{{ __('app.nav_news') }}</a></li>
            <li><a href="{{ route('news', 1) }}">{{ __('app.nav_news_dep') }}</a></li>
            <li><a href="{{ route('wanted', 0) }}">{{ __('app.wanted') }}</a></li>
            <li><a href="{{ route('department', 0) }}">{{ __('app.nav_department') }}</a></li>
            <li><a href="{{ route('gallery', 0) }}">{{ __('app.nav_gallery') }}</a></li>
            <li><a href="{{ route('expert', 1) }}">{{ __('app.nav_expert') }}</a></li>
          </ul>
          
          
        </div>
      </div>
      <br>
    </div>
  </div>
</footer>