<?php
require_once 'page1.php';
?>

<link rel="stylesheet" type="text/css" href="css/shuffle.css" />

<?php

$image = 'img.jpg';
$heading = "WAR BEGINS";
require_once 'page2.php';

$dbc = mysqli_connect ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

$fb_id = $_SESSION ['id'];

if (isset ( $_POST ['submit'] )) {
	$id = $_POST ['id1'];
	$id1 = $_POST ['id2'];
	
	$query = "update girls_db set votes=votes+1 where id='$id'";
	$data = mysqli_query ( $dbc, $query );
	
	$query = "update user_db set count=count+1 where id='$fb_id'";
	$data = mysqli_query ( $dbc, $query );
	
	$query = "insert into votes(fb_id,pic1,pic2) values('$fb_id','$id',$id1)";
	$data = mysqli_query ( $dbc, $query );
	// update to and from and count
}

if (isset ( $_POST ['submit1'] )) {
	$id = $_POST ['id2'];
	$id1 = $_POST ['id1'];
	
	$query = "update girls_db set votes=votes+1 where id='$id'";
	$data = mysqli_query ( $dbc, $query );
	
	$query = "update user_db set count=count+1 where id='$fb_id'";
	$data = mysqli_query ( $dbc, $query );
	
	$query = "insert into votes(fb_id,pic1,pic2) values('$fb_id','$id1',$id)";
	$data = mysqli_query ( $dbc, $query );
	// update to and from and count
}

$query = "select count from user_db where id='$fb_id'";
$data = mysqli_query ( $dbc, $query );
$row = mysqli_fetch_array ( $data );
//ini_set('max_execution_time', 300);
if ($row ['count'] != 253) {
	
	begin:
	
// 	$query="select id from girls_db order by rand() limit 0,2";
// 	$data = mysqli_query ( $dbc, $query );
// 	$row = mysqli_fetch_array ( $data );
// 	$no1=$row['id'];
// 	$row = mysqli_fetch_array ( $data );
// 	$no2=$row['id'];
	
	$no1 = rand ( 1, 23);
	$no2 = rand ( 1, 23 );
	
// 	print "<script type=\"text/javascript\">";
// 	print "$no1  $no2 ";
// 	print "</script>";
	
	//$query = "select pic1,pic2 from votes where fb_id='$fb_id'";
	//$data = mysqli_query ( $dbc, $query );
	$query="select * from votes where fb_id='$fb_id' and pic1='$no1' and pic2='$no2'";
	$data=mysqli_query($dbc, $query);
	$query1="select * from votes where fb_id='$fb_id' and pic1='$no2' and pic2='$no1'";
	$data1=mysqli_query($dbc, $query1);
	while($no1==$no2 || mysqli_num_rows($data)!=0 ||mysqli_num_rows($data1)!=0)
	{
	//while ( $row = mysqli_fetch_array ( $data ) ) {
		//$pic1 = $row ['pic1'];
		//$pic2 = $row ['pic2'];
		
// 		print "<script type=\"text/javascript\">";
// 		print "alert('$no1  $no2 $pic1 $pic2')";
// 		print "</script>";
		
		//if($no1 == $no2 || ($no1 == $pic1 && $no2 == $pic2) || ($no1 == $pic2 && $no2 == $pic1)) {
		//	goto begin;
 			$no1 = rand ( 1, 23 );
 			$no2 = rand ( 1, 23 );
 			$query="select * from votes where fb_id='$fb_id' and pic1='$no1' and pic2='$no2'";
 			$data=mysqli_query($dbc, $query);
 			$query1="select * from votes where fb_id='$fb_id' and pic1='$no2' and pic2='$no1'";
 			$data1=mysqli_query($dbc, $query1);
		
	}
	
	//}
	// modify query and add count

$initial=253;
$query="select count from user_db where id='$fb_id'";

$data = mysqli_query ( $dbc, $query );
$row = mysqli_fetch_array ( $data );

$count=$row['count'];

$final_count=$initial-$count;

echo"<center><h2>You are $final_count clicks away..</h2></center>";

	$query = "select * from girls_db where id='$no1'";
	$query1 = "select * from girls_db where id='$no2'";
	
	$data = mysqli_query ( $dbc, $query );
	$data1 = mysqli_query ( $dbc, $query1 );
	
	$row = mysqli_fetch_array ( $data );
	$row1 = mysqli_fetch_array ( $data1 );
	
	echo '<form method="post" action="shuffle.php">';
	
	echo '<img src="images/' . $row ['picture'] . '" alt="' . $row ['name'] . '" class="pos1" />';
	
	echo '<img src="images/' . $row1 ['picture'] . '" alt="' . $row1 ['name'] . '" class="pos2"/><br/>';
	echo '<img src="images/vs.gif" class="logo">';
	
	echo '<div class="container1">';
	
	echo '<input type="submit" name="submit" value="' . $row ['name'] . '" class="button1">';
	
	echo '</div>';
	echo '<div class="container2">';
	
	echo '<input type="submit" name="submit1" value="' . $row1 ['name'] . '" class="button2">';
	
	echo '</div>';
	echo '<input type="hidden" name="id1" value="' . $row ['id'] . '">';
	echo '<input type="hidden" name="id2" value="' . $row1 ['id'] . '">';
	echo '</form>';

} 
else {

echo"<center><h2>Thank you!!<br/>You are done with your voting</h2></center> ";

}

mysqli_close ( $dbc );
?>


</body>
</html>