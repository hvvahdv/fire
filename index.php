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
        <!-- partial -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script> 
$(document).ready(function(){
setInterval(function(){
      $("#here").load(window.location.href + " #here" );
}, 3000);
});
</script>



        <div  class="main-panel">
          <div id="here" class="content-wrapper">
            <div class="d-xl-flex justify-content-between align-items-start">
              <h4 class="text-font-weight-bold mb-2"> Dashboard </h4>
              <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-sm-12">
   
        
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                        
                        
                           <div class="col-xl-12 col-lg-12 col-sm-12 grid-margin stretch-card col-12">
                          <h4 class="text-font-weight-bold mb-2"> Device 1 </h4>
                           </div>
                        
  

             <?php
        
        include('dbcon.php');
        
            	$query21a12=mysqli_query($con,"select * from  data where result='Temperature' and device='1' ORDER BY id desc ")or die(mysqli_error());
$row21a1a2=mysqli_fetch_array($query21a12);

?> 

                                
        <div class="col-xl-4 col-lg-4 col-sm-4 grid-margin stretch-card col-4">
                        <div class="card">
                       <a style="text-decoration:none" href="rep.php??username123=<?php echo $_GET['username123'];?>&type=Temperature&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal"><font size="1px" color="white">TEMPERATURE </font></h5>
             
  <img width="30px" src="humi21.fw.png">
                            <p class="mt-4 mb-0">Result</p>
                             <meter id="disk_d" value="<?php echo $row21a1a2['data']/100;?>">60%</meter>
                          <h3 class="mb-0 font-weight-bold mt-2 text-white"><?php echo $row21a1a2['data'];?> </h3>
                          </div></a>
                        </div>
                      </div>
                      
                            <?php
        
        include('dbcon.php');
        
            	$query21a12=mysqli_query($con,"select * from  data where result='Humidity'  and device='1' ORDER BY id desc ")or die(mysqli_error());
$row21a1a2=mysqli_fetch_array($query21a12);

?>       
                      
                      
                   <div class="col-xl-4 col-lg-4 col-sm-4 grid-margin stretch-card col-4">
                        <div class="card">
                            <a style="text-decoration:none" href="rep.php?username123=<?php echo $_GET['username123'];?>&type=Humidity&device=<?php echo $row21a1a2['device'];?>">   <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal"><font size="1px" color="white">HUMIDITY </font></h5>
             
  <img width="30px" src="humi21.fw.png">
                            <p class="mt-4 mb-0">Result</p>
                             <meter id="disk_d" value="<?php echo $row21a1a2['data']/100;?>">60%</meter>
                          <h3 class="mb-0 font-weight-bold mt-2 text-white"><?php echo $row21a1a2['data'];?></h3>
                          </div></a>
                        </div>
                      </div>
                      
                            <?php
        
        include('dbcon.php');
        
            	$query21a12=mysqli_query($con,"select * from  data where result='Gas'  and device='1' ORDER BY id desc ")or die(mysqli_error());
$row21a1a2=mysqli_fetch_array($query21a12);

?>     
        
        
 

                                   
      <div class="col-xl-4 col-lg-4 col-sm-4 grid-margin stretch-card col-4">
                        <div class="card">
                          <a style="text-decoration:none" href="rep.php?type=Gas&username123=<?php echo $_GET['username123'];?>&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal"><font size="1px" color="white">GAS</font> </h5>
             
                           <img width="30px" src="water2.png">
                            <p class="mt-4 mb-0">Result</p>
                             <meter id="disk_d" value="<?php echo $row21a1a2['data']/100;?>">60%</meter>
                              <h3 class="mb-0 font-weight-bold mt-2 text-white"><?php echo $row21a1a2['data'];?></h3>
                          </div></a>
                        </div>
                      </div>
                      
                      
                      
                      
                                <div class="col-xl-12 col-lg-12 col-sm-12 grid-margin stretch-card col-12">
                          <h4 class="text-font-weight-bold mb-2"> Device 2 </h4>
                           </div>
                        
                      
                      
             <?php
        
        include('dbcon.php');
        
            	$query21a12=mysqli_query($con,"select * from  data where result='Temperature' and device='2' ORDER BY id desc ")or die(mysqli_error());
$row21a1a2=mysqli_fetch_array($query21a12);

?> 

                                
        <div class="col-xl-4 col-lg-4 col-sm-4 grid-margin stretch-card col-4">
                        <div class="card">
                       <a style="text-decoration:none" href="rep.php?type=username123=<?php echo $_GET['username123'];?>&Temperature&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal"><font size="1px" color="white">TEMPERATURE </font></h5>
             
  <img width="30px" src="humi21.fw.png">
                            <p class="mt-4 mb-0">Result</p>
                             <meter id="disk_d" value="<?php echo $row21a1a2['data']/100;?>">60%</meter>
                          <h3 class="mb-0 font-weight-bold mt-2 text-white"><?php echo $row21a1a2['data'];?> </h3>
                          </div></a>
                        </div>
                      </div>
                      
                            <?php
        
        include('dbcon.php');
        
            	$query21a12=mysqli_query($con,"select * from  data where result='Humidity'  and device='2' ORDER BY id desc ")or die(mysqli_error());
$row21a1a2=mysqli_fetch_array($query21a12);

?>       
                      
                      
                   <div class="col-xl-4 col-lg-4 col-sm-4 grid-margin stretch-card col-4">
                        <div class="card">
                            <a style="text-decoration:none" href="rep.php?username123=<?php echo $_GET['username123'];?>&type=Humidity&device=<?php echo $row21a1a2['device'];?>">   <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal"><font size="1px" color="white">HUMIDITY </font></h5>
             
  <img width="30px" src="humi21.fw.png">
                            <p class="mt-4 mb-0">Result</p>
                             <meter id="disk_d" value="<?php echo $row21a1a2['data']/100;?>">60%</meter>
                          <h3 class="mb-0 font-weight-bold mt-2 text-white"><?php echo $row21a1a2['data'];?></h3>
                          </div></a>
                        </div>
                      </div>
                      
                            <?php
        
        include('dbcon.php');
        
            	$query21a12=mysqli_query($con,"select * from  data where result='Gas'  and device='2' ORDER BY id desc ")or die(mysqli_error());
$row21a1a2=mysqli_fetch_array($query21a12);

?>     
        
        
 

                                   
      <div class="col-xl-4 col-lg-4 col-sm-4 grid-margin stretch-card col-4">
                        <div class="card">
                          <a style="text-decoration:none" href="rep.php?username123=<?php echo $_GET['username123'];?>&type=Gas&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal"><font size="1px" color="white">GAS</font> </h5>
             
                           <img width="30px" src="water2.png">
                            <p class="mt-4 mb-0">Result</p>
                             <meter id="disk_d" value="<?php echo $row21a1a2['data']/100;?>">60%</meter>
                              <h3 class="mb-0 font-weight-bold mt-2 text-white"><?php echo $row21a1a2['data'];?></h3>
                          </div></a>
                        </div>
                      </div>
                      
                      
                                <div class="col-xl-12 col-lg-12 col-sm-12 grid-margin stretch-card col-12">
                          <h4 class="text-font-weight-bold mb-2"> Device 3 </h4>
                           </div>
                        
                      
                      
                      
             <?php
        
        include('dbcon.php');
        
            	$query21a12=mysqli_query($con,"select * from  data where result='Temperature' and device='3' ORDER BY id desc ")or die(mysqli_error());
$row21a1a2=mysqli_fetch_array($query21a12);

?> 

                                
        <div class="col-xl-4 col-lg-4 col-sm-4 grid-margin stretch-card col-4">
                        <div class="card">
                       <a style="text-decoration:none" href="rep.php?username123=<?php echo $_GET['username123'];?>&type=Temperature&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal"><font size="1px" color="white">TEMPERATURE </font></h5>
             
  <img width="30px" src="humi21.fw.png">
                            <p class="mt-4 mb-0">Result</p>
                             <meter id="disk_d" value="<?php echo $row21a1a2['data']/100;?>">60%</meter>
                          <h3 class="mb-0 font-weight-bold mt-2 text-white"><?php echo $row21a1a2['data'];?> </h3>
                          </div></a>
                        </div>
                      </div>
                      
                            <?php
        
        include('dbcon.php');
        
            	$query21a12=mysqli_query($con,"select * from  data where result='Humidity'  and device='3' ORDER BY id desc ")or die(mysqli_error());
$row21a1a2=mysqli_fetch_array($query21a12);

?>       
                      
                      
                   <div class="col-xl-4 col-lg-4 col-sm-4 grid-margin stretch-card col-4">
                        <div class="card">
                            <a style="text-decoration:none" href="rep.php?username123=<?php echo $_GET['username123'];?>&type=Humidity&device=<?php echo $row21a1a2['device'];?>">   <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal"><font size="1px" color="white">HUMIDITY </font></h5>
             
  <img width="30px" src="humi21.fw.png">
                            <p class="mt-4 mb-0">Result</p>
                             <meter id="disk_d" value="<?php echo $row21a1a2['data']/100;?>">60%</meter>
                          <h3 class="mb-0 font-weight-bold mt-2 text-white"><?php echo $row21a1a2['data'];?></h3>
                          </div></a>
                        </div>
                      </div>
                      
                            <?php
        
        include('dbcon.php');
        
            	$query21a12=mysqli_query($con,"select * from  data where result='Gas'  and device='3' ORDER BY id desc ")or die(mysqli_error());
$row21a1a2=mysqli_fetch_array($query21a12);

?>     
        
        
 

                                   
      <div class="col-xl-4 col-lg-4 col-sm-4 grid-margin stretch-card col-4">
                        <div class="card">
                          <a style="text-decoration:none" href="rep.php?username123=<?php echo $_GET['username123'];?>&type=Gas&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal"><font size="1px" color="white">GAS</font> </h5>
             
                           <img width="30px" src="water2.png">
                            <p class="mt-4 mb-0">Result</p>
                             <meter id="disk_d" value="<?php echo $row21a1a2['data']/100;?>">60%</meter>
                              <h3 class="mb-0 font-weight-bold mt-2 text-white"><?php echo $row21a1a2['data'];?></h3>
                          </div></a>
                        </div>
                      </div>
                      
                      
                      
                      
                      
                  
                      
           <br>
             
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