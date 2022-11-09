<?php
session_start();
error_reporting(0);
include('config.php');

if(strlen($_SESSION['alogin'])==0) {
  header('location:index.php');
}
else { 
  $pid=intval($_GET['pid']);
  if(isset($_POST['submit'])) {
    $ref_No=$_POST['ref_No'];
    $pol_panel=$_POST['pol_panel'];  
    $pol_cover=$_POST['pol_cover'];
    $v_No=$_POST['v_No'];
    $pol_NCD=$_POST['pol_NCD'];
    $date1 = $_POST['date1'];
    $date2 = date('Y-m-d',strtotime($date1 . " + 365 day"));
    $date2 = date("d/m/Y", strtotime($date2));
    $date1 = date("d/m/Y", strtotime($date1));
    $c_ic=$_POST['c_ic'];
    $premium=$_POST['premium'];
    $remarks=$_POST['remarks'];

    $sql="UPDATE policy SET pol_No=:ref_No, pol_cover=:pol_cover, v_No=:v_No, pol_NCD=:pol_NCD, renew_date=:date1, expired_date=:date2, premium=:premium, remarks=:remarks WHERE pol_id=:pid";

    $query = $dbh->prepare($sql);
    $query->bindParam(':pid',$pid,PDO::PARAM_STR);
    $query->bindParam(':ref_No',$ref_No,PDO::PARAM_STR);
    $query->bindParam(':pol_cover',$pol_cover,PDO::PARAM_STR);
    $query->bindParam(':v_No',$v_No,PDO::PARAM_STR);
    $query->bindParam(':pol_NCD',$pol_NCD,PDO::PARAM_STR);
    // $query->bindParam(':date1',$date1,PDO::PARAM_STR);
    // $query->bindParam(':date2',$date2,PDO::PARAM_STR);
    $query->bindParam(':premium',$premium,PDO::PARAM_STR);
    $query->bindParam(':remarks',$remarks,PDO::PARAM_STR);

    $query->execute();
  } ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <?php include ('metadata.php'); ?>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/icheck/skins/all.css">
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
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
                  <?php 
                  $pid=intval($_GET['pid']);
                  $sql = "SELECT * from policy where pol_id=:pid";
                  $query = $dbh -> prepare($sql);
                  $query -> bindParam(':pid', $pid, PDO::PARAM_STR);
                  $query->execute();
                  $results=$query->fetchAll(PDO::FETCH_OBJ);
                  $cnt=1;
                  if($query->rowCount() > 0) {
                    foreach($results as $result) { ?>
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                          <h4 class="card-title" align="center">Edit Policy</h4>
                          <div class="form-group row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Reference Number</label>
                            </div>
                            <div class="col-lg-8">
                              <input class="form-control" maxlength="100" name="ref_No" id="defaultconfig" type="text" value="<?php echo htmlentities($result->pol_No);?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Insurance Panel</label>
                            </div>             
                            <div class="col-lg-8">
                              <?php 
                              $panel = htmlentities($result->pol_panel);
                              $sqlpanel = "SELECT * from panel WHERE panel_id = :panel";
                              $querypanel = $dbh -> prepare($sqlpanel);
                              $querypanel -> bindParam(':panel', $panel, PDO::PARAM_STR);
                              $querypanel->execute();
                              $resultspanel=$querypanel->fetchAll(PDO::FETCH_OBJ);
                              if($querypanel->rowCount() > 0) {
                                foreach($resultspanel as $resultpanel) { ?>
                                  <input class="form-control" maxlength="100" name="pol_panel" id="defaultconfig" type="text" value="<?php echo htmlentities($resultpanel->panel_name);?>" readonly>
                                <?php } } ?>
                            </div>
                          </div>
                            <div class="form-group row">
                              <div class="col-lg-3">
                                <label class="col-form-label">Coverage</label>
                              </div>
                              <div class="col-lg-8">
                                <input class="form-control" maxlength="100" name="pol_cover" id="defaultconfig" type="text" value="<?php echo htmlentities($result->pol_cover);?>" readonly>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-lg-3">
                                <label class="col-form-label">NCD (%)</label>
                              </div>
                              <div class="col-lg-8">
                                <input class="form-control" maxlength="100" name="pol_NCD" id="defaultconfig" type="text" value="<?php echo htmlentities($result->pol_NCD);?>" readonly>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-lg-3">
                                <label class="col-form-label">Inception Date</label>
                              </div>
                              <div class="col-lg-8">
                                <div id="datepicker-popup" class="input-group date datepicker">
                                  <input type="text" class="form-control" name="date1" value="<?php echo htmlentities($result->renew_date); ?>">
                                  <span class="input-group-addon input-group-append border-left">
                                    <span class="mdi mdi-calendar input-group-text"></span>
                                  </span>
                                </div>
                              </div>
                            </div>                    
                            <div class="form-group row">
                              <div class="col-lg-3">
                                <label class="col-form-label">Policy Holder</label>
                              </div>
                              <div class="col-lg-8">
                                <?php 
                                $c_ic = htmlentities($result->c_ic);
                                $sqlic = "SELECT * from client WHERE c_ic=:c_ic";
                                $queryic = $dbh -> prepare($sqlic);
                                $queryic -> bindParam(':c_ic', $c_ic, PDO::PARAM_STR);
                                $queryic->execute();
                                $resultsic=$queryic->fetchAll(PDO::FETCH_OBJ);
                                if($queryic->rowCount() > 0) {
                                  foreach($resultsic as $resultic) { ?>
                                    <input type="text" class="form-control" name="c_ic" value="<?php echo htmlentities($resultic->c_name); ?>" readonly>
                                  <?php } } ?>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-lg-3">
                                  <label class="col-form-label">Vehicle Number</label>
                                </div>
                                <div class="col-lg-8">
                                  <input class="form-control" name="v_No" type="text" value="<?php echo htmlentities($result->v_No); ?>" readonly>
                                </div>
                              </div>                    
                              <div class="form-group row">
                                <div class="col-lg-3">
                                  <label class="col-form-label">Premium Payable (RM)</label>
                                </div>
                                <div class="col-lg-8">
                                  <?php $premium=htmlentities($result->premium);
                                  if($premium=='' || $premium==' ' || $premium='-'){
                                    $premium='Not Available';
                                  } ?>
                                  <input class="form-control" name="premium" type="text" value="<?php echo $premium; ?>">
                                </div>
                              </div>                   
                              <div class="form-group row">
                                <div class="col-lg-3">
                                  <label class="col-form-label">Special Remarks</label>
                                </div>
                                <div class="col-lg-8">
                                  <?php $remarks=htmlentities($result->remarks); 
                                  if($remarks=='' || $remarks==' ' || $remarks='-'){
                                    $remarks='Not Available';
                                  } ?>
                                  <input class="form-control" maxlength="100" name="remarks" id="defaultconfig-3" type="text" value="<?php echo $remarks; ?>"></input>
                                </div>
                              </div>
                            <?php } } ?>
                            <div align="right" class="col-lg-11">
                              <button type="submit" name="submit" onclick="showSwal('success-message')" class="add btn btn-primary">Submit</button>
                              <a href="http://fyppresentation.com/fastaqimresources/policy.php" class="btn-warning btn">Back</a>
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
          <script src="vendors/sweetalert/sweetalert.min.js"></script>
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