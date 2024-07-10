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
          <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
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

    

session_start(); 

if($_GET['username123']!=''){
    $_SESSION['id']=$_GET['username123'];
}
if($_SESSION['id']=='admin' || $_SESSION['id']=='Admin'){
?>
      <li class="nav-item">
              <a class="nav-link" href="form.php?username123=<?php echo $_GET['username123'];?>">
                <span class="icon-bg"><i class="mdi mdi-user-large menu-icon"></i></span>
                <span class="menu-title">Users</span>
              </a>
            </li>
            
                <li class="nav-item">
              <a class="nav-link" href="settings.php?username123=<?php echo $_GET['username123'];?>">
                <span class="icon-bg"><i class="mdi mdi-user-large menu-icon"></i></span>
                <span class="menu-title">Settings</span>
              </a>
            </li>
                         	<?php
}
?>
      <li class="nav-item">
              <a class="nav-link" href="login.php?username123=<?php echo $_GET['username123'];?>">
                <span class="icon-bg"><i class="mdi mdi-table-large book-icon"></i></span>
                <span class="menu-title">Logout</span>
              </a>
            </li>
  
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
         
            <div class="row">
              <div class="col-md-12">
        
        
        
        
        
       	<?php
include('dbcon.php');

$id=$_GET['id'];
$query21a1ss=mysqli_query($con,"select * from  hole where id='$id'")or die(mysqli_error());
$row21a1ass=mysqli_fetch_array($query21a1ss);




if(isset($_POST['signin']))
{
    

$title=$_POST['title'];
$age=rand(100000,999999);
$titl2e=$_POST['plants'];

$date=date("Y-m-d H:i");

$rem=$_POST['remarks'];



	mysqli_query($con,"update hole set plants='$titl2e' where id='$id'")or die(mysqli_error());
	



		  mysqli_query($con,"INSERT INTO history(code,plants,hole,remarks,date_added) VALUES('$age','$titl2e','$id','$rem','$date')")or die(mysqli_error($con));
		  
		 


		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='index.php?username123=<?php echo $_GET['username123'];?>';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Updated!", "success");
 
}
</script>



    
    
    
<?php
}
?>  
	
   
        
        
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
               <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h5>Add History</h5>
                    <p class="card-description"> Please provide the following information</p>
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Have Plants?</label>
                        <select type="text" class="form-control" name="plants" required>
                            
                            <?php
                            if($row21a1ass['plants']==1){
                            
                            ?>
                            
                            <option value="1">Yes</option>
                                    <option value="0">No</option>
                                           
                            <?php
                            }else{
                            
                            ?>
                            
                                    <option value="0">No</option>        <option value="1">Yes</option>
                                           
                            <?php
                            }
                            
                            ?>
                                      
                                    
                                    
                            </select>
                      </div>
               
                      <div class="form-group">
                        <label for="exampleInputUsername1">Remarks</label>
                        <textarea type="text" max="6" min="1"class="form-control" name="remarks" required></textarea>
                      </div>
            
                  
                      <button type="submit" type="submit" name="signin" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
                 
                  </div>
                </div>
              </div>
              
              
 
 
 
      <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">History</h5>
                    <div class="table-responsive">
                    <table class="table ">
                      <thead>
                        <tr>
                          <th>Informatin</th>
                         
                     
                        </tr>
                      </thead>
                      <tbody>
                          
                          
                          <?php
                          $ii=$_GET['id'];
                           $ii2=$_GET['type'];
                          	$query21a1=mysqli_query($con,"select * from  history where hole='$ii'")or die(mysqli_error());
while($row21a1a=mysqli_fetch_array($query21a1)){
                          ?>
                        <tr>
                          <td>Remarks: <?php echo $row21a1a['remarks'];?><br><br>
                     
                          Date Created: <?php echo $row21a1a['date_added'];?><br><br>
                      
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