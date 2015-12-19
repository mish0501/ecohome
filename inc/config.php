<?php
	
	//Info
	$user 	= "root";
	$host	= "localhost";
	$pass	= "";
	$db		= "ecohome";

	//Connect
	$connect = mysql_connect($host,$user,$pass) or die (mysql_error());
	$sdb	 = mysql_select_db($db,$connect) or die (mysql_error());

	mysql_query ("set character_set_client='utf8'"); 
	mysql_query ("set character_set_results='utf8'"); 

	mysql_query ("set collation_connection='utf8_unicode_ci'"); 

	//Site Data
	$mfa = mysql_fetch_assoc(mysql_query("SELECT * FROM sitedata")) or die(mysql_error());
	$keywords = $mfa['keywords'];
	$misho = $mfa['misho'];
	$miglena = $mfa['miglena'];
	$description = $mfa['description'];
?>