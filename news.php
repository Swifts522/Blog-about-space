<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
	<?php
	include("menu.php");  ?>
	<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/newsmain.css">
<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}

@keyframes zoom {
    from {transform: scale(0.1)} 
    to {transform: scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>	
	<style>
	body
		{
			background: #e9f3f3;
		}
::-webkit-scrollbar-button {
background-image:url('');
background-repeat:no-repeat;
width:5px;
height:0px
}

::-webkit-scrollbar-track {
background-color:#ecedee
}

::-webkit-scrollbar-thumb {
-webkit-border-radius: 0px;
border-radius: 0px;
background-color:#6dc0c8;
}

::-webkit-scrollbar-thumb:hover{
background-color:#56999f;
}

::-webkit-resizer{
background-image:url('');
background-repeat:no-repeat;
width:4px;
height:0px
}

::-webkit-scrollbar{
width: 2px;
}
		html { overflow:  hidden; }
		.formnews 
		{ 
			width: 50%;
			position: relative;
			padding-top: 48%;
			top: 40%;
			right: 0;
			bottom: 0;
			left: -0;
			margin: auto;
			text-align:center;
			background-color: rgba(255, 255, 255, 1.0);
			box-shadow: 0 0 10px rgba(0,0,0,0.5); /* Параметры тени */
		}
		.formimg 
		{ 
			width: 22%;
			position: absolute;
			height: 50%;
			top: 0%;
			bottom: 25%;
			right: 1%;
			margin: auto;
			text-align:center;
			background-color: rgba(255, 255, 255, 1.0);
			box-shadow: 0 0 10px rgba(0,0,0,0.5); /* Параметры тени */
		}
		.formnewstitle
		{ 
			background-color: rgba(0, 0, 0, 0.8);
			display: block; /*  Рисунок как блочный элемент */
			width: 100%; /* Ширина рисунка */
			height: 3%; /*  Высота рисунка */
			position: absolute;
			top: 0%;
			left: 0%;
			margin: auto;
			font: 15pt Impact; 
		}
		.menupicture2
		{
			position: absolute;
			top: 47%;
			left: 13%;	
		}
		form 
		{
			position: absolute;
			top: 10%;
			left: 5%;
			margin: auto;
		}
		.menupicture3
		{
			background: url(images/mars.png) no-repeat; /* Путь к файлу с исходным рисунком  */
			background-size: contain; /* Масштабируем фон */
			display: block; /*  Рисунок как блочный элемент */
			width: 30%; /* Ширина рисунка */
			height: 30%; /*  Высота рисунка */
			position: absolute;
			top: 15%;
			left: 5%;		
		}	
		.menupicture4
		{
			background: url(images/astonavt.png) no-repeat; /* Путь к файлу с исходным рисунком  */
			background-size: contain; /* Масштабируем фон */
			display: block; /*  Рисунок как блочный элемент */
			width: 30%; /* Ширина рисунка */
			height: 30%; /*  Высота рисунка */
			position: absolute;
			top: 10%;
			left: 3%;		
		}			
		.newsfonimg1
		{
			background: url(../images/newrocket.png) no-repeat; /* Путь к файлу с исходным рисунком  */
			background-size: contain; /* Масштабируем фон */
			display: block; /*  Рисунок как блочный элемент */
			width: 30%; /* Ширина рисунка */
			height: 100%; /*  Высота рисунка */
			position: absolute;
			top: 0%;
			right: -10%;		
		}
		.newsimg1 
		{
				background: url(images/newsimg2.jpg) no-repeat; /* Путь к файлу с исходным рисунком  */
				background-size: cover; /* Масштабируем фон */
				display: block; /*  Рисунок как блочный элемент */
				width: 40%; /* Ширина рисунка */
				height: 25%; /*  Высота рисунка */
				position: absolute;
				top: 13%;
				left: 2%;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				margin-bottom: 25px;
		}
		.newimgtitle
		{
			background-color: rgba(0, 0, 0, 0.8);
			display: block; /*  Рисунок как блочный элемент */
			width: 100%; /* Ширина рисунка */
			height: 5%; /*  Высота рисунка */
			position: absolute;
			top: 0%;
			left: 0%;
			margin: auto;	
		}
		.texttitle
		{
			position: absolute;
			top: 7%;
			left: 23%;
			text-align:center;
			margin: auto;
			font: 15pt Impact;
		}
		.textnews 
		{
			position: absolute;
			top: 40%;
			left: 2%;
			margin: auto;
			text-align: left;
			font: bold 12pt Timer New Roman; 
		}
		.imgscroll
		{
			position: absolute;
			top: 2%;
			left: 10%;
			margin: auto;
			text-align: left;			
		}
		#scrolltext
		{
			height:55%;
			width:95%;
			overflow-y:auto;
			padding-right:5px;
		}
		#scrollimg
		{
			height:80%;
			width:95%;
			top: 8%;
			overflow-y:auto;
			padding-right:1px;
		}
		.quicktextnews 
		{
			position: absolute;
			top: 13%;
			left: 45%;
			margin: auto;
			text-align: left;
			font: bold 11pt Oldtown; 
			letter-spacing: 0.8px;
		}	
		.img1
		{
			position: relative;
			top: 10%;
			right: 0%;
		}
	</style>
    </head>
    <body>
	<div class = 'menupicture2'><img src = 'images/rocket.png'></div>
	<!--<div class = 'menupicture3'></div>-->
	<!--<div class = 'menupicture4'></div>-->
	<Br><Br><Br><Br><Br>
	<div class = 'formnews'>
	<div class = 'formnewstitle'><Br>
	</div>
	<div class = 'texttitle'>Илон Маск и его программа покорения марса</div>
	<div class = 'newsimg1'></div>
	<div class = 'quicktextnews'>Глава компании SpaceX, американский бизнесмен Илон Маск, выступая в 
	мексиканском городе 
	Гвадалахара на 67-м конгрессе Международной федерации астронавтики, представил проект межпланетной транспортной системы ITS (Interplanetary Transport System), предназначенной для колонизации Марса. 
	Предполагается, что на Красной планете будет построено полностью автономное поселение. 
	Благодаря ITS в колонию на Марсе через полвека переберется миллион человек.</div>
	<div class = 'textnews' id = 'scrolltext'>
	По мнению Илона Маска, человечеству, чтобы выжить, необходимо колонизировать другие миры. Марс для этого подходит лучше всего, поскольку условия на планете хоть и отдаленно, но все же похожи на земные. На соседней Венере слишком жарко, а спутники Юпитера и Сатурна, где также можно было бы создать колонию, расположены слишком далеко. Освоение этих лун, в частности, Энцелада, — уже следующий этап колонизации Солнечной системы.
	Маск предлагает создать пилотируемый корабль вместимостью 200 человек. На околомарсианской орбите должна накопиться тысяча таких аппаратов. Всего от Земли до Марса планируется около десяти тысяч перелетов. Путешествие займет не более 150 суток, а стоимость доставки полезного груза составит 140 тысяч долларов за одну тонну.
Концепция ITS основывается на нескольких ключевых технологиях — многоразовости, дозаправке кораблей на орбите и использовании марсианского топлива. В качестве топлива предлагается метан, который можно получать на Марсе из воды и углекислого газа. Все двигатели на ракетах останутся химическими — ионные или ядерные варианты не рассматриваются. На ракету ITS планируется поставить двигатель Raptor, у которого самое большое отношение тяги к массе. Этот агрегат недавно прошел испытания, в перспективном носителе предусмотрено 42 двигателя. Топливные баки для Raptor предполагается изготавливать из углеволокна.
Ракета для колонизации Марса будет самой крупной из когда-либо созданных человеком: диаметр — 12 метров, высота — 122 метра (вместе с головной частью).
Первая ступень носителя ITS — это увеличенная первая ступень средней ракеты Falcon 9. Для ее возвращения на Землю после отправки корабля на околоземную орбиту потребуется около семи процентов всего топлива первой ступени.
С ракетой ITS, как отметил Маск, можно доставить груз в любую точку Земли максимум за 45 минут. Диаметр пилотируемого корабля, размещаемого в головной части, составит 17 метров, высота — 50 метров. Грузоподъемность — 450 тонн (вместе с топливом). Шесть двигателей работают в космосе, три — в атмосфере. После презентации ITS бизнесмен ответил на вопросы присутствующих в зале.
Из его ответов стало известно, что денег на самостоятельное финансирование проекта ITS у SpaceX нет — компания зарабатывает исключительно на заказах НАСА и коммерческих спутниках. Однако ситуация может поменяться. Если в настоящее время из пяти тысяч сотрудников SpaceX над ITS работают около 50 человек, то с течением времени, когда инвестиции в проект вырастут до 300 миллионов долларов в год, бизнесмен надеется резко увеличить их количество.
На вопрос россиянки Анастасии о привлечении иностранных граждан к проекту Маск ответил так: в программе ITS может участвовать любой желающий. Но для этого, помимо таланта, нужна еще и грин-карта. Для сравнения, в компании Tesla ситуация проще — там четверть сотрудников — иностранцы.
Маск подтвердил свое намерение отправить в 2018 году к Марсу при помощи тяжелой ракеты Falcon Heavy, испытания которой намечены на осень 2016 года, беспилотную миссию на корабле Dragon V2 (расчетной вместимостью до семи человек). После этого он планирует отправлять на Красную планету аппараты каждые 26 месяцев: две миссии в 2020 году, как минимум одну в 2022-м и, вероятно, пилотируемую миссию через два года с высадкой на планету в 2025 году. Пуски планируется осуществлять на разрабатываемой ракете-носителе Falcon Heavy, а старт 2020 или 2022 годов — уже на ракете ITS.
Первый марсианский корабль в SpaceX собираются назвать Heart of Gold. Маск признал: к сожалению, нет никаких гарантий того, что первые колонизаторы смогут вернуться на Землю. Путешествие на Марс он традиционно сравнил с открытием и заселением Америки. От себя добавим, что в Европе такие переселения, как и предшествующее им открытие Америки, многими считались безумием. Станет ли Илон Маск новым Христофором Колумбом или окажется расчетливым бизнесменом с богатой фантазией — покажет время и его дела.	
	</div>
	</div>
	<div class = 'formimg'><div class = 'newimgtitle'><Br>
	</div>
	<div class = 'imgscroll' id = 'scrollimg'>
	<div class = 'img1'><img id="myImg" src="images/newsimg3.jpg" alt="Northern Lights, Norway" width="250" height="150"></div>
	<div class = 'img1'><img id="myImg" src="images/newsimg3.jpg" alt="Northern Lights, Norway" width="250" height="150"></div>
	<div class = 'img1'><img id="myImg" src="images/newsimg3.jpg" alt="Northern Lights, Norway" width="250" height="150"></div>
	<div class = 'img1'><img id="myImg" src="images/newsimg3.jpg" alt="Northern Lights, Norway" width="250" height="150"></div>
	<div class = 'img1'><img id="myImg" src="images/newsimg3.jpg" alt="Northern Lights, Norway" width="250" height="150"></div>
	</div>
	</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<!-- 
Первая ступень носителя ITS — это увеличенная первая ступень средней ракеты Falcon 9. Для ее возвращения на Землю после отправки корабля на околоземную орбиту потребуется около семи процентов всего топлива первой ступени.
С ракетой ITS, как отметил Маск, можно доставить груз в любую точку Земли максимум за 45 минут. Диаметр пилотируемого корабля, размещаемого в головной части, составит 17 метров, высота — 50 метров. Грузоподъемность — 450 тонн (вместе с топливом). Шесть двигателей работают в космосе, три — в атмосфере. После презентации ITS бизнесмен ответил на вопросы присутствующих в зале.
Из его ответов стало известно, что денег на самостоятельное финансирование проекта ITS у SpaceX нет — компания зарабатывает исключительно на заказах НАСА и коммерческих спутниках. Однако ситуация может поменяться. Если в настоящее время из пяти тысяч сотрудников SpaceX над ITS работают около 50 человек, то с течением времени, когда инвестиции в проект вырастут до 300 миллионов долларов в год, бизнесмен надеется резко увеличить их количество.
На вопрос россиянки Анастасии о привлечении иностранных граждан к проекту Маск ответил так: в программе ITS может участвовать любой желающий. Но для этого, помимо таланта, нужна еще и грин-карта. Для сравнения, в компании Tesla ситуация проще — там четверть сотрудников — иностранцы.
Маск подтвердил свое намерение отправить в 2018 году к Марсу при помощи тяжелой ракеты Falcon Heavy, испытания которой намечены на осень 2016 года, беспилотную миссию на корабле Dragon V2 (расчетной вместимостью до семи человек). После этого он планирует отправлять на Красную планету аппараты каждые 26 месяцев: две миссии в 2020 году, как минимум одну в 2022-м и, вероятно, пилотируемую миссию через два года с высадкой на планету в 2025 году. Пуски планируется осуществлять на разрабатываемой ракете-носителе Falcon Heavy, а старт 2020 или 2022 годов — уже на ракете ITS.
Первый марсианский корабль в SpaceX собираются назвать Heart of Gold. Маск признал: к сожалению, нет никаких гарантий того, что первые колонизаторы смогут вернуться на Землю. Путешествие на Марс он традиционно сравнил с открытием и заселением Америки. От себя добавим, что в Европе такие переселения, как и предшествующее им открытие Америки, многими считались безумием. Станет ли Илон Маск новым Христофором Колумбом или окажется расчетливым бизнесменом с богатой фантазией — покажет время и его дела.
-->
	</body>
</html>