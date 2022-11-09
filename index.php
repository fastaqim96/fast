<?php
session_start();
error_reporting(0);
include('config.php');

if(isset($_POST['login'])) {
  $uname=$_POST['username'];
  $password=$_POST['password'];
  $sql ="SELECT * FROM admin WHERE admin_user=:uname and admin_pass=:password";
  $query= $dbh -> prepare($sql);
  $query-> bindParam(':uname', $uname, PDO::PARAM_STR);
  $query-> bindParam(':password', $password, PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);

    if($query->rowCount() > 0) {
      $_SESSION['alogin']=$_POST['username'];
      foreach($results as $result) {
        $_SESSION['name'] = htmlentities($result->admin_name);
        $_SESSION['designation'] = htmlentities($result->admin_designation);
        $_SESSION['status'] = htmlentities($result->admin_status);
      }
      echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else {
      echo "<script>alert('Invalid Details');</script>";
    }
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('metadata.php'); ?>
</head>

<body class="sidebar-fixed">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-8 mx-auto">
            <div class="row">
              <div class="col-lg-6 bg-white">
                <div class="auth-form-light text-left p-5">
                  <h2 align="center">Selamat Datang</h2>
                  <h4 align="center" class="font-weight-light">Welcome to Fastaqim Resources!</h4>
                  <form class="pt-5" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Username">
                      <i class="mdi mdi-account"></i>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                      <i class="mdi mdi-eye"></i>
                    </div>
                    <div class="mt-5">
                      <input type="submit" name="login" value="Sign In" class="btn btn-block btn-success btn-lg font-weight-medium">
                    </div>
                    <div class="mt-3 text-center">
                      <a href="#" class="auth-link text-black">Forgot password?</a>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 login-half-bg d-flex flex-row">
                <p class="text-white font-weight-medium text-center flex-grow align-self-end">All rights reserved. Copyright &copy; 2015 - <?php echo date("Y");?></p>
              </div>
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>
</html>
