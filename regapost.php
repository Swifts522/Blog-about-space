<?php
	include "config.php";
	$query = "SELECT * FROM accounts WHERE Email = '".$_POST["mail"]."'";
	$res = mysql_query($query);
	if(mysql_num_rows($res) > 0) echo "1";
	else
	{
		$query = "SELECT * FROM accounts WHERE Nick = '".$_POST["login"]."'";
		$res = mysql_query($query);
		if(mysql_num_rows($res) > 0) echo "2";
		else
		{
			$query = "INSERT INTO accounts (Email, Nick, Password, DataReg) VALUES('".$_POST["mail"]."', '".$_POST["login"]."', '".$_POST["password"]."', '".date ('Y-m-d')."')";
			$res = mysql_query($query);
		}
	}
?>