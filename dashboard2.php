<?php
session_start();
error_reporting(0);
include('config.php');

if(strlen($_SESSION['alogin'])==0) {
  header('location:index.php');
}
else { ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <?php include ('metadata.php'); date_default_timezone_set("Asia/Kuala_Lumpur"); ?>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="vendors/jquery-bar-rating/css-stars.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <!--<link rel="stylesheet" href="vendors/select2/select2.min.css">-->
    <!--<link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">    -->
    <!-- End plugin css for this page -->
  </head>
  <body class="sidebar-fixed">
    <div class="container-scroller">
      <?php include ("sidebar.php"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row" align="center">
                    <div class="col-lg-3">
                      <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <select name="pol_panel" class="js-example-basic-single form-control form-control-sm" style="width:100%">
                          <option value="">All Insurance Panel</option>
                          <?php 
                          $sql = "SELECT * from panel";
                          $query = $dbh -> prepare($sql);
                          $query->execute();
                          $results=$query->fetchAll(PDO::FETCH_OBJ);
                          foreach($results as $result) { ?>
                            <option value="<?php echo htmlentities($result->panel_id);?>">
                              <?php echo htmlentities($result->panel_name);?>
                            </option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="col-lg-3">
                        <select name="pol_cover" class="js-example-basic-single form-control form-control-sm" style="width:100%">
                          <option value="">All Coverage</option>
                          <option value="Comprehensive">Comprehensive</option>
                          <option value="TPFT">TPFT</option>
                          <option value="Third Party">Third Party</option>
                          <option value="Unknown">Undefined</option>
                        </select>
                      </div>
                      <div class="col-lg-2">
                        <select name="month" class="js-example-basic-single form-control form-control-sm" style="width:100%">
                          <option value="">All Month</option>
                          <option value="01">1</option>
                          <option value="02">2</option>
                          <option value="03">3</option>
                          <option value="04">4</option>
                          <option value="05">5</option>
                          <option value="06">6</option>
                          <option value="07">7</option>
                          <option value="08">8</option>
                          <option value="09">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>
                      <div align="center" class="col-lg-2">
                        <select name="year" class="js-example-basic-single form-control form-control-sm" style="width:100%">
                          <option value="">All Year</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                        </select>
                      </div>                      
                      <div align="center" class="col-lg-2">
                        <button type="submit" name="submit" class="add btn btn-primary">Submit</button>
                        <!--<button type="submit" name="reset" class="btn btn-light">Reset</button>-->
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>              
          <div class="card">
            <div class="card-body">
              <div class="col-12">
                <h4 class="card-title" style="text-align: center;">List Overall Policies</h4> 
              </div>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr align="center">
                        <th>No</th>
                        <!-- <th>Ref. No</th> -->
                        <th>Client</th>
                        <th>Insurer</th>
                        <!-- <th>Coverage</th> -->  
                        <th>Vehicle</th>
                        <!-- <th>Premium</th> -->
                        <th>Expiry Date</th>
                        <th style="width:12%">Status</th>
                        <th style="width:20%">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      //$month=date('m'); $year=date('Y');
                      $sql = "SELECT DISTINCT client.*, policy.* FROM policy JOIN client ON client.c_ic=policy.c_ic";

                      if(isset($_POST['submit'])) {
                        $pol_panel=$_POST['pol_panel'];
                        $pol_cover=$_POST['pol_cover'];
                        $month=$_POST['month'];
                        $year=$_POST['year'];

                        if($pol_panel && !empty($pol_panel)) {
                          $sql .= " AND policy.pol_panel LIKE '$pol_panel'";
                            // SELECT DISTINCT client.*, policy.* FROM policy JOIN client ON client.c_ic=policy.c_ic'
                            // AND policy.pol_panel LIKE '%12%' ORDER BY policy.expired_date DESC
                        }
                        if($pol_cover && !empty($pol_cover)){
                          $sql .= " AND policy.pol_cover='$pol_cover'";
                        }
                        if($month && !empty($month)){
                          $sql .= " AND policy.expired_date LIKE '%/$month/%'";
                        }
                        if($year && !empty($year)){
                          $sql .= " AND policy.expired_date LIKE '%/$year%'";
                        }                                                
                      }
                      elseif(isset($_POST['reset'])) {
                        $sql = "SELECT DISTINCT client.*, policy.* FROM policy JOIN client ON client.c_ic=policy.c_ic";
                      }
                      $sql .= " ORDER BY policy.expired_date DESC";
                      // $sql = "SELECT * FROM policy";
                      $query = $dbh -> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=0;
                      if($query->rowCount() > 0) {
                        foreach($results as $result) { $cnt++; ?>
                          <tr>
                            <td align="center"><?php echo $cnt;?></td>
                            <!-- <td align="center"><?php echo htmlentities($result->pol_No);?></td> -->
                            <td><?php echo htmlentities($result->c_name);?></td>
                            <td align="center">
                              <?php $panel = htmlentities($result->pol_panel);
                              $sql5 = "SELECT panel_name from panel WHERE panel_id=$panel";
                              $query5 = $dbh -> prepare($sql5);
                              $query5->execute();
                              $results5=$query5->fetchAll(PDO::FETCH_OBJ);
                              if($query5->rowCount() > 0) {
                                foreach($results5 as $result5) { ?>
                                  <?php echo htmlentities($result5->panel_name);?>
                                <?php } } ?>                                

                              </td>
                              <!-- <td align="center"><?php echo htmlentities($result->pol_cover);?></td> -->
                              <td align="center"><?php echo htmlentities($result->v_No);?></td>
                              <!-- <td align="center"><?php echo htmlentities($result->premium); ?></td> -->
                              <!-- <td align="center"><?php echo htmlentities($result->renew_date);?></td> -->
                              <td align="center">
                                <?php
                                echo $expired=htmlentities($result->expired_date);
                              ?> <br>
                              <?php 
                              $today=date('Y-m-d'); $date = str_replace('/', '-', $expired); $expired=date('Y-m-d', strtotime($date));

                              $startTimeStamp = strtotime($expired);
                              $endTimeStamp = strtotime($today);

                              $timeDiff = abs($endTimeStamp - $startTimeStamp);

                              $numberDays = $timeDiff/86400;  // 86400 seconds in one day

                              $numberDays = intval($numberDays);

                              if($numberDays>0 && htmlentities($result->status)!='renew' && htmlentities($result->status)!='sold' && htmlentities($result->status)!='renew other agent') { ?>
                                <?php if($today < $expired) { ?> <label class="badge badge-primary"> <?php } else { ?> <label class="badge badge-danger "> <?php } ?>

                                <?php echo $numberDays?> days <?php if($today < $expired) { echo 'left'; } else { echo 'ago'; } ?>
                              </label>
                            <?php } else{
                              //null
                            } ?>
                          </td>
                          <td align="center"><?php echo htmlentities($result->status);?></td>
                          <td align="center">
                            <div class="modal fade" id="<?php echo htmlentities($result->pol_id);?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-body">
                                    <!--form mask starts-->
                                    <h5 class="card-title">
                                      <?php echo htmlentities($result->c_name);?> <br>
                                      <p class="card-description">
                                        <?php echo htmlentities($result->c_ic);?> - <?php echo htmlentities($result->c_phone);?>
                                      </p>
                                    </h5>
                                    <form class="forms-sample">
                                      <div class="form-group row">
                                        <div class="col">
                                          <label>Vehicle No.</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="<?php echo htmlentities($result->v_No);?>" readonly/>
                                        </div>                                                
                                        <div class="col">
                                          <label>Vehicle Model</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="<?php echo htmlentities($result->model);?>" readonly/>
                                        </div>
                                        <div class="col-1">
                                          <label>Engine (cc)</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="<?php echo htmlentities($result->cc);?>" readonly/>
                                        </div>
                                        <div class="col-1">
                                          <label>Year</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="<?php echo htmlentities($result->year);?>" readonly/>
                                        </div>                                                
                                        <div class="col">
                                          <label>Engine No.</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="<?php echo htmlentities($result->engine);?>" readonly/>
                                        </div>
                                        <div class="col">
                                          <label>Chasis No.</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="<?php echo htmlentities($result->chasis);?>" readonly/>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label>Full Address</label>
                                        <textarea type="text" style="text-align: center;" class="form-control" readonly/><?php echo htmlentities($result->c_addr);?>, <?php echo htmlentities($result->c_postcode);?> <?php echo htmlentities($result->c_district);?>, <?php echo htmlentities($result->c_state);?></textarea>
                                      </div>                                              
                                      <div class="form-group row">
                                        <div class="col">
                                          <label>Panel Name</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="<?php echo htmlentities($result5->panel_name);?>" readonly/>
                                        </div>
                                        <div class="col">
                                          <label>Coverage</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="<?php echo htmlentities($result->pol_cover);?>" readonly/>
                                        </div>
                                        <div class="col">
                                          <label>Period of Cover</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="<?php echo htmlentities($result->renew_date);?> - <?php echo htmlentities($result->expired_date);?>" readonly/>
                                        </div>
                                        <div class="col">
                                          <label>NCD (%)</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="<?php echo htmlentities($result->pol_NCD);?>" readonly/>
                                        </div>
                                        <div class="col">
                                          <label>Premium Payable</label>
                                          <input type="text" style="text-align: center;" class="form-control" value="RM <?php echo htmlentities($result->premium);?>" readonly/>
                                        </div>                                                
                                      </div>
                                      <div>
                                        <label>Special Remarks</label>
                                        <textarea type="text" style="text-align: center;" class="form-control" readonly/><?php if(htmlentities($result->remarks) != '' || htmlentities($result->remarks) != '') { echo htmlentities($result->remarks);} else { echo'No Remarks';}?></textarea>
                                      </div>
                                      <!--form mask ends-->
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a data-toggle="modal" data-target="#<?php echo htmlentities($result->pol_id);?>">
                          <i class="icon-eye menu-icon" style="color:blue"></i>
                        </a>
                        <!--<button type="button" class="badge badge-warning" data-toggle="modal" data-target="#<//?php echo htmlentities($result->pol_id);?>">View</button> -->
                        <?php if(htmlentities($result->status)!='renew' && htmlentities($result->status)!='sold' && htmlentities($result->status)!='renew other agent'){ 
                          if(htmlentities($result->c_phone)!='' && htmlentities($result->c_phone) !=NULL) {
                            $c_phone=$result->c_phone; }
                            else {
                              $c_phone='60139711840'; } ?>&emsp;
                              <a data-toggle="tooltip" data-placement="bottom" title="Remind" target="_blank" href="https://web.whatsapp.com/send?phone=<?php echo $c_phone ;?>&text=Assalamualaikum.. Yang dihormati <?php echo ucwords(strtolower(htmlentities($result->c_name)));?>,%0A%0AInsurans MOTOR anda *<?php echo htmlentities($result->v_No);?>* akan tamat pada *<?php echo htmlentities($result->expired_date);?>*. Ini adalah peringatan mesra untuk renew insurans anda. 😁 %0ASila abaikan mesej ini jika anda telah membuat pembaharuan. TQ%0A%0ADaripada :%0AFASTAQIM RESOURCES %0AINSURANS DAN TAKAFUL"><i class="icon-call-out menu-icon"></i><!--<button type="button" class="badge badge-success">Remind</button>--></a>&emsp;
                              <a data-toggle="tooltip" data-placement="bottom" title="Renew"  target="_blank" href="renew.php?pol_id=<?php echo htmlentities($result->pol_id);?>"><i class="icon-like menu-icon"></i><!--<button type="button" class="badge badge-primary">Renew</button>--></a>&emsp;
                              <a data-toggle="tooltip" data-placement="bottom" title="iSearch" target="_blank" href="https://www.mycarinfo.com.my/ISearch/ReceivedReport?VehRegNo=<?php echo htmlentities($result->v_No);?>&version=b2c"><i class="icon-directions menu-icon"></i></a>
                            <?php } else {
                                //null
                            } ?>
                          </td>
                        <?php } } echo $sql; ?>
                      </tr>
                    </tbody>
                  </table>
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
  <!--<script src="vendors/select2/select2.min.js"></script>-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <script src="vendors/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>        
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!--<script src="js/select2.js"></script>-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/modal-demo.js"></script>
  <script src="js/tooltips.js"></script>
  <script src="js/popover.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
<?php } ?>