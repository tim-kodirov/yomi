<h3 class = "text-center">{{ __('app.useful_links') }}</h3>
<div class = "well">
<div class = "row">
  <div class = "col-sm-3">
    <div class = "image-place text-center">
      <img src="{{ asset("images/gerb.png")}}" width = "80%" height="80%">
    </div>
  </div>

  <div class = "col-sm-9">
    <h4>
      <a href="#">Ўзбекистон Республикаси Президентининг расмий веб-сайти</a>
    </h4>
  </div>
</div>
</div>
<div class = "well">
<div class = "row">
  <div class = "col-sm-3">
    <div class = "image-place text-center">
      <img src="{{asset("images/lex.png")}}" width = "80%" height="80%">
    </div>
  </div>

  <div class = "col-sm-9">
    <h4>
      <a href="#">Ўзбекистон Республикаси Қонун ҳужжатлари маълумотлари миллий базаси</a>
    </h4>
  </div>
</div>
</div>
<div class = "well">
<div class = "row">
  <div class = "col-sm-3">
    <div class = "image-place text-center">
      <img src="{{ asset("images/strategy.png")}}">
    </div>
  </div>

  <div class = "col-sm-9">
    <h4>
      <a href="#">Ривожлантиришнинг бешта устувор йўналиши бўйича Ҳаракатлар стратегияси</a>
    </h4>
  </div>
</div>
</div>
<div class = "well">
<div class = "row">
  <div class = "col-sm-3">
    <div class = "image-place text-center">
      <img src="{{ asset("images/portal.png")}}">
    </div>
  </div>

  <div class = "col-sm-9">
    <h4>
      <a href="#">Ягона интерактив давлат хизматлари портали</a>
    </h4>
  </div>
</div>
</div>
<hr>

<div class="row">
	<h3 class = "text-center"><span class = "pulse-button">{{ __('app.urgent_search') }}!</span></h3>
  <div class="row">
	<div class="col-sm-6 col-xs-6">
		<p class = "text-center">{{ __('app.criminals') }}</p>
		
	</div>
	<div class="col-sm-6 col-xs-6">
		<p class = "text-center">{{ __('app.losts') }}</p>
		
	</div>
  </div>
  <div class="col-sm-6 col-sm-offset-0 col-xs-4 col-xs-offset-1 text-center">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner wanted-carousel">
        @foreach($wanted as $key => $want)
        <div class="item {{ $key==0 ? "active" : ""}}">
          <a href="{{ route('wanted', 0) }}"><img src="{{asset("images/wanted/".$want->image)}}" height = "200px"></a>
        </div>
        @endforeach
      </div>
    </div>
    
  </div>
  <div class="col-sm-6 col-sm-offset-0 col-xs-4 col-xs-offset-2 text-center">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner wanted-carousel">
        @foreach($lost as $key => $lost)
        <div class="item {{ $key==0 ? "active" : ""}}">
          <a href="{{ route('wanted', 1) }}"><img src="{{asset("images/wanted/".$lost->image)}}" height = "200px"></a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-sm-12 text-center">
  <a href="{{ route('symbols') }}">
    <h4 class = "margin-0">
      <img src="{{ asset("images/gerb1.png")}}" width = "50px" height = "50px"> 
      {{ __('app.symbols') }}
    </h4>
  </a>
  </div>
</div>
<hr>
<!-- <h3 class = "text-center">Интерактив хизматлар</h3>
<br>
<button type="button" class="btn btn-info btn-lg" id="myBtn" data-toggle= "modal" data-target = "#myModal">Онлайн мурожаат</button>

Modal
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Онлайн мурожат</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="usr">Имя:</label>
          <input type="text" class="form-control" id="usr">
        </div>
        <div class="form-group">
          <label for="usr">Телефон(с кодом):</label>
          <input type="text" class="form-control" id="usr">
        </div>
        <div class="form-group">
          <label for="comment">Вопрос:</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Оптравить</button>
      </div>
    </div>end of Modal content
    
  </div>
</div>end of modal -->

<div class="calendar">
  
</div>