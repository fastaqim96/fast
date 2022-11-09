<?php
//SELECT c_id, c_name, c_ic, SUBSTRING(c_ic,5,2) as date2, SUBSTRING(c_ic,3,2) as date FROM client WHERE LENGTH(c_ic) > 10 AND SUBSTRING(c_ic,3,2) = '08' ORDER BY `date2` ASC
//SELECT policy.pol_id, policy.v_No, client.c_name, client.c_ic, SUBSTRING(client.c_ic,5,2) as date, SUBSTRING(client.c_ic,3,2) as month FROM client JOIN policy ON client.c_ic = policy.c_ic WHERE LENGTH(client.c_ic) > 10 AND SUBSTRING(client.c_ic,3,2) = '01' GROUP BY client.c_ic ORDER BY date ASC
session_start();
error_reporting(0);
include('config.php');

if(strlen($_SESSION['alogin'])==0) {
  header('location:index.php');
}
else { 
  if(isset($_POST['submit'])) {
	$name=$_POST['name'];
	$bill=$_POST['bill'];
	$customer=$_POST['customer'];
	
    echo $sql="INSERT INTO bill_payment (name, bill, acc, code) VALUES (:customer,:bill,:name,:name)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':customer',$customer,PDO::PARAM_STR);
    $query->bindParam(':bill',$bill,PDO::PARAM_STR);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->execute();

    $lastInsertId = $dbh->lastInsertId();
    //  if($lastInsertId) {
    //     echo "<script type='text/javascript'>alert('showSwal('success-message')')</script>";
    //     header('refresh:3;url=http://fyppresentation.com/fastaqimresources/clients.php');
    //  } else  {
    //     $error="Something went wrong. Please try again";
    // }
  } ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <?php include ('metadata.php'); ?>
      <!-- plugin css for this page -->
      <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
      <script src="JsBarcode.all.min.js"></script>
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
                    <div class="col-10"> <h4 class="card-title">Bill Payment Database</h4> </div>
                    <!--<button type="submit" class="btn btn-primary ml-3">Add New Client</button>-->
                    <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#barcodeModal">Add New Barcode</button>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr align="center">
                          <th>No</th>
                          <th>Customer Name</th>
                          <th>Bill Name</th>
                          <!--<th>Account</th>-->
                          <th>Barcode</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          // $useremail=$_SESSION['login'];
                        $sql = "SELECT * from bill_payment";
                        $query = $dbh -> prepare($sql);
                          // $query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $arrayBarcodes=array();
                        $cnt=1;
                        if($query->rowCount() > 0) {
                          foreach($results as $result) { 
                            $arrayBarcodes[]=(string)$result->acc; ?>
                            <tr align="center">
                              <td align="center"><?php echo htmlentities($result->product_id);?></td>
                              <td align="left">
                                <?php $name = htmlentities($result->name); echo ucfirst($name);?>
                              </td>
                              <td align="center"><?php echo htmlentities($result->bill);?></td>
                              <!--<td align="center"><?php echo htmlentities($acc = $result->acc);?></td>-->
                              <td><svg id='<?php echo "barcode".$result->acc;?>'></td>
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
              
              <!--Add new product Modal -->
              <div class="modal fade" id="barcodeModal" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="barcodeModalLabel">New barcode
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;
                        </span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label" required>Customer name:
                          </label>
                          <input type="text" class="form-control" id="customer" name="customer" maxlength="200" required>
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label" required>Bill name:
                          </label>
                          <input type="text" class="form-control" id="bill" name="bill" maxlength="200" required>
                        </div>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label" required>Account:
                          </label>
                          <input type="text" class="form-control" id="name" name="name" maxlength="200" required>
                        </div>
                        <hr>
                        <button type="submit" name="submit" class="btn btn-primary">Generate barcode
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!--End add new product Modal -->            

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
        <script type="text/javascript">
      //convert json to JS array data.
      function arrayjsonbarcode(j) {
        json = JSON.parse(j);
        arr = [];
        for (var x in json) {
          arr.push(json[x]);
        }
        return arr;
      }

      //convert PHP array to json data.
      jsonvalue = '<?php echo json_encode($arrayBarcodes) ?>';
      values = arrayjsonbarcode(jsonvalue);

      //generate barcodes using values data.
      for (var i = 0; i < values.length; i++) {
        JsBarcode("#barcode" + values[i], values[i].toString(), {
          format: "codabar",
          lineColor: "#000",
          width: 2,
          height: 30,
          displayValue: true
        }
        );
      }
    </script>
    <!-- End custom js for this page-->
  </body>
  </html>
  <?php } ?>