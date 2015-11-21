<?php
require_once 'page1.php';
?>

<link rel="stylesheet" type="text/css" href="css/feedback.css" />

<?php

$image = 'img.jpg';
$heading = "Feedback";
require_once 'page2.php';


$dbc = mysqli_connect ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

$fb_id = $_SESSION ['id'];

if (isset ( $_POST ['submit'] )) {

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$rating=$_POST['rating'];
$text=$_POST['text'];
$to="bakchodi@bakchodi.info";

$msg="From $name \nRating $rating \n$text";
mail($to, $subject, $msg, 'From:' . $email);

$query = "insert into feedback(name,email,rating,comment)values('$name','$email','$rating','$text')";
	$data = mysqli_query ( $dbc, $query );

echo'<center>Your feedback is been sent</center>';

$name="";
$email="";
$subject="";

}

?>
<br/><br/><br/>
<form class="form" method="post" action="feedback.php">

	<p class="name">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" value="<?php if (!empty($name)) echo $name; ?>" />
	</p>

	<p class="email">
		<label for="email">E-mail</label>
		<input type="text" name="email" id="email" value="<?php if (!empty($email)) echo $email; ?>"/>
	</p>

<p class="email">
		<label for="subject">Subject</label>
		<input type="text" name="subject" id="subject" value="<?php if (!empty($subject)) echo $subject; ?>"/>
	</p>
	
	<p class="web">
	<label for="rating">Rating</label>
	<select name="rating">
	<option value="poor">Poor</option>
	<option value="average">Average</option>
	<option value="good">Good</option>
	<option value="excellent">Excellent</option>
	</select>
	</p>

	<p class="text">
		<label for="comment">Comment</label><br/>
		<textarea name="text" value="<?php if (!empty($text)) echo $text; ?>"></textarea>
	</p>

	<p class="submit">
		<input type="submit" value="Send" name="submit" />
	</p>

<p class="submit">
		<input type="reset" value="Reset" name="reset" />
	
</p>
</form>

</body>
</html>