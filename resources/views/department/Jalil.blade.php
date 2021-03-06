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
            <hr>

            <h4 style="text-align: justify">
                Жалилов Актам Ташназарович 1968 йилда Қашқадарё вилояти, Китоб туманида туғилган.<br>
                Миллати – узбек. Оилали, 3 нафар фарзанд отаси.<br>
                Маълумоти – олий.  1992 йилда Тошкент давлат университетини тамомлаган, 1995 йилда Туркиянинг Докуз Эйлюл университетида магистратурани тамомлаган. 1996 йилда Тошкент давлат иқтисодиёт университети аспиранти.
                <br>1996-1999 йй. - Ўзбекистон Республикаси Президенти ҳузуридаги Стратегик ва минтақалараро тадқиқотлар институти катта илмий ходими
                <br>1999-2003 йй. - Жаҳон иқтисодиёти ва дипломатия университети доценти вазифасини бажарувчиси, биринчи проректор ёрдамчиси
                <br>2003-2004 йй. - Индиана Университети тадқиқотчиси (АҚШ)
                <br>2004-2005 йй. - Гарвард Университети тадқиқотчиси (АҚШ)
                <br>2005-2009 йй. - Ўзбекистон Республикаси Президенти ҳузуридаги Давлат ва жамият қурилиши академияси илмий ходими, бўлими бошлиғи, бошқармаси бошлиғи
                <br>2009-2011 йй. - Ўзбекистон Республикаси Президенти ҳузуридаги давлат ва жамият қурилиши академияси “Хорижий мамлакатлар сиёсий тизими ва ташқи иқтисодий алоқалар” кафедраси мудири
                <br>2011-2012 йй. - Япониянинг Хосе Университети Сиёсий фанлар кафедраси тадқиқотчиси
                <br>2012-2013 йй.  - Ўзбекистон Республикаси Президенти ҳузуридаги Давлат Бошқаруви академияси “Фуқаролик жамияти асослари” кафедраси мудири
                <br>2013-2015 йй. - Ўзбекистон Республикаси Президенти ҳузуридаги Давлат Бошқаруви академияси маънавий-маърифий ишлар бўйича проректори
                <br>2015-2016 йй. - Мирзо Улуғбек номидаги Ўзбекистон Миллий университети Миилий ғоя ва ижтимоий фалсафа кафедраси профессори в.б.
                <br>2016-2017 йй. - Ўзбекистон ёшлар иттифоқининг ёшлар муаммолари бўйича эксперти
                <br>2017й. - ҳ.в. - Ўзбекистон Республикаси Президенти ҳузуридаги Давлат бошқаруви Академияси қошидаги Ёшлар муаммоларини ўрганиш ва истиқболли кадрларни тайёрлаш Институти директори
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

