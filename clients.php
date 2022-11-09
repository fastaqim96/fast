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
                        <div class="col-10"> <h4 class="card-title">Client Database</h4> </div>
                        <a href="newclient.php">
                        <button type="submit" class="btn btn-primary ml-3">Add New Client</button>
                        </a>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr align="center">
                              <th>No</th>
                              <th>Full Name</th>
                              <th>I/C No.</th>
                              <th>Phone</th>
                              <th>Policy(s)</th>
                              <th style="width:20%">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          // $useremail=$_SESSION['login'];
                          $sql = "SELECT * from client  ORDER BY c_id ASC";
                          $query = $dbh -> prepare($sql);
                          // $query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
                          $query->execute();
                          $results=$query->fetchAll(PDO::FETCH_OBJ);
                          $cnt=1;
                          if($query->rowCount() > 0) {
                            foreach($results as $result) { ?>
                          <tr align="center">
                              <td align="center"><?php echo htmlentities($result->c_id);?></td>
                              <td align="left">
                                <?php $name = htmlentities($result->c_name); echo ucfirst($name);?>
                              </td>
                              <td align="center"><?php echo htmlentities($result->c_ic);?></td>
                              <td align="center"><?php echo htmlentities($phone = $result->c_phone);?></td>
                              <td></td>
                              <td>
                                <a href="editclient.php?client=<?php echo htmlentities($result->c_id);?>"><button type="button" class="badge badge-warning">Edit</button></a>
                                <a href="https://web.whatsapp.com/send?phone=6<?php echo $phone;?>&text=Assalamualaikum <?php echo $name;?>" target="_blank">
                                    <button type="button" class="badge badge-success">Whatsapp</button>
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