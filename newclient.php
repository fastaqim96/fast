<?php
   session_start();
   error_reporting(0);
   include('config.php');
   
   if(strlen($_SESSION['alogin'])==0) {
    header('location:index.php');
   }
   else { 
    if(isset($_POST['submit'])) {
      $name=$_POST['name'];
      $ICNo=$_POST['ICNo'];  
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $addr=$_POST['addr'];
      $postcode=$_POST['postcode'];
      $state=$_POST['state'];
      $district=$_POST['district'];
      $keyinby=$_SESSION['alogin'];
      
      $sql="INSERT INTO client(c_name,c_ic,c_phone,c_email,c_addr,c_postcode,c_district,c_state,keyin_by) VALUES(:name,:ICNo,:phone,:email,:addr,:postcode,:district,:state,:keyinby)";

      $query = $dbh->prepare($sql);
      $query->bindParam(':name',$name,PDO::PARAM_STR);
      $query->bindParam(':ICNo',$ICNo,PDO::PARAM_STR);
      $query->bindParam(':phone',$phone,PDO::PARAM_STR);
      $query->bindParam(':email',$email,PDO::PARAM_STR);
      $query->bindParam(':addr',$addr,PDO::PARAM_STR);
      $query->bindParam(':postcode',$postcode,PDO::PARAM_STR);
      $query->bindParam(':district',$district,PDO::PARAM_STR);
      $query->bindParam(':state',$state,PDO::PARAM_STR);
      $query->bindParam(':keyinby',$keyinby,PDO::PARAM_STR);

      $query->execute();
      $lastInsertId = $dbh->lastInsertId();
      if($lastInsertId) {
        echo "<script type='text/javascript'>alert('showSwal('success-message')')</script>";
        header('refresh:2;url=https://fastaqimresources.com/insurance/newpolicy.php');
      } else  {
        $error="Something went wrong. Please try again";
      }
    } ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <?php include ('metadata.php'); date_default_timezone_set("Asia/Kuala_Lumpur"); ?>
      <!-- plugin css for this page -->
      <link rel="stylesheet" href="vendors/icheck/skins/all.css">
      <link rel="stylesheet" href="vendors/select2/select2.min.css">
      <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
      <!-- End plugin css for this page -->
    </head>

    <body class="sidebar-fixed">
      <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php include ("sidebar.php") ;?>
          <!-- partial -->
          <div class="main-panel">
          <div class="content-wrapper">
            <div class="row grid-margin">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <h4 class="card-title" align="center">Add New Client</h4>
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Full Name</label>
                      </div>
                      <div class="col-lg-10">
                        <input class="form-control" maxlength="100" name="name" id="defaultconfig" type="text" placeholder="Fastaqim Resources @ - ARMY @ - POLICE @ - SYKT">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">IC Number</label>
                      </div>             
                      <div class="col-lg-10">
                        <input class="form-control" name="ICNo" id="defaultconfig-3" type="text" placeholder="961120111111 @ RF/T @ SYARIKAT..">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Phone</label>
                      </div>
                      <div class="col-lg-4">
                        <input class="form-control" maxlength="15" name="phone" type="text" placeholder="60166684009..">
                      </div>

                      <div class="col-lg-1">
                        <label class="col-form-label">Email</label>
                      </div>
                      <div class="col-lg-5">
                        <input class="form-control" name="email" type="email" placeholder="If any..">
                      </div>
                    </div>                    
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Address</label>
                      </div>
                      <div class="col-lg-10">
                        <textarea id="maxlength-textarea" name="addr" class="form-control" maxlength="100" rows="2" placeholder="Lot 985 Jalan Bukit Keluang, Pengkalan Nyireh"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Postcode</label>
                      </div>
                      <div class="col-lg-10">
                        <input class="form-control" name="postcode" maxlength="5" type="text" id="defaultconfig-2" placeholder="22200..">
                      </div>
                    </div>                   
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">District</label>
                      </div>
                      <div class="col-lg-4">
                        <input class="form-control" name="district" id="defaultconfig-3" type="text" placeholder="Besut..">
                      </div>

                      <div class="col-lg-1">
                        <label class="col-form-label">State</label>
                      </div>
                      <div class="col-lg-5">
                        <select class="js-example-basic-single" name="state" style="width:100%">
                          <option value="">Select State</option>
                          <option value="TERENGGANU"> Terengganu Darul Iman</option>
                          <option value="KELANTAN">Kelantan Darul Naim</option>
                          <option value="PAHANG">Pahang Darul Makmur</option>
                          <option value="PERAK">Perak Darul Ridzuan</option>
                          <option value="KEDAH">Kedah Darul Aman</option>
                          <option value="PENANG">Penang</option>
                          <option value="PERLIS">Perlis Indera Kayangan</option>
                          <option value="SELANGOR">Selangor Darul Ehsan</option>
                          <option value="MELAKA">Melaka</option>
                          <option value="NEGERI SEMBILAN">Negeri Sembilan Darul Khusus</option>
                          <option value="JOHOR">Johor Darul Ta'zim</option>
                          <option value="SABAH">Sabah</option>
                          <option value="SARAWAK">Sarawak</option>
                          <option value="KUALA LUMPUR">Kuala Lumpur</option>
                        </select>
                      </div>
                    </div>
                    <div align="right">
                      <button type="submit" name="submit" onclick="showSwal('success-message')" class="add btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <?php include ("footer.php"); ?>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <script src="vendors/jquery-validation/jquery.validate.min.js"></script>
      <script src="vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
      <script src="vendors/sweetalert/sweetalert.min.js"></script>
      <script src="vendors/jquery.avgrund/jquery.avgrund.min.js"></script>
      <script src="vendors/select2/select2.min.js"></script>
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="js/off-canvas.js"></script>
      <script src="js/hoverable-collapse.js"></script>
      <script src="js/misc.js"></script>
      <script src="js/settings.js"></script>
      <script src="js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="js/form-validation.js"></script>
      <script src="js/bt-maxLength.js"></script>
      <script src="js/alerts.js"></script>
      <script src="js/avgrund.js"></script>      
      <script src="js/select2.js"></script>
      <!-- End custom js for this page-->
    </body>
    </html>
<?php } ?>