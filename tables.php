<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pyrotection</title>
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
  <style>
   <style>
      .stretch-card > .card {
    width: 100%;
    min-width: 100%;
    border-radius: 10px;
}
 
.card .card-body {
    padding: 0.5rem 0.5rem;
}




.content-wrapper {
    background: #000000;
    padding: 0.875rem 0.875rem 0 0.875rem;
    width: 100%;
    color: white;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}
.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #464e55;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.3125rem;
}.navbar {
    font-family: "nunito-medium", sans-serif;
    background: #1c0c0c;
    transition: background 0.25s ease;
    -webkit-transition: background 0.25s ease;
    -moz-transition: background 0.25s ease;
    -ms-transition: background 0.25s ease;
    font-family: "nunito-medium", sans-serif;
}
  </style>
  <body>
    <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center justify-content-between">
         
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php">Pyrotection</a>
          <a class="navbar-brand brand-logo-mini" href="index.php">Pyrotection</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
   
              </div>
            </form>
          </div>
 
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?username123=<?php echo $_GET['username123'];?>">
                <span class="icon-bg"><i class="fa fa-home"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

 

            <li class="nav-item">
              <a class="nav-link" href="tables.php?username123=<?php echo $_GET['username123'];?>">
                <span class="icon-bg"><i class="fa fa-bar-chart"></i></span>
                <span class="menu-title">Analytics</span>
              </a>
            </li>
            
             	<?php
include('dbcon.php');

    


?>
   
            
                <li class="nav-item">
              <a class="nav-link" href="settings.php?username123=<?php echo $_GET['username123'];?>">
                <span class="icon-bg"><i class="fa fa-gear"></i></span>
                <span class="menu-title">Settings</span>
              </a>
            </li>

                            <li class="nav-item">
              <a class="nav-link" href="login.php">
                <span class="icon-bg"><i class="fa fa-sign-out"></i></span>
                <span class="menu-title">Logout</span>
              </a>
            </li>
     
  
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="d-xl-flex justify-content-between align-items-start">
              <h5 class="text-dark font-weight-bold mb-2"> Analytics </h5>
              <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

              </div>
            </div>
            <div class="row">
                
                
                 <div class="col-md-12">
        
       
        
        
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
               <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
           
                    <p class="card-description"> Please provide the following information</p>
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Date Start</label>
                        <input type="date" class="form-control" name="date1" placeholder="ex. Juan dela Cruz">
                      </div>
                
                        <div class="form-group">
                        <label for="exampleInputUsername1">Date End</label>
                        <input type="date" class="form-control" name="date2" placeholder="ex. Juan dela Cruz">
                      </div>
                
            
                  
                      <button type="submit" type="submit" name="signi2222n" class="btn btn-primary me-2">Filter</button>
                   
                    </form>
                  </div>
                </div>
              </div>
           
            </div>
                 
                  </div>
                </div>
              </div>
                
                
                 <?php
$con  = mysqli_connect("localhost","root","","pyrotection");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
     
      $date1=$_POST['date1'];
                                   $date2=$_POST['date2'];
                          
     
         $sql ="SELECT Distinct result FROM data where date(date_added)>='$date1' and date(date_added)<='$date2'";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['result'];
            
            $rem= $row['result'];
              $sql2 ="SELECT * FROM data where result='$rem'";
         $result2 = mysqli_query($con,$sql2);
        
         $row2 = mysqli_num_rows($result2);
            
            
            
            $sales[] = $row2;
        }
 
 
 }
 
 
?>
  <div class="col-xl-12 col-lg-12 col-sm-12">
       <?php
               
               include('dbcon.php');
               ?>
                   <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
        <div style="width:100%;hieght:100%;text-align:center">
            <h5 class="page-header" >Analytics Reports </h5>
            <div>Gas<br>

Temperature<br>
Humidity<br>
 </div>
            <canvas  id="chartjs_bar"></canvas> 
        </div>    
   </div>   </div>   </div>   </div>   
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
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
</html>
              
              
              
                         
              <script>
function printContent(el){
var restorepage = $('body').html();
var printcontent = $('#' + el).clone();
$('body').empty().html(printcontent);
window.print();
$('body').html(restorepage);
}
</script>
  
             
              
              
                
                
              <div class="col-xl-12 col-lg-12 col-sm-12">
                  

<button id="print" class="btn btn-success" onclick="printContent('pr');" >Print/Save PDF</button>
              
              
            
                  
       <?php
               
               include('dbcon.php');
               ?>
                   <div id="pr" class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                    <table class="table ">
                      <thead>
                        <tr>
                          <th>Result <?php echo $_POST['date1'];?> to <?php echo $_POST['date2'];?></th>
                         
                     
                        </tr>
                      </thead>
                      <tbody>
                          
                          
                          <?php
                          
                          $date1=$_POST['date1'];
                                   $date2=$_POST['date2'];
                          	$query21a1=mysqli_query($con,"select * from  data  where date(date_added)>='$date1' and date(date_added)<='$date2' order by id desc ")or die(mysqli_error());
while($row21a1a=mysqli_fetch_array($query21a1)){
                          ?>
                        <tr>
                          <td><font color="white">Result: <?php echo $row21a1a['result'];?> = <?php echo $row21a1a['data'];?><br><br>
                          Date and Time: <?php echo $row21a1a['date_added'];?></font><br>
                          </td>
                            
              
                        </tr>
                                       <?php
}
                          ?>

                      </tbody>
                    </table></div>
                  </div>
                </div>
              </div>
                
                
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