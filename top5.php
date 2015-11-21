<?php 
	require_once 'page1.php';
?>

<script>
$('ul#filter a').click(function(){
  
  // Remove class
  $('ul#filter .current').removeClass('current');
  
  // Add parent class
  $(this).parent().addClass('current');
  
  // find same class of menu
  var filterVal = $(this).text().toLowerCase().replace(' ','-');
  
  if(filterVal == 'all') {
    // If click all execute this
    $('ul#portfolio li').animate({
      opacity: 1,
      rotateY:'360deg'
    },1000,'ease-in');
    
  }else{
    // Each all and filter values
    $('ul#portfolio li').each(function() {
      // Hide 
      if(!$(this).hasClass(filterVal)) {
        $(this).animate({
          opacity: 0.1,
           rotateY:'0deg'
        },1000,'ease-out');
       // Show
      }else{
        $(this).animate({
          opacity: 1,
           rotateY:'360deg'
        },1000,'ease-in');
      }
    });
  }
  return false;
});

</script>

<link rel="stylesheet" type="text/css" href="css/view.css" />

<?php

$image='chokoladies.jpg';
$heading="Top 5";
require_once 'page2.php';

$dbc=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query="select * from girls_db order by votes desc limit 5";
$data=mysqli_query($dbc,$query);
echo'<ul id="portfolio">';
while($row=mysqli_fetch_array($data))
{
	echo'<li class="cms design portfolio-item">';
	echo'<img src="images/'.$row['picture'].'" alt="'.$row['name'].'"  class="superbox-img"/>';
	echo'<h2>'.$row['name'].'';
	echo'</li>';
}
echo'</ul>';
mysqli_close($dbc);
?>
<div class="container1">
<span>✓</span>

</div>
</body>
</html>