@extends('layouts.main')

@section('title')

@section('content')


    <h2 class = "color-title">{!!   __('app.doc_14') !!}</h2>
    <hr>

    <div class="row">
        <div class="col-sm-4 col-xs-3 text-center">
            <img src="{{ asset('images/managers/kamoliddin.jpg') }}" width = "80%">
        </div>
            <hr>
        <div class="col-sm-8 col-xs-9">
            <h3><b>Қодиров Камолиддин Ботирович</b></h3>
            <h4><b>“Бошқарув психологияси ва лидерлик” кафедраси мудири – психология фанлари номзоди, доцент</b></h4>
            <h4><b>Телефон: </b>+99871 2326123 </h4>
            <h4><b>Email:</b> </h4>
            <hr>
        </div>
        <hr>
        <div class="col-sm-12 col-xs-15">
            <h4 style="text-align: justify">
                <hr>
                &nbsp;&nbsp;&nbsp; Кафедранинг асосий мақсади тингловчиларга бошқарувнинг психологик ва маънавий асослари, раҳбарликнинг ўзига хос жиҳатларини, ташаббускорлик ва лидерлик сифатларини эгаллаш бўйича чуқур билим бериш, шунингдек, уларда тизимли таҳлил, мантиқий фикрлаш, самарали бошқарув қарорларини қабул қилиш, малака ва кўникмаларини ҳамда бошқарув қадриятларини шакллантириш ва мазкур соҳада илмий изланишлар олиб боришдан иборат.
                <br>&nbsp;Кафедра профессор-ўқитувчилари томонидан қуйидаги фанлар бўйича иқтидорли ёш кадрлар тайёрланилади:
                <br>&nbsp;1. Бошқарувнинг маънавий асослари;
                <br>&nbsp;2. Фуқаролик жамияти асослари;
                <br>&nbsp;3. Бошқарув психологияси ва социологияси;
                <br>&nbsp;4. Бошқарувда лидерлик ва ёшлар психологияси;
                <br>&nbsp;5. Давлат ва жамият бошқарувининг ҳуқуқий асослари;
                <br>&nbsp;6. Ахборот хавфсизлиги ва мафкуравий таҳдидлар.


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

