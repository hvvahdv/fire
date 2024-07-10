<div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/connect-plus-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
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
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

 

            <li class="nav-item">
              <a class="nav-link" href="tables.php?username123=<?php echo $_GET['username123'];?>">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Analytics</span>
              </a>
            </li>
            
             	<?php
include('dbcon.php');

    


?>
   
            
                <li class="nav-item">
              <a class="nav-link" href="settings.php?username123=<?php echo $_GET['username123'];?>">
                <span class="icon-bg"><i class="mdi mdi-user-large menu-icon"></i></span>
                <span class="menu-title">Settings</span>
              </a>
            </li>

                            <li class="nav-item">
              <a class="nav-link" href="login.php">
                <span class="icon-bg"><i class="fa fa-file"></i></span>
                <span class="menu-title">Logout</span>
              </a>
            </li>
     
  
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
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
                       <a style="text-decoration:none" href="rep.php?type=Temperature&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
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
                            <a style="text-decoration:none" href="rep.php?type=Humidity&device=<?php echo $row21a1a2['device'];?>">   <div class="card-body text-center">
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
                          <a style="text-decoration:none" href="rep.php?type=Gas&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
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
                       <a style="text-decoration:none" href="rep.php?type=Temperature&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
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
                            <a style="text-decoration:none" href="rep.php?type=Humidity&device=<?php echo $row21a1a2['device'];?>">   <div class="card-body text-center">
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
                          <a style="text-decoration:none" href="rep.php?type=Gas&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
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
                       <a style="text-decoration:none" href="rep.php?type=Temperature&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
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
                            <a style="text-decoration:none" href="rep.php?type=Humidity&device=<?php echo $row21a1a2['device'];?>">   <div class="card-body text-center">
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
                          <a style="text-decoration:none" href="rep.php?type=Gas&device=<?php echo $row21a1a2['device'];?>">    <div class="card-body text-center">
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
