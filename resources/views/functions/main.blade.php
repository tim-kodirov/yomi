@extends('layouts.main')

@section('title', ' | Давлат хизмати регламенти')

@section('content')
<h2> {{ __('app.expert_main') }}</h2>
<hr>

@if(App::isLocale('uz'))
<!--
<br>
<div class="row">
	<div class="col-sm-7 col-sm-offset-5">
		<strong>
			<p class = "text-center">&laquo;ТАСДИҚЛАЙМАН&raquo;</p>
			<p>Ўзбекистон Республикаси Ички ишлар вазирининг ўринбосари полковник</p>
			<p class = "text-right">А.А. Бобохонов</p>
			<p>2017 йил &laquo;_____&raquo; _______</p>
		</strong>
	</div>
</div>
<br>
<p class = "text-center"><strong>Давлат хизмати регламенти </strong></p>

<p class = "text-center">&laquo;Ички ишлар органларининг эксперт-криминалистика бўлинмалари томонидан юридик шахсларга пуллик асосда экспертлик, илмий-тадқиқот ва ахборот хизматларини тақдим этиш тартиби тўғрисида&raquo;</p>

<br>
<h5><strong>1.&nbsp;Хизматни ёритиш (паспорт)</strong></h5>

<p>1.1.&nbsp;Хизмат номланиши</p>



<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ички ишлар органларининг эксперт-криминалистика бўлинмалари томонидан юридик шахсларга пуллик асосда экспертлик, илмий-тадқиқот ва ахборот хизматларини тақдим этиш.</p>
			
<br>

<p>1.2.&nbsp;Хизмат натижаси</p>


<div class = "bordered-padding">
	<p>&nbsp;&nbsp;&nbsp;&nbsp; Буюртмачи олади</p>

	<p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ўтказилган пуллик хизмат (иш) натижалари муҳрланган ва (ҳар бир бетида) буюртмани бажарган ихтисослашган мутахассисини имзоси ва пуллик хизмат ўтказилган ЭКБнинг бошлиғи ёки ўринбосарини имзоси бўлган маълумотнома, илмий-тадқиқотлар ҳужжати (тақризлаш), эксперт хулосаси шаклида расмийлаштирилади.</em></p>
</div>
<br>
<p>1.3.&nbsp;Хизмат кўрсатиш органлари</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Хизматни бажарувчилари бўлиб фақат ички ишлар органларининг эксперт-криминалистика бўлинмаларини малакали ва ваколатга эга ходимлари ҳисобланади.	</p>
			
<br>
<p>1.4.&nbsp;Ҳуқуқий асос</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ўзбекистон Республикаси Президентининг 2017 йил 10 апрелдаги ПФ-5005-сонли «Ички ишлар органларининг фаолияти самарадорлигини тубдан ошириш, жамоат тартибини, фуқаролар ҳуқуқлари, эркинликлари ва қонуний манфаатларини ишончли ҳимоя қилишни таъминлашда уларнинг масъулиятини кучайтириш чора-тадбирлари тўғрисида»ги Фармони,  Ўзбекистон Республикаси Президентининг 2017 йил 18 апрелдаги ПҚ-2898-сонли «Ички ишлар органларининг жиноятларни тергов қилиш соҳасидаги фаолиятини тубдан такомиллаштириш чора-тадбирлари тўғрисида»ги қарори, Ички ишлар вазирининг «Ички ишлар органларининг эксперт-криминалистика бўлинмалари томонидан юридик шахсларга пуллик асосда экспертлик, илмий-тадқиқот ва ахборот хизматларини тақдим этиш тартиби тўғрисидаги низомни тасдиқлаш ҳақида»ги 2017 йил 3 июлдаги 125-сонли буйруғи.</p>

<br>
<p>1.5.&nbsp;Хизматни олувчи</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Фақат юридик шахслар.</p>

<br>
<p>1.6.&nbsp;Сўровни бериш муддати </p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Юридик шахсни хоҳиши бўйича ёзма мурожаат берилади.</p>

<br>
<p>1.7.&nbsp;Ижро муддати</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Бажариш муддати шартномага мувофиқ аниқланади.</p>

<br>
<p>1.8.&nbsp;Хизматни бажаришга киришиш муддати</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Икки томонлама шартнома имзоланганидан кейин бажарувчи хизматни бажаришга киришади.	</p>

<br>
<h5><strong>2.&nbsp;Хизмат олувчиларга маълумот бериш</strong></h5>

<p>2.1.&nbsp;Маълумот ҳажми ва таркиби&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<br>

<div class = "bordered-padding">
	<p>&nbsp;&nbsp;&nbsp;&nbsp; Ҳар қандай манфаатдор шахсга қуйидаги маълумотларни тақдим этиш кафолатланади:</p>

	<p>- керакли ҳужжатларни рўйхати;</p>

	<p>- кўрсатилган хизмат учун тўлов шартлари;</p>

	<p>- пуллик хизматни бажариш мумкинлиги тўғрисида маълумот; </p>

	<p>- хизмат кўрсатишга шартномани тузиш ва бекор қилиш шарти.</p>
			
</div>


<br>

<p>2.2.&nbsp;Батафсил маълумот бериш</p>

<div class = "bordered-padding">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Мурожаат қилган юридик шахсларга маълумот тақдим этилади:</p>

	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ўзбекистон Республикаси ИИВ, Қорақалпоғистон Республикаси ИИВ, Тошкент шаҳар ИИББ, вилоят ИИБ Эксперт-криминалистика бўлинмаларида</p>

	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ўзбекистон Республикаси Ички ишлар вазирлиги веб-сайтида (www.mvd.uz).</p>
</div>
			

<br>

<p>2.3.&nbsp;Сўров бўйича маълумот</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Шахсан мурожаат қилинганида: 9-00 дан 18-00 гача ички ишлар органларининг эксперт-криминалистика бўлинмалари томонидан юридик шахсларга пуллик асосда экспертлик, илмий-тадқиқот ва ахборот хизматларини кўрсатиш масалалари бўйича оғзаки консультация бериш (ариза, хизмат қийматлари, керакли ҳужжатлар рўйхати, шартнома).</p>

<br>

<p>2.4.&nbsp;Хизмат кўрсатиш жойи ҳақида маълумот бериш</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Қорақалпоғистон Республикаси ИИВ, Тошкент шаҳар ИИББ, вилоят ИИБ Эксперт-криминалистика бўлинмалари </p>

<br>

<p>2.5.&nbsp; Фойдаланиладиган ҳужжат бланклари (шакллари)</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Томонлар ўртасида иш қийматининг баҳосини ҳисоблаб чиқиш, техник топшириқ, ишнинг режа-жадвали ва бошқа керакли иловалар қўшимча равишда қўшиладиган шартнома тузилади.</p>

<br>
<h5><strong>3.&nbsp;Хизмат кўрсатиш</strong></h5>

<p>3.1.&nbsp;Иш вақти</p>

<div class="bordered-padding">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Иш вақти 9.00 дан 18.00 гача Тушлик 13.00 дан 14.00 гача</p>

	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Пуллик хизматлар эксперт-криминалистика бўлинмаларини ички ишлар органлари учун экспертиза ва тадқиқотларни бажариши бўйича асосий фаолиятига таъсир қилмайдиган ҳолда амалга оширилади. Пуллик хизматни бажариш учун ихтисослашган мутахассиснинг 50% дан кўп бўлмаган иш вақти ажратилади.</p>
</div>
			
<br>
<p>3.2.&nbsp;Кутиш шартлари</p>

<div class="bordered-padding">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Иккитомонлама шартномани имзолаш учун – рухсатномалар ёздирилади. </p>

	<p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ёнида шахсини тасдиқловчи ҳужжат бўлиши шарт.</em></p>
</div>
			
<br>
<h5><strong>4. Хизмат кўрсатиш тартиби</strong></h5>
<p>4.1.&nbsp;Керакли ҳужжатлар</p>

<p class = "bordered-padding">Буюртмачи Эксперт-криминалистика бўлинмасига 1-иловада келтирилган рўйхатга мувофиқ зарурий хизматлар кўрсатилган ихтиёрий шаклдаги ёзма мурожаатни тақдим қилади.</p>

<p>4.2.&nbsp;Хизмат учун ундириладиган халқ.</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp; Эксперт-криминалистика бўлинмаси базасида пуллик хизматлар кўрсатишга шартнома имзоланганидан кейин буюртмачи томонидан бажарувчи ҳисоб рақамига, шартномада кўрсатилган сумма (пул) миқдорнинг 15% тўлови олдиндан амалга оширилади. Шартномага асосан буюртма бажарилганидан сўнг, буюртмачи бажарувчи ҳисоб рақамига қолган 85% тўловини амалга оширади.
</p>

<br>

<p>4.3.&nbsp;Хизмат кўрсатиш босқичлари</p>

<div class = "bordered-padding">
	<p>Пуллик хизмат ижроси билан алоқадор материалларни Эксперт-криминалистика бўлинмаси бошлиғи ёки унинг ўринбосари қабул қилади ва кўриб чиқади. Материаллар буюртмачининг қонуний вакили иштирокида кўриб чиқилади.</p>

	<p>Материаллар ўрганиб чиқилганидан кейин пуллик хизматларни ижро этиш имконияти аниқланади ва буюртмачи билан ўзига хос хусусиятлари келишилади.</p>

	<p>Пуллик хизматни қиймати бўйича келишув буюртмачи ва Эксперт-криминалистика бўлинмаси бошлиғи ёки унинг ўринбосари томонидан имзоланадиган шартнома билан расмийлаштирилади.</p>

	<p>Шартномада ўзаро ҳамкорлик тартиби, хизмат (иш) қиймати, тўлов муддатлари, хизмат (иш) ҳажми, шакли, муддатлари, томонларнинг жавобгарлиги, баҳсли масалаларни ҳал қилиш масалалари ёритилади. Шартномада жалб этилган ихтисослашган мутахассисларни сони кўрсатилиши шарт.</p>
</div>

<br>
<p>4.4.&nbsp;Рад этиш асослари</p>

<p class = "bordered-padding">Буюртмачи томонидан тақдим қилинган ишни (хизматни) ижро қилишнинг имкони бўлмаганида, Эксперт-криминалистика бўлинмаси бошлиғи ёки унинг ўринбосари бу ҳақда буюртмачига хабар қилади.</p>
			

<br>
<h5><strong>5.&nbsp;Сифатни таъминланиши</strong></h5>

<p>5.1.&nbsp; Сифатсиз хизматдан шикоят этиш</p>

<p class = "bordered-padding">Хизматдан норози бўлиб шикоят аризаси бериш қонунчиликда ўрнатилган тартибда амалга оширилади.</p>

<hr>

<div class="row">
	<div class="col-sm-6">
		<h4><strong>Ўзбекистон Республикаси ИИВ ЭКБМ бошлиғининг биринчи ўринбосари, подполковник
</strong></h4>
	</div>
	<div class="col-sm-6 text-right">
		<h4><strong>Н.М. Галипшин</strong></h4>
	</div>
</div>

<br>
<div class="row">
	<div class="col-sm-6 col-sm-offset-6 text-center">
		<p>Ички ишлар органларининг эксперт-криминалистика бўлинмалари томонидан юридик шахсларга пуллик асосда экспертлик, илмий-тадқиқот ва ахборот хизматларини тақдим этиш тартиби тўғрисидаги регламентга</p>
		<p>1-ИЛОВА</p>
	</div>
</div>

<br>
<p class = "text-center"><strong>Ўзбекистон Республикаси ИИВ Эксперт-криминалистика бўлинмалари томонидан кўрсатиладиган пуллик хизматлар ва ишлар рўйхати</strong></p>

<p>1.&nbsp;Ҳужжатларда, қимматбаҳо қоғозларда, шахсни тасдиқловчи ҳужжатларда қалбакилаштириш белгиларини аниқлаш билан боғлиқ масалалар бўйича ўқитиш.</p>

<p>2.&nbsp;Шахсни идентификация қилишда видеокузатув тизими имкониятларини аниқлаш.</p>

<p>3.&nbsp;Транспорт воситаларининг двигател, шасси, кузов рақамларини рўйхатга қўйишда ва қайта рўйхатдан ўтказишдаги тадқиқотлар.</p>

<p>4.&nbsp; Ҳужжатлар, қимматбаҳо қоғозлар, лоторея чипталари, шунингдек бошқа турдаги қатьий ҳисобот остидаги босма маҳсулотларнинг ҳақиқийлигини аниқлаш бўйича тадқиқотлар.</p>

<p>5.&nbsp;Қўлёзмалар ва имзоларни идентификация қилиш бўйича тадқиқот.</p>

<p>6.&nbsp; Узоқ муддат мобайнида ўчиб кетган матнларни қайта тиклаш.</p>

<p>7.&nbsp;Заргарлик буюмлари ва вино-ароқ маҳсулотлари таркибини аниқлаш.</p>

<p>8.&nbsp;Компьютер технологияси соҳасида хизмат ва консультациялар кўрсатиш, хусусан, рақамли ташувчиларда ўчиб кетган маълумотларни қайта тиклаш ва рақамли маълумотларни ҳимоялаш бўйича консультация бериш.</p>

<p>Ўзбекистон Республикаси қонун ҳужжатларида назарда тутилган ва мазкур Низомга зид бўлмаган бошқа турдаги хизматлар ҳам кўрсатилиши мумкин. Мазкур рўйхатга ўзгартириш ва қўшимчалар киритилиши мумкин. </p>

<br>
-->
@else

<br>
<div class="row">
	<div class="col-sm-7 col-sm-offset-5">
		<strong>
			<p class = "text-center">&laquo;УТВЕРЖДАЮ&raquo;</p>
			<p>Заместитель министра внутренних дел Республики Узбекистан полковник</p>
			<p class = "text-right">А.А. Бобохонов</p>
			<p>&laquo;_____&raquo; _______ 2017 г.</p>
		</strong>
	</div>
</div>
<br>
<p class = "text-center"><strong>Регламент оказания государственной услуги </strong></p>

<p class = "text-center">&laquo;о порядке предоставления юридическим лицам на платной основе экспертных, научно-исследовательских, информационных услуг экспертно-криминалистическими подразделениями органов внутренних дел&raquo;</p>

<br>
<h5><strong>1.&nbsp;Описание (паспорт) услуги</strong></h5>

<p>1.1.&nbsp;Наименование услуги</p>



<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Предоставление юридическим лицам на платной основе экспертных, научно-исследовательских, информационных услуг экспертно-криминалистическими подразделениями органов внутренних дел.</p>
			
<br>

<p>1.2.&nbsp;Результат услуги</p>


<div class = "bordered-padding">
	<p>&nbsp;&nbsp;&nbsp;&nbsp; Заказчик получает</p>

	<p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Результаты проведенной платной услуги (работы) оформляются в виде справки, научно-исследовательских документов (рецензирование), заключения эксперта, с наличием печати, подписи профильного специалиста (на каждой странице) исполнившего заказ и подписи начальника или заместителя начальника ЭКП в котором проводилась платная услуга</em></p>
</div>
<br>
<p>1.3.&nbsp;Органы, оказывающие услугу.</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Исполнителями услуг являются только сотрудники экспертно-криминалистических подразделений органов внутренних дел Республики Узбекистан, обладающие необходимой квалификацией и компетенцией.</p>
			
<br>
<p>1.4.&nbsp;Правовые основания</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Указ Президента Республики Узбекистан от 10 апреля 2017 года №УП-5005 &laquo;О мерах по коренному повышению эффективности деятельности органов внутренних дел, по усилению их ответственности за обеспечения общественного порядка, надежной защиты прав, свобод и законных интересов граждан&raquo;, постановление Президента Республики Узбекистан от 18 апреля 2017 года №ПП-2898 &laquo;О мерах по коренному совершенствованию деятельности органов внутренних дел в сфере расследования преступлений&raquo;, приказ Министра внутренних дел от 03 июля 2017 года №125 &laquo;Об утверждении Положения о порядке предоставления юридическим лицам на платной основе экспертных, научно-исследовательских, информационных услуг экспертно-криминалистическими подразделениями органов внутренних дел&raquo;</p>

<br>
<p>1.5.&nbsp;Получатели услуги</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Исключительно юридические лица.</p>

<br>
<p>1.6.&nbsp;Срок подачи запроса</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Письменное обращение подается по желанию юридического лица.</p>

<br>
<p>1.7.&nbsp;Срок исполнения</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Сроки исполнения определяются в соответствии с договором.</p>

<br>
<p>1.8.&nbsp;Срок выдачи подтверждения</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; После подписания двухстороннего договора исполнитель приступает к выполнению работ.</p>

<br>
<h5><strong>2.&nbsp;Информирование получателей услуги</strong></h5>

<p>2.1.&nbsp;Состав и объем информации&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<br>

<div class = "bordered-padding">
	<p>&nbsp;&nbsp;&nbsp;&nbsp; Любому заинтересованному юридическому лицу гарантируется предоставление следующей информации:</p>

	<p>- перечень необходимых документов;</p>

	<p>-&nbsp;условие оплаты за оказываемую услугу;</p>

	<p>-&nbsp;информацию о возможности исполнения платных услуг;</p>

	<p>-&nbsp;условия заключения и расторжения договора на оказание услуги.</p>
			
</div>


<br>

<p>2.2.&nbsp;Широкое информирование</p>

<div class = "bordered-padding">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Информация предоставляется обратившимся юридическим лицам:</p>

	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; в Экспертно-криминалистических подразделениях МВД Республики Узбекистан, МВД Республики Каракалпакстан, ГУВД г. Ташкента, УВД областей</p>

	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; на веб-сайте Министерства внутренних дел Республики Узбекистан (www.mvd.uz).</p>
</div>
			

<br>

<p>2.3.&nbsp;Информирование по запросу</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; При личном обращении: с 9-00 до 18-00 устное консультирование по вопросам оказания экспертных, научно-исследовательских, информационных услуг экспертно-криминалистическими подразделениями органов внутренних дел. (заявления, стоимости услуги, перечень необходимых документов, договор).</p>

<br>

<p>2.4.&nbsp;Информирование о месте оказания услуги</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Экспертно-криминалистические подразделения МВД Республики Каракалпакстан, ГУВД г. Ташкента, УВД областей</p>

<br>

<p>2.5.&nbsp; Используемые бланки (формы) документов</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Между сторонами составляется договор, в который дополнительно включается калькуляция стоимости работы, техническое задание, план-график работ и другие необходимые приложения.</p>

<br>
<h5><strong>3.&nbsp;Обслуживание</strong></h5>

<p>3.1.&nbsp;Время работы</p>

<div class="bordered-padding">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Время работы с 9.00 до 18.00. Обед с 13.00 до 14.00.</p>

	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Платные услуги осуществляются без влияния на основную деятельность экспертно-криминалистического подразделения по выполнению экспертиз и исследований для органов внутренних дел. Не более 50% рабочего времени профильного специалиста, отводится для исполнения платных услуг.</p>
</div>
			
<br>
<p>3.2.&nbsp;Условия ожидания</p>

<div class="bordered-padding">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Для подписания двухстороннего договора - выписываются пропуска.</p>

	<p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; При себе необходимо иметь документ удостоверяюший личность.</em></p>
</div>
			
<br>
<h5><strong>4. Процедура оказания помощи</strong></h5>
<p>4.1.&nbsp;Необходимые документы</p>

<p class = "bordered-padding">Заказчик предоставляет в Экспертно-криминалистическое подразделение письменное обращение в произвольной форме, с указанием необходимой услуги согласно перечню, приведенного в приложении №1</p>

<br>
<p>4.2.&nbsp;Платность услуги.</p>

<p class = "bordered-padding">&nbsp;&nbsp;&nbsp;&nbsp; После подписания договора на оказание платных услуг на базе Экспертно-криминалистического подразделения, заказчиком производится предоплата на расчетный счет исполнителя 15% от суммы договора. После выполнения заказа согласно договору заказчик производит оплату на расчетный счет исполнителя остальные 85% стоимости.</p>

<br>

<p>4.3.&nbsp;Этапы оказания услуги</p>

<div class = "bordered-padding">
	<p>Принимает и рассматривает материалы, связанные с исполнением платных услуг, начальник Экспертно-криминалистического подразделения или его заместитель. Материалы рассматриваются в присутствии законного представителя заказчика.</p>

	<p>После изучения материалов, определяется возможность исполнения платных услуг и согласовываются особенности с заказчиком.</p>

	<p>Соглашение о стоимости платных услуг оформляются договором, который подписывается заказчиком и начальником Экспертно-криминалистического подразделения или его заместителем.</p>

	<p>В договоре определяются порядок взаимодействия, стоимость услуг (работ) и сроки оплаты, форма, объем, сроки оказания услуг (работ), ответственность сторон, решение спорных вопросов. В договоре обязательно указывается количество привлеченных профильных специалистов.</p>
</div>

<br>
<p>4.4.&nbsp;Основания отказа</p>

<p class = "bordered-padding">В случае невозможности исполнения представленных заказчиком работ (услуг) начальник Экспертно-криминалистического подразделения или его заместитель извещает об этом заказчика.</p>
			

<br>
<h5><strong>5.&nbsp;Обеспечение качества</strong></h5>

<p>5.1.&nbsp; Обжалование некачественной услуги</p>

<p class = "bordered-padding">Обжалование услуги осуществляется в установленном законодательном порядке.</p>

<hr>

<div class="row">
	<div class="col-sm-6">
		<h4><strong>1-й заместитель начальника ГЭКЦ МВД Республики Узбекистан, подполковник</strong></h4>
	</div>
	<div class="col-sm-6 text-right">
		<h4><strong>Н.М. Галипшин</strong></h4>
	</div>
</div>

<br>
<div class="row">
	<div class="col-sm-6 col-sm-offset-6 text-center">
		<p>ПРИЛОЖЕНИЕ № 1</p>
		<p>к регламенту о порядке предоставления юридическим лицам на платной основе экспертных, научно-исследовательских, информационных услуг экспертно-криминалистическими подразделениями органов внутренних дел</p>
	</div>
</div>

<br>
<p class = "text-center"><strong>Перечень платных работ и услуг, оказываемых Экспертно-криминалистическими подразделениями МВД Республики Узбекистан</strong></p>

<p>1.&nbsp;Обучение по вопросам выявления признаков поддельных документов, ценных бумаг, документов удостоверяющих личность.</p>

<p>2.&nbsp;Определение возможностей систем видеонаблюдения к идентификации личности.</p>

<p>3.&nbsp;Исследований номеров двигателя, шасси, кузова транспортных средств<br />
при их регистрации и перерегистрации.</p>

<p>4.&nbsp;Исследование на подлинность документов, ценных бумаг, лотерейных билетов,<br />
а также другой печатной продукции строгой отчетности.</p>

<p>5.&nbsp;Исследование по идентификации рукописных записей и подписей.</p>

<p>6.&nbsp;Восстановление угасших из-за срока давности текстов.</p>

<p>7.&nbsp;Определение содержания (состава) вино-водочной продукции и ювелирных изделий.</p>

<p>8.&nbsp;Оказание услуг и консультаций в сфере компьютерных технологий, в частности восстановление утраченной информации на цифровых носителях, консультирование по защите цифровой информации.</p>

<p>Могут оказываться и другие услуги, не противоречащие законодательству Республики Узбекистан и настоящему Положению. В данный список могут вносится изменения и дополнения.</p>

<br>
@endif

@endsection

@section('sidebar')
	@include('partials._expert_sidebar')
@endsection