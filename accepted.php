<?php
include('dbcon.php');


$title=$_POST['title'];

$date=date("Y-m-d H:i");




		  mysqli_query($con,"INSERT INTO data(remarks,date_added) VALUES('Accepted','$date')")or die(mysqli_error($con));
		  
		  
		  

		  
		
?>
