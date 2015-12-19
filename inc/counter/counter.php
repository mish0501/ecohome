<?php

// Hit counter function.
// Your probably want to remove lines that report errors. If not your website could stop working if, for example, your database is down.

function addinfo($page)

{  

	//Info
	$user 	= "kvadrat_kv";
	$host	= "localhost";
	$pass	= "200219922";
	$db		= "kvadrat_ecohome";

	//Connect
	$connect = mysql_connect($host,$user,$pass) or die (mysql_error());
	$sdb	 = mysql_select_db($db,$connect) or die (mysql_error());

	mysql_query ("set character_set_client='utf8'"); 
	mysql_query ("set character_set_results='utf8'"); 

	mysql_query ("set collation_connection='utf8_unicode_ci'"); 
	
// ########################################################
// ######### check if counter exsist and update ###########
// ########################################################

	if(mysql_num_rows(mysql_query("SELECT page FROM hits WHERE page = '$page'")))
	{
	//A counter for this page  already exsists. Now we have to update it.

		$updatecounter = mysql_query("UPDATE hits SET count = count+1 WHERE page = '$page'");
		if (!$updatecounter) 
		{
		die ("Can't update the counter : " . mysql_error()); // remove ?
		}
	
	} 
	else
	{
	// This page did not exsist in the counter database. A new counter must be created for this page.

		$insert = mysql_query("INSERT INTO hits (page, count) VALUES ('$page', '1')");
	
		if (!$insert) 
		{
    		die ("Can\'t insert into hits : " . mysql_error()); // remove ?
		}
	}
	
// ####################################################
// ######### add IP and user-agent and time ###########
// ####################################################


// gather user data
$ip= $_SERVER["REMOTE_ADDR"]; 
$agent =$_SERVER["HTTP_USER_AGENT"];
$datetime =date("Y/m/d") . ' ' . date('H:i:s') ;


if(!mysql_num_rows(mysql_query("SELECT ip_address FROM info WHERE ip_address = '$ip'"))) // check if the IP is in database
{
	// if not , add it.	
	$adddata = mysql_query("INSERT INTO info (ip_address, user_agent, datetime) VALUES('$ip' , '$agent','$datetime' ) ") ;
	if (!$adddata) 
	{
	    die('Could not add IP : ' . mysql_error()); // remove ?
	}
}

// ***************************************************************
// ** delete the first entry in info if rows > 50 **
// ***************************************************************

$result = mysql_query("SELECT * FROM info");
$num_rows = mysql_num_rows($result);
$to_delete = $num_rows- 50;
if($to_delete > 0)
{
	for ($i = 1; $i <= $to_delete; $i++) 
	{

		$delete = mysql_query("DELETE FROM info ORDER BY id LIMIT 1") ;
		if (!$delete) 
		{
		    die('Could not delete : ' . mysql_error()); // remove ?
		}
	}
}	

} 

?>
