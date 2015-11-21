<html>
<head>
<title></title>
</head>
<body>

<?php
	require_once('connectvars.php');
	$path='images/';
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$picture = $_FILES['picture']['name'];
		$picture_type = $_FILES['picture']['type'];
		$picture_size = $_FILES['picture']['size']; 
	
		$dbc=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
		if(!empty($name)&&!empty($picture)){
		
			if((($picture_type == 'image/gif') || ($picture_type == 'image/jpeg') || ($picture_type == 'image/pjpeg') || ($picture_type == 'image/png'))
			&& ($picture_size > 0)){
		
			$target = $path . $picture;
			if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
		  
			$query="insert into girls_db(name,picture) values('$name','$picture')";
		
			 mysqli_query($dbc, $query);
			
			echo '<p>Added</p>';
			
			$name = "";
            $picture = "";

            mysqli_close($dbc);
				}
				else {
            echo '<p>Sorry, there was a problem uploading your screen shot image.</p>';
          }
			}
			else {
        echo '<p>The screen shot must be a GIF, JPEG, or PNG image file no greater than 32 KB in size.</p>';
      }
		}
		else {
      echo '<p>Please enter all of the information to add your high score.</p>';
    }
	}	
?>

<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Name:</label>
<input type="text" name="name" value="<?php if (!empty($name)) echo $name; ?>"/><br/>
<label>Picture:</label>
<input type="file" name="picture"/><br/>
<input type="submit" name="submit"/>
</form>
</body>
</html>