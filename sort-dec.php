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
    <?php include ('metadata.php'); ?>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="vendors/jquery-bar-rating/css-stars.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
  </head>
  <body class="sidebar-fixed">
    <div class="container-scroller">
      <?php include ("sidebar.php"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
              <div class="card">
                <div class="card-body">
                  <div class="col-12">
                    <h4 class="card-title" style="text-align: center;">Expiring Policy for This Month</h4> 
                  </div>
                  <div class="col-12">
                    <div class="alert alert-warning" role="alert" style="text-align: center;">
                      <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                    </div>
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
                            <th>Status</th>
                            <th style="width:20%">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $year=date('Y');
                          $sql = "SELECT DISTINCT client.*, policy.* FROM policy JOIN client ON client.c_ic=policy.c_ic WHERE policy.expired_date LIKE '%/12/$year%' ORDER BY policy.expired_date ASC";
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
                                    <?php echo $expired=htmlentities($result->expired_date);?> <br>
                                    <?php $today=date('d-m-Y');
                                    
                                    //change date format first
                                    $date = str_replace('/', '-', $expired);
                                    $newexpired = date('d-m-Y', strtotime($date));
                                    $newToday = date("d-m-Y", strtotime($today));
                                    //end of date format
                                    
                                    $datediff = strtotime($newToday) - strtotime($newexpired);
                                    $interval = round($datediff / (60 * 60 * 24));
                                    
                                    if(htmlentities($result->status)!='renew' && htmlentities($result->status)!='sold' && htmlentities($result->status)!='renew other agent') {
                                         if($interval >= 0) { ?>
                                            <label class="badge badge-danger">
                                                <?php echo $interval?> days ago
                                            </label>
                                        <?php } 
                                        else { ?>
                                            <label class="badge badge-primary">
                                                <?php echo(abs($interval))?> days left
                                            </label>
                                        <?php }
                                    } else {
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
                                                <?php echo htmlentities($result->c_ic);?>
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
                                                <textarea type="text" style="text-align: center;" class="form-control" readonly/>
                                                <?php if(htmlentities($result->remarks) != '' || htmlentities($result->remarks) != '') {
                                                  echo htmlentities($result->remarks);
                                                } else {
                                                  echo 'No Remarks';
                                                }?>
                                              </textarea>
                                            </div>
                                            <!--form mask ends-->
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <button type="button" class="badge badge-warning" data-toggle="modal" data-target="#<?php echo htmlentities($result->pol_id);?>">View</button> 
                              <?php if(htmlentities($result->status)!='renew' && htmlentities($result->status)!='sold' && htmlentities($result->status)!='renew other agent'){ 
                                if(htmlentities($result->c_phone)!='' && htmlentities($result->c_phone) !=NULL) {
                                    $c_phone=$result->c_phone; }
                                else {
                                    $c_phone='60139711840'; } ?>
                                <a target="_blank" href="https://web.whatsapp.com/send?phone=<?php echo $c_phone ;?>&text=Assalamualaikum.. Yang dihormati <?php echo ucwords(strtolower(htmlentities($result->c_name)));?>,%0A%0AInsurans MOTOR anda *<?php echo htmlentities($result->v_No);?>* akan tamat pada *<?php echo htmlentities($result->expired_date);?>*. Ini adalah peringatan mesra untuk renew insurans anda. 😁 %0ASila abaikan mesej ini jika anda telah membuat pembaharuan. TQ%0A%0ADaripada :%0AFASTAQIM RESOURCES %0AINSURANS DAN TAKAFUL">
                                  <button type="button" class="badge badge-success">Remind</button></a>
                                <a target="_blank" href="renew.php?pol_id=<?php echo htmlentities($result->pol_id);?>">
                                  <button type="button" class="badge badge-primary">Renew</button>
                                </a>
                              <?php } else{
                                    //null
                              } ?>
                            </td>
                          <?php } } ?>                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
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
      <script src="js/dashboard.js"></script>
      <script src="js/data-table.js"></script>
      <script src="js/modal-demo.js"></script>
      <!-- End custom js for this page-->
    </body>
    </html>
    <?php } ?>