</head> 
<body bgcolor="#384D68" text="white" background="images/<?php echo $image ?>">
<div class="container">
  <a href="<?=$logoutUrl?>">
  <div class="fb-icon-bg"></div>
    <div class="fb-bg"></div>
    </a>
  </div>
  <?php 

$dbc=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$username=$_SESSION['username'];

$query="select * from user_db where username='$username'";

$data=mysqli_query($dbc, $query);

$row=mysqli_fetch_array($data);

?>
  <img src="https://graph.facebook.com/<?php echo($row['id']); ?>/picture"  class="image1"/>
  <p>Hello <?php echo $row['name'];?></p>
  
<h1 align="center">LET'S FIND OUT WHO'S HOT</h1>

<hr/>
<nav>
            <ul>
                
				<li><a href="view.php">Home</a></li>
				<li><a href="shuffle.php">War</a></li>
<li><a href="top5.php">Top 5</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="result.php">Result</a></li>
                <li><a href="developers.php">Developers</a></li>
 <li><a href="feedback.php">Feedback</a></li>
                
            </ul>
        </nav>
   
<hr/>
<ul id="filter">
    <li align="center">
	<?php echo $heading?>
	</li>
	</ul>
<hr/>