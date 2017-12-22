<link rel="stylesheet" href="/css/header.css">
<header id = "my-header">
  <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <a  class="btn " data-toggle="modal" data-target="#mytModal"><i><b>Диққат! Сайт тест режимида ишлаяпти.<br> Агар хато топсангиз, шу хаволани босинг.</b></i></a>
                </div>
                    <div class="col-sm-4"></div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="mytModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Ёрдамингиз учун рахмат!!!</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="usr">Сизнинг исмингиз:</label>
                                <input type="text" class="form-control" id="usr">
                            </div>
                            <div class="form-group">
                                <label for="comment">Хато:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Юбориш</button>
                        </div>
                    </div>
                </div>
            </div>
      <div class="row">
          <div class = "col-sm-2 ">
              <a  href="{{ route('main') }}"> <img id="logogo" class="img-responsive center-block" src="/images/logogo.png" alt="Logo"></a>
          </div>
          <div class = "col-sm-8">
              <br>
              <br>
              <h3 class = "text-center margin-top-0"> <b>{{ __('app.dep_name_part_2') }}</b></h3>
          </div>

          <div class="col-sm-2">
              <div class="row margin-top-10">

                  {{ Form::open(['route' => 'lang', 'class' => 'pull-left', 'id' => 'ru-submit']) }}
                  <input type = "hidden" name = "lang" value = "ru"/>
                  <a type = "submit" onclick = "document.getElementById('ru-submit').submit();" class = "{{ App::isLocale('ru') ? "my-btn-active" : "" }} my-btn btn "><b>Рус</b></a>
                  {{ Form::close() }}

                  {{ Form::open(['route' => 'lang', 'class' => 'pull-left', 'id' => 'uz-submit']) }}
                  <input type = "hidden" name = "lang" value = "uz"/>
                  <a type = "submit" onclick = "document.getElementById('uz-submit').submit();" class = "{{ App::isLocale('uz') ? "my-btn-active" : "" }} my-btn btn "><b>Ўзб</b></a>
                  {{ Form::close() }}

                  {{ Form::open(['route' => 'lang', 'class' => 'margin-right', 'id' => 'en-submit']) }}
                  <input type = "hidden" name = "lang" value = "en"/>
                  <a type = "submit" onclick = "document.getElementById('en-submit').submit();" class = "{{ App::isLocale('en') ? "my-btn-active" : "" }} my-btn btn "><b>Eng</b></a>
                  {{ Form::close() }}

              </div><!-- end of ru/uz -->

              <div class="row">
                  {{ Form::open(['route' => 'search', 'method' => 'GET']) }}
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search" name="search">
                          <div class="input-group-btn">
                              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                      </div>
                  {{ Form::close() }}
              </div>
          </div>
      </div>
    </div>
    </div><!-- end of header row-->
</header><!-- end of header-->





