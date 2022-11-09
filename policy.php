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
      <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
      <!-- End plugin css for this page -->
    </head>

    <body class="sidebar-fixed">
      <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php include ("sidebar.php") ;?>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="card">
                <div class="card-body">
                  <div class="col-12">
                      <div class="form-group d-flex">
                        <div class="col-10"> <h4 class="card-title">Policy Database</h4> </div>
                        <a href="newpolicy.php">
                          <button type="submit" class="btn btn-primary ml-3">Add New Policy</button>
                        </a>
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
                              <th>Coverage</th>
                              <th>Vehicle</th>
                              <th>Premium</th>
                              <!-- <th>Inception Date</th> -->
                              <th>Expiry Date</th>
                              <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          // $useremail=$_SESSION['login'];
                          $sql = "SELECT client.c_name, policy.* FROM policy JOIN client ON client.c_ic=policy.c_ic";
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
                              <td align="center"><?php echo htmlentities($result->pol_cover);?></td>
                              <td align="center"><?php echo htmlentities($result->v_No);?></td>
                              <td align="center"><?php echo htmlentities($result->premium); ?></td>
                              <!-- <td align="center"><?php echo htmlentities($result->renew_date);?></td> -->
                              <td align="center"><?php echo htmlentities($result->expired_date);?></td>
                              <!-- <td align="center"><label class="badge badge-danger">3 days left </label></td> -->
                              <td align="center">
                                <a href="editpolicy.php?pid=<?php echo htmlentities($result->pol_id);?>">
                                  <button class="btn btn-outline-primary">View</button>
                                </a>
                              </td>
                          <?php } } ?>                          
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->

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
      <script src="js/data-table.js"></script>
      <!-- End custom js for this page-->
    </body>
    </html>
   <?php } ?>