<?php
include 'dbcon.php';
	$prod_id = $_GET['id'];
	
			
$result=mysqli_query($con,"DELETE FROM chamber where id='$prod_id' ")
	or die(mysqli_error());

	


	echo "<script>window.location='index.php?username123=$prod_id'</script>";  
	?>
	
