<?php
include('dbcon.php');

// Query the maintenance table
$queryMaintenance = mysqli_query($con, "SELECT * FROM maintenance") or die(mysqli_error($con));
$rowMaintenance = mysqli_fetch_array($queryMaintenance);

// Query the data table for Gas
$queryGas = mysqli_query($con, "SELECT * FROM data WHERE result='Gas' ORDER BY id DESC LIMIT 1") or die(mysqli_error($con));
$rowGas = mysqli_fetch_array($queryGas);
$gas = $rowGas['data'];

// Query the data table for Temperature
$queryTemperature = mysqli_query($con, "SELECT * FROM data WHERE result='Temperature' ORDER BY id DESC LIMIT 1") or die(mysqli_error($con));
$rowTemperature = mysqli_fetch_array($queryTemperature);
$temp = $rowTemperature['data'];

// Query the data table for Humidity
$queryHumidity = mysqli_query($con, "SELECT * FROM data WHERE result='Humidity' ORDER BY id DESC LIMIT 1") or die(mysqli_error($con));
$rowHumidity = mysqli_fetch_array($queryHumidity);
$humi = $rowHumidity['data'];

if ($rowMaintenance['alarm_stop'] == "0") {
    // Alarm is stopped
    echo "0";  
} else { 
    // Alarm is enabled, check conditions
    if ($temp >= $rowMaintenance['temp'] || $humi < $rowMaintenance['humi'] || $gas >= $rowMaintenance['gas']) {
        // Conditions met, trigger the alarm
        echo "1"; 
    } else {
        // Conditions not met, do not trigger the alarm
        echo "0";
    }
}
?>
