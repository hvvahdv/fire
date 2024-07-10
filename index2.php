
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
         
            <div class="row">
              <div class="col-md-12">
        


<?php
$con  = mysqli_connect("localhost","watch0011","watch0011","watch0011");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
     
     $ii=$_GET['id'];
         $sql ="SELECT * FROM data where code='$ii' and type='OXYGEN'";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname=$row['rate'];
            $month[]  = $row['rate'];
            $sales[] = $row['rate'];
        }
 
       $sqls ="SELECT * FROM data where code='$ii' and type='SPo2'";
         $results = mysqli_query($con,$sqls);
         $chart_datas="";
         while ($rows = mysqli_fetch_array($results)) { 
 
            $productnames=$rows['rate'];
            $months[]  = $rows['rate'];
            $saless[] = $rows['rate'];
        }
 
          $sql2 ="SELECT * FROM data where code='$ii' and type='AIRFLOW'";
         $result2 = mysqli_query($con,$sql2);
         $chart_data2="";
         while ($row2 = mysqli_fetch_array($result2)) { 
 
            $productname2=$row2['rate'];
            $month2[]  = $row2['rate'];
            $sales2[] = $row2['rate'];
        }
 
 
        $sql23 ="SELECT * FROM data where code='$ii' and type='SNOORING'";
         $result23 = mysqli_query($con,$sql23);
         $chart_data23="";
         while ($row23 = mysqli_fetch_array($result23)) { 
 
            $productname23=$row23['rate'];
            $month23[]  = $row23['rate'];
            $sales23[] = $row23['rate'];
        }
 
 
 }
      $ii=$_GET['id'];
    $sqlsss ="SELECT * FROM data_holder where id='$ii' and status='Pending'";
         $resultsss = mysqli_query($con,$sqlsss);
 
   $rowsss = mysqli_num_rows($resultsss);
 
 
 
?>




<?php

if($rowsss>=1){



?>

 <meta http-equiv="refresh" content="2">
<?php

}

?>
        <div style="width:100%;hieght:100%;text-align:center">
            <h2 class="page-header" >OXYGEN LEVEL</h2>
            <div><?php echo $productname; ?>bpm </div>
            <canvas  id="chartjs_line"></canvas> 
            
            <center><a class="btn btn-success btn-sm" href="history.php?id=<?php echo $_GET['id'];?>&type=OXYGEN">HISTORY</a></center>
        </div>    
  
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
      var ctx = document.getElementById("chartjs_line").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF"
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                
                
                
                
                
                
                
                
    </script>
    
    
    
        <div style="width:100%;hieght:100%;text-align:center">
            <h2 class="page-header" >SP02 LEVEL</h2>
            <div><?php echo $productnames; ?>% </div>
            <canvas  id="chartjs_lines"></canvas> 
            
            <center><a class="btn btn-success btn-sm" href="history.php?id=<?php echo $_GET['id'];?>&type=SPo2">HISTORY</a></center>
        </div>    
  
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
      var ctx = document.getElementById("chartjs_lines").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($months); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF"
                            ],
                            data:<?php echo json_encode($saless); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                
                
                
                
                
                
                
                
    </script>
    
    
    
    
    
        <div style="width:100%;hieght:100%;text-align:center">
            <h2 class="page-header" >AIRFLOW LEVEL</h2>
            <div><?php echo $productname2; ?> </div>
            <canvas  id="chartjs_line2"></canvas> 
              
            <center><a class="btn btn-success btn-sm" href="history.php?id=<?php echo $_GET['id'];?>&type=AIRFLOW">HISTORY</a></center>
        </div>    
  
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
      var ctx = document.getElementById("chartjs_line2").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month2); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF"
                            ],
                            data:<?php echo json_encode($sales2); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                
                
                
                
                
                
                
                
    </script>
    
    
    
    
    
    
    
    
    
        <div style="width:100%;hieght:100%;text-align:center">
            <h2 class="page-header" >SNORING LEVEL</h2>
            <div><?php echo $productname23; ?>dbm </div>
            <canvas  id="chartjs_line23"></canvas> 
            
            
                     <center><a class="btn btn-success btn-sm" href="history.php?id=<?php echo $_GET['id'];?>&type=SNOORING">HISTORY</a></center>
        </div>    
  
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
      var ctx = document.getElementById("chartjs_line23").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($month23); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF",
                                "#FFFFFF"
                            ],
                            data:<?php echo json_encode($sales23); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
                
                
                
                
                
                
                
                
    </script>
    
    
    
    
    
    
    
    
    
</html>
         
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">

          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>


