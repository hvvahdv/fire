<?php
include('dbcon.php');
$temp=$_POST['temp'];
$humi=$_POST['humi'];

$date=date("Y-m-d H:i");

$temp1=$_POST['gas'];
$device=$_POST['device'];

mysqli_query($con,"INSERT INTO data(remarks,result,date_added,data,device) VALUES('Temperature','Temperature','$date','$temp','$device')")or die(mysqli_error($con));

mysqli_query($con,"INSERT INTO data(remarks,result,date_added,data,device) VALUES('Humidity','Humidity','$date','$humi','$device')")or die(mysqli_error($con));

mysqli_query($con,"INSERT INTO data(remarks,result,date_added,data,device) VALUES('Gas','Gas','$date','$temp1','$device')")or die(mysqli_error($con));


		
		echo "Success";  	  

		  ?>
                          