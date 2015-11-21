<?php
include_once "fbaccess.php";
require_once('connectvars.php');
//session_start();
?>

<html>
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Welcome to Who's Hot</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="skeleton.css">
    <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>

	

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>

<?php if(!$user) { ?>

<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">
			Welcome to WHO'S HOT<br/>
						We are a generation of men raised by women,is another women really  the answer to our problems..
			</p>
			</h1>
					<hr />
		</div>
		
		<div class="one-third column">
			
			<p><input type="button" value="Terms and Condition" class="sun-flower-button" onclick="window.location.href='terms.php'">
</p>
		</div>
	</div><!-- container -->
	<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">
	By signing up with facebook,we assume that you agree with our terms and conditions
(NOTE: DON'T WORRY THIS LOG IN & THE ACTIVITIES YOU DO WON'T BE SHOWN ON YOUR FB TIMELINE)
	</h1>
	<hr/>
	</div>
<div class="container1" align="center">
<a href="<?=$loginUrl?>">
  <div class="fb-icon-bg"></div>
    <div class="fb-bg"></div>
    </a>
  </div>

<?php } else { 
	
	$dbc=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	if(!isset($_SERVER['id']) &&!isset($_SERVER['username']))
	{
		$id=$user_info['id'];
		$name=$user_info['name'];
		$first_name=$user_info['first_name'];
		$last_name=$user_info['last_name'];
		$username=$user_info['username'];
		$gender=$user_info['gender'];

		$query="select * from user_db where username='$username'";
	
		$data=mysqli_query($dbc, $query);
	
		if (mysqli_num_rows($data)==0) {
			$query="insert into user_db(id,name,first_name,last_name,username,gender) values('$id','$name','$first_name','$last_name','$username','$gender')";
			$data=mysqli_query($dbc, $query);
		}
		
		mysqli_close($dbc);
		$_SESSION['id']=$id;
		$_SESSION['username']=$username;
		$_SESSION['logout']=$logoutUrl;
		setcookie('id',$id,time()+(60*60*24*30));
		setcookie('username',$username,time()+(60*60*24*30));
		header("Location:http://bakchodi.info/view.php");
		exit();
	}
}
?>


</html>