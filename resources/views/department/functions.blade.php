@extends('layouts.main')

@section('title', ' | Департамент асосий вазифалари!')

@section('content')
<h2>{!! __('app.department_functions') !!}</h2>

@if(App::isLocale('uz'))
	<p style="text-align: justify">
			&nbsp;&nbsp;&nbsp;  Ўзбекистон Республикаси Президенти ҳузуридаги Давлат бошқаруви Академияси қошидаги Ёшлар муаммоларини ўрганиш ва истиқболли кадрларни тайёрлаш Институтининг асосий вазифалари қўйидагилардан иборат:

		<ul>
			<li>Республика ёшлари муаммоларини ўрганиш, мазкур муаммоларни ҳал қилишга доир илмий асосланган тавсиялар ишлаб чиқиш мақсадида ахборот-таҳлилий материаллар тайёрлаш ва илмий-тадқиқот ишларини олиб бориш;</li>
			<li>Худудлар кесимида давлат ҳокимияти, давлат ва хўжалик бошқаруви органлари ҳамда жамоат ташкилотларининг истиқболли ёш кадрлар тўғрисидаги маълумотлар базасини шакллантириш, уларнинг касбий ривожланиши бўйича мониторинг тизимини яратиш, ушбу кадрларни профессионал маҳорати ва шахсий фазилатларини ҳисобга олган ҳолда бошқарув лавозимларига тавсия этиш бўйича таклифлар ишлаб чиқиш;</li>
			<li>Ишлаб чиқилган ўқув режалари ва дастурлари асосида давлат ҳокимияти, давлат ва хўжалик бошқаруви органлари ҳамда жамоат ташкилотларининг истиқболли ёш кадрлари учун қайта тайёрлаш ва малака ошириш ўқув курсларини ташкил этиш, ёш бошқарувчиларнинг касбий ривожланиши бўйича ўқув-услубий қўлланмалар тайёрлаш;</li>
			<li>Ёшлар муаммоларини ўрганиш ва ҳал этишнинг илғор усулларини жорий қилиш мақсадида ёшларга оид давлат сиёсатини амалга ошириш соҳасида халқаро ҳамкорлик ва алоқаларни ривожлантириш.</li>
		</ul>
	</p>
@endif


@endsection

@section('sidebar')
	@include('partials._department_sidebar')
@endsection