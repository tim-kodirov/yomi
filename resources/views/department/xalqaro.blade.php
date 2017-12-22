@extends('layouts.main')

@section('title', '| История Департамента')


@section('content')

    <h2 class = "color-title">{{ __('app.link_4') }}</h2>
    <hr>


        <!-- <p class = "text-right"><b><i>«Эркин ва фаровон, демократик Ўзбекистон давлатини биргаликда барпо этамиз.»</i></b></p>
         <p class = "text-right"><b class = "text-right"><i>Мирзиёев Шавкат Миромонович</i></b></p>
          -->
        <img src="/images/news/1.jpg" alt="" width="90%">
    <br><br>
        <p style="text-align: justify">
        <b>
            &nbsp;&nbsp;&nbsp; 2017 йил 24 ноябр куни Ўзбекистон Республикаси Президенти ҳузуридаги Давлат бошқаруви академияси қошидаги Ёшлар муаммоларини ўрганиш ва истиқболли кадрларни тайёрлаш Институти билан Тошкент шахридаги И.М.Губкина номидаги Россия нефт ва газ университети ўртасида ҳамкорлик меморандуми имзоланди.
            Ҳамкорлик меморандумига кўра икки томонлама илмий лойиҳаларни амалга ошириш, турли ўқув семинарлар, илмий-амалий анжуманлар ва конферанциялар ташкил этиш кўзда тутилади.
            Шу куннинг ўзида, И.М.Губкина нефт ва газ университети профессор-ўқитувчилари ва талабалари билан “Сайловлар – демократия кўзгуси” мавзусида семинар ўтказилди. Тадбир давомида Институт директори А.Жалилов, ҳамда мутахассислар С.Саидов, З.Лухманова, К.Тогаев, М. Сафарова ўз маърузалари билан иштирок этишди. Семинар қизғин баҳс-мунозара ва фикр алмашинуви асосида бўлиб ўтди.
        </b><br><br>
        </p>
            <img src="/images/news/2.jpg" alt="" width="90%"><br><br>
    <img src="/images/news/3.jpg" alt="" width="90%"><br><br>
    <img src="/images/news/4.jpg" alt="" width="90%"><br><br>
    <img src="/images/news/5.jpg" alt="" width="90%"><br><br>


@endsection

@section('sidebar')
    @include('partials._department_sidebar')
@endsection
