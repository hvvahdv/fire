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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
      <style>
          .auth .auth-form-light {
    background: #ffffff;
    border-color: red;
    border-radius: 12px;
}
          .content-wrapper {
    background: #804d2f;
    padding: 2.875rem 2.875rem 0 2.875rem;
    width: 100%;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}

.content-wrapper {
    background: #804d2f;
    padding: -0.125rem 0.875rem 0 0.875rem;
    width: 100%;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}
      </style>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <center>
                  <img width="200px" height="200px"src="fire.fw.png">
                  <br>
                  <h5>Pyrotection</h5>
                </center>
             
             	<?php
include('dbcon.php');
session_start();
if(isset($_POST['signin']))
{
    

$title=$_POST['username'];
$age=$_POST['pass'];
$status="Pending";

$date=date("Y-m-d H:i");

$query21a1=mysqli_query($con,"select * from  user  where username='$title' and password='$age'")or die(mysqli_error());
$row21a1a=mysqli_num_rows($query21a1);

		  
	if($row21a1a>=1){	  
		  
$_SESSION['id']=$title;
		  
		
?>


	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='index.php?username123=<?php echo $title;?>';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Success!", "Successfully Login!", "success");
 
}
</script>



    
    
    
<?php


}else{


?>     
        
             
     

	<script type="text/javascript">
    window.setTimeout(function() {
        window.location.href='login.php';
    }, 1000);
</script>
		
		
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
JSalert();
function JSalert(){

swal("Ops!", "Invalid Credentials!", "warning");
 
}
</script>



    
    
     
     
     
     
         
<?php

}
}


?>     
           
               
                <form class="pt-3" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="pass" placeholder="Password" required>
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="signin" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="index.html">LOGIN</button>
                  </div>
          
            
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>