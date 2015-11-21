<html>
<head>
<title>Welcome to Who's Hot</title>
<?php 
	require_once 'startsession.php';
	require_once 'connectvars.php';
	
	if (!isset($_SESSION['id'])) {
		echo '<p>Please <a href="index.php">log in</a> to access this page.</p>';
		exit();
	}
	$logoutUrl=$_SESSION['logout'];
?>
