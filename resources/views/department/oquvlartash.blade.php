@extends('layouts.main')

@section('title')

@section('content')


    <h2 class = "color-title">{!!   __('app.doc_10') !!}</h2>
    <hr>

    <div class="row">
        <div class="col-sm-4 col-xs-3 text-center">
            <img src="{{ asset('images/managers/gulru.jpg') }}" width = "80%">
        </div>
        <hr>
        <div class="col-sm-8 col-xs-9">
            <h3><b>Нодирова Гулрух Рустамовна</b></h3>
            <h4><b>Ўқувларни ташкил этиш бўлими бошлиғи</b></h4>
            <h4><b>Телефон: </b>+99871 2326 123 </h4>
            <h4><b>Email: study@yomi.uz </b></h4>
            <hr>
        </div>
        <div class="col-sm-12 col-xs-15">
            <h4 style="text-align: justify;">
                <br>&nbsp;&nbsp;&nbsp;Бўлим Институтнинг таркибий тузилмаси бўлиб, Ўзбекистон Республикаси Президентининг 2017 йил 14 августдаги “Ўзбекистон Республикаси Президенти ҳузуридаги Давлат бошқаруви академияси қошидаги Ёшлар муаммоларини ўрганиш ва истиқболли кадрларни тайёрлаш Институти фаолиятини ташкил қилиш чора-тадбирлари тўғрисида”ги ПҚ-3206-сонли қарори, Академиянинг Институт фаолиятига доир буйруқ ва фармойишлари, Институт Устави, Илмий Кенгаш қарорлари, Институт директорининг буйруқлари ва фармойишлари, шунингдек, Ўзбекистон Республикасининг амалдаги қонунлари ҳамда ушбу Низомга асосан фаолият олиб боради.
                <br>&nbsp;&nbsp;&nbsp;Бўлимнинг асосий мақсади Ўзбекистон Ёшлар иттифоқи ва Академия билан келишган ҳолда қайта тайёрлаш ва малака ошириш курсларини ташкил қилади, яъни давлат ҳокимияти, давлат ва хўжалик бошқаруви органлари, жамоат ташкилотларининг Истиқболли ёш кадрларини қайта тайёрлаш бўйича 4 ойгача ва 1 ойгача бўлган қайта тайёрлаш ва малакасини ошириш ўқув курсларини ташкил этишдан иборат.
                <br>&nbsp;&nbsp;&nbsp;Бўлимнинг асосий вазифаси қуйидагилардан иборат:
                <br>- ўқув курслар бўйича ташкилий ва тайёргарлик ишларини амалга ошириш;
                <br>- ўқув курслари дарс жадваларини ишлаб чиқиш;
                <br>- тингловчиларнинг Академия ва Институтларнинг ички тартиб ва интизом қоидалари билан таништиради ва назорат қилиш;
                <br>- кафедралар юклама соатларини мувофиқлаштиш;
                <br>- битирув малакавий ишлар (кейинги ўринларда БМИ)ни ташкил этишда кафедралар ва тегишли бўлимлар билан ҳамкорликда фаолият олиб бориш;
                <br>- якуний Давлат аттестациясини ўтказилишини ташкил қилиш;
                <br>- диплом ва сертификатлар топширилиш маросимини ташкил қилиш;
                <br>- бўлим иш режасини тайёрлаш;
                <br>- Институт профессор-ўқитувчиларининг шахсий иш режаларида кўзда тутилган ўқувларни ташкил этиш ишларни мувофиқлаштириш ва уларни бажарилишини назорат қилиш;
                <br>- ўқув жараёнини ташкил қилишни тартибга солувчи меъёрий-хуқуқий ва бошқа хужжатларнинг лойиҳаларни ишлаб чиқиш;
                <br>- ўқув жараёнини ташкил этилганлиги юзасидан адабиётлари ва тарқатма материаллар билан таъминланганлигини назорат қилиш;
                <br>- асосий, ўриндош ва соатбай асосда фаолият олиб борувчи профессор-ўқитувчиларнинг ўқув юкламалари тўғри тақсимланишини ўз ваколатлари доирасида назорат қилиш;
                <br>- Институт Илмий кенгашига кафедралар фаолиятининг мақсадга мувофиқлиги хусусида ва янги кафедралар очиш ҳақида асосланган таклифларни киритиш;
                <br>- Институт кафедраларининг ўқувларни ташкил этиш ишлари бўйича йиллик иш режаларини кўриб чиқиш ва шу асосда бўлимнинг йиллик иш режасини шакллантириш ҳамда тасдиққа киритиш;
                <br>- Институт кафедраларининг ўқув ишлари бўйича йиллик иш режаларини ўз вақтида бажарилишини мониторинг қилиш;
                <br>- ўқув-машғулотлари бўйича дарс жадвалларининг тузилишига услубий жиҳатдан раҳбарлик қилиш;
                <br>- назорат имтиҳонларининг ўтказилишини назорат қилади ва мувофиқлаштириб бориш;
                <br>- Институтнинг нуфузи ва унинг салоҳиятини янада ошириш мақсадида тингловчилар ўртасида анкета-сўровномаларини ташкил қилиш, уларни таҳлил қилиш ва асосланган таклифларни Илмий кенгашга киритиш;
                <br>- Институтнинг ўқув, илмий, ташкилий, методик таъминот, мониторинг  бўлимларининг фаолияти юзасидан Бўлимнинг иш жараёнини  ривожлантириш ва такомиллаштириш бўйича Институт раҳбарияти ва Илмий кенгашга асосли ва самарали таклифлар кириш.








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
