<?php
include 'dbcon.php';
	$prod_id = $_GET['username123'];
	
			
$result=mysqli_query($con,"DELETE FROM data ")
	or die(mysqli_error());

	


	echo "<script>window.location='settings.php?username123=$prod_id'</script>";  
	?>
	
