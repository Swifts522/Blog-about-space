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
	</style>
    </head>
    <body link="#000000" vlink="#000000" alink="#000000" bgcolor="black">
	<div class = 'menupicture2'><img src = 'images/rocket.png'></div>
	<Br><Br><Br><Br><Br>
		<?php
		if (!empty($_GET["lastid"])) $query = "SELECT * FROM news WHERE ID > '".$_GET["lastid"]."' LIMIT 5";
		else if (!empty($_GET["firstid"])) 
		{
			$query = "SELECT * FROM news WHERE ID < '".$_GET["firstid"]."' ORDER BY ID DESC LIMIT 4";
			$res=mysql_query($query);
			while($row = mysql_fetch_assoc($res)) $ID = $row['ID'];
			mysql_free_result( $res );
			$query = "SELECT * FROM news WHERE ID >= '".$ID."' AND ID < '".$_GET["firstid"]."'";
		}	
		else $query = "SELECT * FROM news LIMIT 5";
		$res=mysql_query($query);
		$lastid = 0;
		if($row = mysql_fetch_assoc($res))
		{
			echo "<style>
			.newsimg1 {
				background: url(newsimages/".$row['Picture'].") no-repeat; /* Путь к файлу с исходным рисунком  */
				background-size: cover; /* Масштабируем фон */
				display: block; /*  Рисунок как блочный элемент */
				width: 30%; /* Ширина рисунка */
				height: 100%; /*  Высота рисунка */
				position: absolute;
				top: 0%;
				left: 0%;
			}
			</style>";
			echo "<a href = '#'><div class = 'formnews'><div class = 'newsimg1'></div><form>".$row['Title']."</form><div class = 'newsfonimg1'></div></div></a><Br>";
			if (!empty($_GET["page"]))
			{
				$page = $_GET["page"];
				echo "<a href = 'index.php?firstid=".$row['ID']."&page=".--$page."'><div class = 'arrow-right'></div></a>";
			}	
		}
		if($row = mysql_fetch_assoc($res))
		{
			echo "<style>
			.newsimg2 {
				background: url(newsimages/".$row['Picture'].") no-repeat; /* Путь к файлу с исходным рисунком  */
				background-size: cover; /* Масштабируем фон */
				display: block; /*  Рисунок как блочный элемент */
				width: 30%; /* Ширина рисунка */
				height: 100%; /*  Высота рисунка */
				position: absolute;
				top: 0%;
				left: 0%;
			}
			</style>";
			echo "<a href = '#'><div class = 'formnews'><div class = 'newsimg2'></div><form>".$row['Title']."</form><div class = 'newsfonimg1'></div></div></a><Br>";
		}
		if($row = mysql_fetch_assoc($res))
		{
			echo "<style>
			.newsimg3 {
				background: url(newsimages/".$row['Picture'].") no-repeat; /* Путь к файлу с исходным рисунком  */
				background-size: cover; /* Масштабируем фон */
				display: block; /*  Рисунок как блочный элемент */
				width: 30%; /* Ширина рисунка */
				height: 100%; /*  Высота рисунка */
				position: absolute;
				top: 0%;
				left: 0%;
			}
			</style>";
			echo "<a href = '#'><div class = 'formnews'><div class = 'newsimg3'></div><form>".$row['Title']."</form><div class = 'newsfonimg1'></div></div></a><Br>";
		}
		if($row = mysql_fetch_assoc($res))
		{
			echo "<style>
			.newsimg4 {
				background: url(newsimages/".$row['Picture'].") no-repeat; /* Путь к файлу с исходным рисунком  */
				background-size: cover; /* Масштабируем фон */
				display: block; /*  Рисунок как блочный элемент */
				width: 30%; /* Ширина рисунка */
				height: 100%; /*  Высота рисунка */
				position: absolute;
				top: 0%;
				left: 0%;
			}
			</style>";
			echo "<a href = '#'><div class = 'formnews'><div class = 'newsimg4'></div><form>".$row['Title']."</form><div class = 'newsfonimg1'></div></div></a><Br>";
			$lastid = $row['ID'];
		}
		mysql_free_result( $res );
		$query = "SELECT * FROM news WHERE ID > '".$lastid."' LIMIT 1";
		$res=mysql_query($query);
		if(mysql_num_rows($res) > 0)
		{
			if (!empty($_GET["page"])) $page = $_GET["page"];
			else $page = 0;	
			echo "<a href = 'index.php?lastid=".$lastid."&page=".++$page."'><div class = 'arrow-left'></div></a>";
		}
		?>
	</body>
</html>