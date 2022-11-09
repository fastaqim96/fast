<?php
   session_start();
   error_reporting(0);
   include('config.php');
   
   if(strlen($_SESSION['alogin'])==0) {
    header('location:index.php');
   }
   else { 
    if(isset($_POST['submit'])) {
      $pol_id=$_GET['pol_id'];
      $ref_No=$_POST['ref_No'];
      $pol_panel=$_POST['pol_panel'];  
      $pol_cover=$_POST['pol_cover'];
      $v_No=$_POST['v_No'];
      $model=$_POST['model'];
      $cc=$_POST['cc'];
      $year=$_POST['year'];
      $pol_NCD=$_POST['pol_NCD'];
      date_default_timezone_set('Asia/Kuala_Lumpur');
      $time = date("H");
      $date1=$_POST['date1'];
      if($time >= 13){
        $date2=date('Y-m-d',strtotime($date1 . " + 364 day"));
      } else {
        $date2=date('Y-m-d',strtotime($date1 . " + 364 day"));
      }
      $date2 = date("d/m/Y", strtotime($date2)); ?> <br> <?php
      $date1 = date("d/m/Y", strtotime($date1));
      $c_ic=$_POST['c_ic'];
      $premium=$_POST['premium'];
      $remarks=$_POST['remarks'];
      $engine=$_POST['engine'];
      $chasis=$_POST['chasis'];
      $keyinby=$_SESSION['alogin'];
      
      //change current policy status into 'renew'
      $status=$_POST['status'];
      $sql= "UPDATE policy SET status = :status WHERE policy.pol_id = :pol_id";
      
      $query = $dbh->prepare($sql);
      $query->bindParam(':pol_id',$pol_id,PDO::PARAM_STR);
      $query->bindParam(':status',$status,PDO::PARAM_STR);
      $query->execute();
      
      //insert new policy
      $sql="INSERT INTO policy(pol_No, pol_panel, pol_cover, v_No, model, year, cc, pol_NCD, renew_date, expired_date, c_ic, premium, remarks,  keyin_by, engine, chasis)
      VALUES(:ref_No, :pol_panel, :pol_cover, :v_No, :model, :year, :cc, :pol_NCD, :date1, :date2, :c_ic, :premium, :remarks, :keyinby, :engine, :chasis)";

      $query = $dbh->prepare($sql);
      $query->bindParam(':ref_No',$ref_No,PDO::PARAM_STR);
      $query->bindParam(':pol_panel',$pol_panel,PDO::PARAM_STR);
      $query->bindParam(':pol_cover',$pol_cover,PDO::PARAM_STR);
      $query->bindParam(':v_No',$v_No,PDO::PARAM_STR);
      $query->bindParam(':model',$model,PDO::PARAM_STR);
      $query->bindParam(':year',$year,PDO::PARAM_STR);
      $query->bindParam(':cc',$cc,PDO::PARAM_STR);
      $query->bindParam(':pol_NCD',$pol_NCD,PDO::PARAM_STR);
      $query->bindParam(':date1',$date1,PDO::PARAM_STR);
      $query->bindParam(':date2',$date2,PDO::PARAM_STR);
      $query->bindParam(':c_ic',$c_ic,PDO::PARAM_STR);
      $query->bindParam(':premium',$premium,PDO::PARAM_STR);
      $query->bindParam(':remarks',$remarks,PDO::PARAM_STR);
      $query->bindParam(':keyinby',$keyinby,PDO::PARAM_STR);
      $query->bindParam(':engine',$engine,PDO::PARAM_STR);
      $query->bindParam(':chasis',$chasis,PDO::PARAM_STR);
      $query->execute();
      
      $lastInsertId = $dbh->lastInsertId();
      if($lastInsertId) {
        echo "<script type='text/javascript'>alert('showSwal('success-message')')</script>";
        header('refresh:3;url=policy.php');
      } else  {
        $error="Something went wrong. Please try again";
      }
    } ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <?php include ('metadata.php'); date_default_timezone_set("Asia/Kuala_Lumpur"); ?>
      <!-- plugin css for this page -->
      <link rel="stylesheet" href="vendors/select2/select2.min.css">
      <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
      <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
      <link rel="stylesheet" href="css/style.css">
      <!-- End plugin css for this page -->
    </head>

    <body class="sidebar-fixed">
      <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include ("sidebar.php") ;?>
          <!-- partial -->
          <div class="main-panel">
          <div class="content-wrapper">
            <div class="row grid-margin">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <h4 class="card-title" align="center">Renew Policy <?php echo $pol_id=$_GET['pol_id'];?></h4>
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Ref. No</label>
                      </div>
                      <div class="col-lg-4">
                        <input class="form-control" maxlength="100" name="ref_No" id="defaultconfig" type="text" placeholder="VPP/75717268/11..">
                      </div>

                      <div class="col-lg-2">
                        <label class="col-form-label" text-align="right">Insurance Panel</label>
                      </div>
                      
                      <div class="col-lg-4">
                        <select name="pol_panel" class="js-example-basic-single form-control form-control-lg" style="width:100%" required>
                          <option value="">Select Insurance Panel</option>
                          <?php 
                          $sql = "SELECT * from panel";
                          $query = $dbh -> prepare($sql);
                          $query->execute();
                          $results=$query->fetchAll(PDO::FETCH_OBJ);
                          $cnt=1;
                          if($query->rowCount() > 0) {
                            foreach($results as $result) { ?>
                              <option value="<?php echo htmlentities($result->panel_id);?>">
                                <?php echo htmlentities($result->panel_name);?>
                              </option>
                            <?php } } ?>
                        </select>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Coverage</label>
                      </div>
                      <div class="col-lg-4">
                        <select class="js-example-basic-single" name="pol_cover" style="width:100%" required>
                          <option value="">Select Coverage</option>
                          <option value="Comprehensive">Comprehensive</option>
                          <option value="TPFT">Third Party Fire & Theft</option>
                          <option value="Third Party">Third Party Only</option>
                        </select>
                      </div>

                      <div class="col-lg-2">
                        <label class="col-form-label" text-align="right">NCD (%)</label>
                      </div>
                      <div class="col-lg-4">
                        <select class="js-example-basic-single" name="pol_NCD" style="width:100%" required>
                          <option value="">Select NCD</option>
                          <option value="0">0</option>
                          <option value="15">15</option>
                          <option value="20">20</option>
                          <option value="25">25</option>
                          <option value="30">30</option>
                          <option value="38.33">38.33</option>
                          <option value="45">45</option>
                          <option value="55">55</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Inception Date</label>
                      </div>
                      <div class="col-lg-5">
                        <div id="datepicker-popup" class="input-group date datepicker">
                          <input type="text" class="form-control" name="date1">
                          <span class="input-group-addon input-group-append border-left">
                            <span class="mdi mdi-calendar input-group-text"></span>
                          </span>
                        </div>
                      </div>
                    </div>
                    
                    <hr>
                    
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Policy Holder</label>
                      </div>
                      <div class="col-lg-10">
                          <?php
                          $sql = "SELECT client.c_name, policy.* from client JOIN policy ON policy.c_ic=client.c_ic WHERE policy.pol_id=:pol_id";
                          $query = $dbh -> prepare($sql);
                          $query -> bindParam(':pol_id', $pol_id, PDO::PARAM_STR);
                          $query->execute();
                          $results=$query->fetchAll(PDO::FETCH_OBJ);
                          $cnt=1;
                          if($query->rowCount() > 0) {
                            foreach($results as $result) { ?>
                              <input name="c_ic" type="hidden" value="<?php echo htmlentities($result->c_ic);?>">
                              <input class="form-control" style="width:100%" value="<?php echo htmlentities($result->c_name);?>" readonly>
                            <?php } } ?>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Plat No.</label>
                      </div>
                      <div class="col-lg-4">
                        <input class="form-control" name="v_No" type="text" value="<?php echo htmlentities($result->v_No);?>">
                      </div>
                      
                      <div class="col-lg-2">
                        <label class="col-form-label">Model Name</label>
                      </div>
                      <div class="col-lg-4">
                        <input class="form-control" name="model" type="text" value="<?php echo htmlentities($result->model);?>">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label" text-align="right">Engine Capacity (CC)</label>
                      </div>
                      <div class="col-lg-4">
                        <input class="form-control" name="cc" type="text" value="<?php echo htmlentities($result->cc);?>">
                      </div>
                      
                      <div class="col-lg-2">
                        <label class="col-form-label" text-align="right">Year Manufactured</label>
                      </div>
                      <div class="col-lg-4">
                        <input class="form-control" name="year" type="text" value="<?php echo htmlentities($result->year);?>">
                      </div>                      
                    </div>                    
                    
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Engine Number</label>
                      </div>
                      <div class="col-lg-4">
                        <input class="form-control" name="engine" type="text" value="<?php echo htmlentities($result->engine);?>">
                      </div>

                      <div class="col-lg-2">
                        <label class="col-form-label" text-align="right">Chasis Number</label>
                      </div>
                      <div class="col-lg-4">
                        <input class="form-control" name="chasis" type="text" value="<?php echo htmlentities($result->chasis);?>">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Premium (RM)</label>
                      </div>
                      <div class="col-lg-4">
                        <input class="form-control" name="premium" type="text" placeholder="256.00">
                      </div>
                      
                      <div class="col-lg-2">
                        <label class="col-form-label">Renewal with</label>
                      </div>
                      <div class="col-lg-4">
                        <select class="js-example-basic-single" name="status" style="width:100%" required>
                          <option value="renew">Fastaqim Resources</option>
                          <option value="renew other agent">Other Agent</option>
                        </select>
                      </div>                      
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-lg-2">
                        <label class="col-form-label">Special Remarks</label>
                      </div>
                      <div class="col-lg-10">
                        <textarea class="form-control" maxlength="100" name="remarks" id="defaultconfig-3" type="text" placeholder="Besut.."></textarea>
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
          <!-- partial:partials/_footer.html -->
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
      <!--<script src="vendors/sweetalert/sweetalert.min.js"></script>-->
      <script src="vendors/jquery.avgrund/jquery.avgrund.min.js"></script>
      <script src="vendors/select2/select2.min.js"></script>
      <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
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
      <script src="js/formpickers.js"></script>
      <script src="js/form-addons.js"></script>
      <script src="js/x-editable.js"></script>
      <script src="js/dropify.js"></script>
      <script src="js/dropzone.js"></script>
      <script src="js/jquery-file-upload.js"></script>
      <script src="js/formpickers.js"></script>
      <script src="js/form-repeater.js"></script>
      <script src="js/input-mask.js"></script>      
      <!-- End custom js for this page-->
    </body>
    </html>
<?php } ?>