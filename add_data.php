<?php
include('dbcon.php');
$temp=$_POST['temperature'];
$humi=$_POST['humidity'];

$date=date("Y-m-d H:i");
mysqli_query($con,"INSERT INTO data(remarks,result,date_added,data) VALUES('Temperature','Temperature','$date','$temp')")or die(mysqli_error($con));
mysqli_query($con,"INSERT INTO data(remarks,result,date_added,data) VALUES('Humidity','Humidity','$date','$humi')")or die(mysqli_error($con));



$waterlevel=$_POST['waterlevel'];

mysqli_query($con,"INSERT INTO data(remarks,result,date_added,data) VALUES('Water Level','Water Level','$date','$waterlevel')")or die(mysqli_error($con));


		
		echo "Success";  	  

		  ?>
                          