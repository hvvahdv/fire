                   	<?php
include('dbcon.php');
$BPM=$_POST['air'];
$SpO2=$_POST['SpO2'];

$date=date("Y-m-d H:i");
$query21a1=mysqli_query($con,"select * from  data_holder where status='Pending' ")or die(mysqli_error());
$row21a1a=mysqli_fetch_array($query21a1);

$code=$row21a1a['id'];
if($code>=1){
		  mysqli_query($con,"INSERT INTO data(code,rate,date_added,type) VALUES('$code','$BPM','$date','AIRFLOW')")or die(mysqli_error($con));
		  
	
		  	  
}
		  ?>
                          