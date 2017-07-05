<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
	<?php
	include "config.php" ?>
    </head>
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<style type="text/css">
		body
		{
			background: url(images/background.jpg);
		}
		.main
		{
			position: absolute;
			top: 5%;
			left: 5%;
		}
		.starmap
		{
			position: absolute;
			top: 10%;
			left: 23%;	
		}
		.starmap:hover
		{
			position: absolute;
			top: 10%;
			left: 23%;	
			box-shadow: 0 0 50px rgba(0,0,0,0.5);
		}
		.line1
		{
			position: absolute;
			top: 4%;
			left: 8%;
		}
	</style>

    <body>
		<div class = 'line1'>
		<svg>  
		<line x1="0" y1="50" x2="250" y2="90" stroke-width="2" stroke="rgb(255,255,255)"/>  
		</svg></div>
		<div class = 'main'><img src = 'images/starmenu.png' width = '80px' height = '80px'><Br><center><font color = '#FFFFFF'>Главная</font></center></div>
		<div class = 'starmap'><img src = 'images/starmap.png' width = '80px' height = '80px'><Br><center><font color = '#FFFFFF'>Карта</font></center></div>
	</body>
</html>