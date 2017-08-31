<footer id = "my-footer">
  <div class = "container-fluid">
    <br>
    <div class = "container">
      <div class="row">
        <div class="col-sm-4 col-xs-6">
          <h3>{{ __('app.dep_name') }}</h3>
          <p>Индекс 000001</p>
          <p>г. Ташкент, р. Мирзо Улугбек, ул. Зиелилар, 9</p>
          <p>Тел: +998 71 289-99-99</p>
          <p>Почта: info@inha.uz</p>
          <p>© Барча ҳуқуқлар ҳимояланган 2017</p>
        </div>
        <div class="col-sm-4 hidden-xs text-center">
          <img src="{{ asset("images/logo.png")}}" width = "150px" height="200px">
          <hr>
          <img src="http://cnt0.www.uz/counter/collect?id=1066&r=&pg=http%3A//mvd.uz/uz&c=Y&j=N&wh=1366x768&px=24&js=1.3&col=133E43&t=ffffff&p=E6850F" width = "30%">
          <img src="http://bank.uz/scripts/informercb?small=1" width = "30%">
          <img src="https://my.gov.uz/img/gis-ru.png" width = "30%">
        </div>
        <div class="col-sm-4 col-xs-6">

          <ul>
          <div class = "pull-right">
            <a href="#"><img src="http://mvd.uz/img/social_icon.png" width = "30px" height="30px"></a>
            <a href="#"><img src="http://mvd.uz/img/social_icon2.png" width = "30px" height="30px"></a>
            <a href="#"><img src="http://mvd.uz/img/social_icon3.png" width = "30px" height="30px"></a>
          </div>
          <h4>Веб сайт</h4>
             <li><a href="{{ route('main') }}">{{ __('app.nav_main') }}</a></li>
            <li><a href="{{ route('news', 0) }}">{{ __('app.nav_news') }}</a></li>
            <li><a href="{{ route('news', 1) }}">{{ __('app.nav_news_dep') }}</a></li>
            <li><a href="{{ route('wanted', 0) }}">{{ __('app.wanted') }}</a></li>
            <li><a href="{{ route('department', 0) }}">{{ __('app.nav_department') }}</a></li>
            <li><a href="{{ route('documents') }}">{{ __('app.nav_documents') }}</a></li>
            <li><a href="{{ route('gallery', 0) }}">{{ __('app.nav_gallery') }}</a></li>
            <li><a href="{{ route('functions', 1) }}">{{ __('app.nav_functions') }}</a></li>
          </ul>
          
          
        </div>
      </div>
      <br>
    </div>
  </div>
</footer>