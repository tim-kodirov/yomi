@extends('layouts.main')

@section('title')

@section('content')


    <h2 class = "color-title">{!!   __('app.doc_9') !!}</h2>
    <hr>

    <div class="row">
        <div class="col-sm-4 col-xs-3 text-center">
            <img src="{{ asset('images/managers/sherali.jpg') }}" width = "80%">
        </div>

        <div class="col-sm-8 col-xs-9">
            <h3><b>Рўзиев Шерали</b></h3>
            <h4><b>Ахборот таҳлил бўлим бошлиғи </b></h4>
            <h4><b>Телефон: </b>+99871 2326145 </h4>
            <h4><b>Email:</b> <b href="">axborot@yomi.uz </b> </h4>
            <hr>
        </div>
        <div class="col-sm-12 col-xs-15" >
            <h4 style="text-align: justify">
                Бўлим Институтнинг таркибий тузилмаси бўлиб, Ўзбекистон Республикаси Президенти ҳузуридаги Давлат бошқаруви академияси қошидаги Ёшлар муаммоларини ўрганиш ва истиқболли кадрларни тайёрлаш Институтининг таркибий тузилмаси бўлиб, Ўзбекистон Республикаси Президентининг 2017 йил 14 августдаги “Ўзбекистон Республикаси Президенти ҳузуридаги Давлат бошқаруви академияси қошидаги Ёшлар муаммоларини ўрганиш ва истиқболли кадрларни тайёрлаш Институти фаолиятини ташкил қилиш чора-тадбирлари тўғрисида”ги ПҚ-3206-сонли Қарори, Институт Низоми, Илмий кенгаш қарорлари, Институт директори буйруқлари, шунингдек, Ўзбекистон Республикасининг амалдаги қонун ҳужжатлари ҳамда ушбу Низомга асосан фаолият олиб боради.
                <br>
                <br> Бўлимнинг асосий вазифалари қуйидагилардан иборат:
                <br>- Институтнинг Республикада ёшлар муаммоларини ўрганиш бўйича тадқиқот ишларини ташкиллаштиради;
                <br>- ёшлар муаммоларини ўрганиш юзасидан ахборот ва таҳлилий материаллар тайёрлайди;
                <br>- ёшлар муаммоларини ўрганиш ва ҳал этишнинг илғор усулларини жорий қилиш бўйича таклифлар киритади;
                <br>- ёшларга оид давлат сиёсатини такомиллаштиришга қаратилган тадбирларни ташкиллаштиришда иштирок этади;
                <br>- ёшлар муаммоларини ўрганиш соҳасида Институт халқаро алоқаларини ривожлантириш бўйича фаолият юритади;
                <br>- ёшлар муаммоларини ўрганишга оид мавзуларда давлат илмий грантларида иштирок этади;
                <br>- республика ва халқаро илмий-тадқиқот марказлари билан ҳамкорлик қилади ҳамда нашрларни амалга оширади;
                <br>- Институт ахборот-таҳлил фаолияти бўйича ҳисобот юритади.
            </h4>
        </div>
    </div>
    <hr>




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
