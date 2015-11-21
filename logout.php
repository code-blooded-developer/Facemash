<?php

include_once "fbaccess.php";

session_start();

if(isset($_SESSION['id'])){
	$_SESSION=array();

	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),'',time()-3600);
	}

	session_destroy();
}

setcookie('id', '', time() - 3600);
setcookie('username', '', time() - 3600);

setcookie('fbs_'.$facebook->getAppId(), '', time()-100, '/', 'localhost');
session_destroy();
header("Location: http://bakchodi.info/index.php");
?>