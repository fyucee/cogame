<?php
	$hostname="ap-cdbr-azure-southeast-a.cloudapp.net";
	$username="b706c4dc75e4b0";
	$password="f78b3b9f";
	$database="cogamedb";

	$connect=mysql_connect($hostname,$username,$password) or die(mysql_error());

	$db=mysql_select_db($database) or die(mysql_error());
?>