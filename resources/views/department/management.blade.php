@extends('layouts.main')

@section('title')

@section('content')


<h2 class = "color-title">{{ __('app.department_managers') }}</h2>
<hr>
 
<div class="row">
  <div class="col-sm-4 col-xs-3 text-center">
    <img src="{{ asset('images/managers/aktam.jpg') }}" width = "80%">
  </div>

  <div class="col-sm-8 col-xs-9">
    <h3><b>Жалилов Актам Ташназарович</b></h3>
    <h4><b>Директор</b></h4>
    <h4><b>Телефон: </b>+99871 2326145 </h4>
    <h4><b>Email:</b> a.jalilov@yomi.uz</h4>
    <h4><b>Қабул кунлари:</b> Сешанба ва пайшанба</h4>
    <h4><b>Соат:</b> 10:00 дан 12:00 гача</h4>
    <a href="{{ route('department', 26) }}" class="btn btn-default">{{ __('app.link_100') }}</a>

  </div>
</div>
<hr>

<div class="row">
  <div class="col-sm-4 col-xs-3 text-center">
    <img src="{{ asset('images/managers/alisher.jpg') }}" width = "80%">
  </div>

  <div class="col-sm-8 col-xs-9">
    <h3><b>Юнусов Алишер Бобомурадович</b></h3>
    <h4><b>Директор ўринбосари</b></h4>
    <h4><b>Телефон:</b> +99871 2326069</h4>
    <h4><b>Email:</b> a.yunusov@yomi.uz</h4>
    <h4><b>Қабул кунлари:</b> Чоршанба ва жума</h4>
    <h4><b>Соат:</b> 10:00 дан 12:00 гача</h4>

    <a href="{{ route('department', 27) }}" class="btn btn-default" >{{ __('app.link_100') }}</a>

  </div>
</div>


<!--
<hr>
<div class="row">
  <div class="col-sm-4 col-xs-3 text-center">
    <img src="{{ asset('images/managers/kamoliddin.jpg') }}" width = "80%">
  </div>

  <div class="col-sm-8 col-xs-9">
    <h3><b>Кадыров Камолидин Батирович</b></h3>
    <h4>Бошқарув психологияси ва лидерлик кафедраси мудири</h4>
    <h4><b>Телефон:</b></h4>
  </div>
</div>
  <hr>
<div class="row">
  <div class="col-sm-4 col-xs-3 text-center">
    <img src="{{ asset('images/managers/gulrux.jpg') }}" width = "80%">
  </div>

  <div class="col-sm-8 col-xs-9">
    <h3><b>Нодирова Гулруҳ Рустамовна</b></h3>
    <h4>Ўқувларни ташкил эьтиш бўлими бошлиғи</h4>
    <h4><b>Телефон:</b></h4>
  </div>
</div>
  <hr>
<div class="row">
  <div class="col-sm-4 col-xs-3 text-center">
    <img src="{{ asset('images/managers/ilxom.jpg') }}" width = "80%">
  </div>

  <div class="col-sm-8 col-xs-9">
    <h3><b>Маматкулов Илхом Абдурашидович</b></h3>
    <h4>Стратегик бошқарув кафедраси мудири</h4>
    <h4><b>Телефон:</b></h4>
  </div>
</div>
  <hr>

<div class="row">
  <div class="col-sm-4 col-xs-3 text-center">
    <img src="{{ asset('images/managers/sherali.jpg') }}" width = "80%">
  </div>

  <div class="col-sm-8 col-xs-9">
    <h3><b>Рўзиев Шерали Шодиевич</b></h3>
    <h4>Ахборот-таҳлил бўлими бошлиғи</h4>
    <h4><b>Телефон:</b></h4>
  </div>
</div>
  <hr>

-->


@endsection


@section('sidebar')

@include('partials._department_sidebar')
    
@endsection

@section('scripts')
  <script type="text/javascript">
    $('.news-type-select').change(function()
      { 
        var val = $(this).val();
        window.location.replace('/department/2?region='+val);
      });
  </script>
@endsection

