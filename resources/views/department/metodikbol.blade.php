@extends('layouts.main')

@section('title')

@section('content')


    <h2 class = "color-title">{!!   __('app.doc_13') !!}</h2>
    <hr>

    <div class="row">
        <div class="col-sm-4 col-xs-3 text-center">
            <img src="{{ asset('images/managers/sanjar.jpg') }}" width = "80%">
        </div>
        <hr>
        <div class="col-sm-8 col-xs-9">
            <h3><b>Саидов Санжар Шавкатович</b></h3>
            <h4><b>Методик таъминот бўлим бошлиғи</b></h4>
            <h4><b>Телефон: </b>+99871 2326145 </h4>
            <h4><b>Email:</b> <a href="">metodik@yomi.uz </a> </h4>
            <hr>
        </div>
        <div class="col-sm-12 col-xs-15">
            <h4 style="text-align: justify;">
                <hr>
                <br>&nbsp;&nbsp;&nbsp;Бўлимнинг асосий мақсади Институт методик таъминот ишларини режалаштириш, истиқболли кадрларни танлаш, тайёрлаш, қайта тайёрлаш ва малакасини оширишнинг услубий базасини шакллантириш, ўқув режалар, дастурлар, услубий қўлланмалар ҳамда мультимедия маҳсулотларини ишлаб чиқиш жараёнларини мувофиқлаштириб, ёшлар муаммолари, кадрлар сиёсати самарадорлигини ошириш, истиқболли кадрларни тайёрлаш соҳасида жаҳон тажрибасини ўрганиш, тадбирлар ўтказиш, шу асосда услубий таъминот ишларни янада такомиллаштириш юзасидан таклифлар ишлаб чиқишдан иборат.
                <br>&nbsp;&nbsp;&nbsp;Бўлимнинг асосий вазифалари бўлим мақсадидан келиб чиққан ҳолда белгиланади ва қуйидагилардан иборат:
                <br>- методик таъминот бўлими Институтда амалга ошириладиган илмий, ўқув ва таҳлилий тадқиқотлар ҳамда ўқув жараёнини методик жиҳатдан таъминотини амалга оширади;
                <br>- кафедра, бўлимларда амалга оширилаётган илмий, ўқув, таҳлилий тадқиқотларнинг методик жиҳатдан Институт мақсад ва вазифаларига мослигини назорат қилади;
                <br>- Институтнинг асосий фаолият йўналишларидан келиб чиққан ҳолда ёш раҳбар кадрларни танлаш, тайёрлаш, қайта тайёрлаш ва малакасини оширишнинг услубий базасини шакллантиради;
                <br>- истиқболли кадрларни тайёрлаш ва малакасини ошириш курслари учун мўлжалланган ишчи ўқув дастурларни ишлаб чиқади;
                <br>- Институт кафедралари билан ҳамкорликда истиқболли кадрларни тайёрлаш ва малакасини ошириш курслари учун мўлжалланган ўқув услубий мажмуаларни шакллантиради;
                <br>-  ўқув дастурлари, ўқув-методик, ўқув қўлланмалари ва дарсликлар яратиш мақсадида доимий ва муддатли ижодий гуруҳ, илмий-амалий жамоалар ташкил этади ҳамда улар фаолиятини мувофиқлаштириб боради;
                <br>- Институтнинг халқаро ҳамкорлигини амалга оширади, бўлим ва кафедраларнинг халқаро алоқаларини техник жиҳатдан йўналтиради;
                <br>- Институтнинг халқаро грантларда иштирокини таъминлайди;
                <br>- Институт тингловчиларининг БМИларини тайёрлаш ва ҳимоя қилишнинг асосий талабларини ишлаб чиқади;
                <br>- илмий бўлим билан биргаликда ўқув жараёнининг услубий базасини шакллантириш ва замонавий педагогик технологиялар, тест материалларини янгилаш, модернизация қилиш ва жорий этиш, босма маҳсулотларни манфаатдор ҳудудий ўқув марказларига тарқатишни мувофиқлаштиради;
                <br>- Институт ўқув жараёнлари самарадорлигини ошириш мақсадида янги, интерфаол педагогик технологиялар, ахборот-коммуникация технологияларини жорий қилиш ишларини мувофиқлаштириб боради;
                <br>- ўқув жараёнида қўлланиладиган бадиий ва ҳужжатли фильмлар ҳамда бошқа мультимедиа маҳсулотларининг базасини шакллантиради;
                <br>- методик таъминот фаолияти бўйича ҳисоботни юритади.




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

