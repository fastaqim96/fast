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
                        <div class="col-10"> <h4 class="card-title">Roadtax Pricelist Database</h4> </div>
                        <a href="newclient.php">
                        <!--<button type="submit" class="btn btn-primary ml-3">Add New Client</button>-->
                        </a>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr align="center">
                              <th>No</th>
                              <th>Model</th>
                              <th>CC</th>
                              <th>Price (1 THN)</th>
                              <th>Price (6 BLN)</th>
                              <th style="width:20%">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          // $useremail=$_SESSION['login'];
                          $sql = "SELECT *, price/2 as half from roadtax ORDER BY rt_id ASC";
                          $query = $dbh -> prepare($sql);
                          $query->execute();
                          $results=$query->fetchAll(PDO::FETCH_OBJ);
                          $cnt=0;
                          if($query->rowCount() > 0) {
                            foreach($results as $result) { $cnt++; ?>
                          <tr align="center">
                              <td align="center"><?php echo $cnt;?></td>
                              <td align="center"><?php $brand = htmlentities($result->brand); echo ucfirst($brand);?> <?php echo htmlentities($result->model);?></td>
                              <td align="center"><?php echo htmlentities($cc = $result->cc);?></td>
                              <td align="center"><?php echo htmlentities($cc = $result->price);?></td>
                              <td align="center"><?php echo htmlentities($cc = $result->half);?></td>
                              <td>
                                <a href="editclient.php?client=<?php echo htmlentities($result->c_id);?>"><button type="button" class="badge badge-warning">Edit</button></a>
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