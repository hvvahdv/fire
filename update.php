<?php
include 'dbcon.php';
	$prod_id = $_GET['id'];
	
			

	mysqli_query($con,"update data_holder set status='Completed' where id='$prod_id'")or die(mysqli_error());
	


	echo "<script>window.location='tables.php'</script>";  
	?>
	
