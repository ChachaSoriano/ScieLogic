<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "mysql.hostinger.ph";
	$user = "u173427863_cha";
	$password = "Aa1234567";
	$db = "u173427863_cha";
	
	$con = mysql_connect($host,$user,$password) or die(mysql_error());
	mysql_select_db($db);
?>