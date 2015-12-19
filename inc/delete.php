<?php
	require("config.php");

	$id = $_GET['id'];

	mysql_query("DELETE FROM recepts WHERE id='$id'")or die(mysql_error());

	header("Location: ../admin/edit.php")

?>