<?php
	ob_start();
	session_start();
	if(isset($_COOKIE["adminname"])){
		setcookie('adminname',$admin_name,time()-60*60*24*365);
		header("Location: {$_SERVER['HTTP_REFERER']}");
	}elseif(isset($_SESSION["adminname"])){
		session_destroy();
		header("Location: {$_SERVER['HTTP_REFERER']}");
	}else{
		header("Location: {$_SERVER['HTTP_REFERER']}");
		exit;
	}
?>