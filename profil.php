<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
	<?php
	include("menu.php");  ?>
	<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/newsmain.css">
	<style>
		.menupicture2
		{
			position: absolute;
			top: 40%;
			left: 13%;	
		}
		.container
		{
			position: absolute;
			background-color: rgba(255, 255, 255, 0.8);
			box-shadow: 0 0 10px rgba(0,0,0,0.5);
			top: 15%;
			left: 20%;
			width: 60%;
			height: 70%;
			
		}
		.containerhead
		{
			position: absolute;
			background-color: rgba(0, 0, 0, 0.8);
			width: 100%;
			height: 10%;
			
		}
		.imgfon
		{
				background: url(profilimages/img1.jpg) no-repeat; /* Путь к файлу с исходным рисунком  */
				background-size: cover; /* Масштабируем фон */
				display: block; /*  Рисунок как блочный элемент */
				width: 100%; /* Ширина рисунка */
				height: 20%; /*  Высота рисунка */
				position: absolute;
				top: 0%;
				left: 0%;
		}
	</style>
    </head>
    <body link="#000000" vlink="#000000" alink="#000000" bgcolor="black">
	<div class = 'menupicture2'><img src = 'images/rocket.png'></div>
	<div class = 'container'>
	<div class = 'imgfon'></div>
	</div>
	</body>
</html>