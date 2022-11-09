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
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- End plugin css for this page -->
  </head>
  <body class="sidebar-fixed">
    <div class="container-scroller">
      <?php include ("sidebar.php"); $month=date('m'); $year=date('Y'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
              
              <div class="card">
                <div class="card-body">
                  <div class="col-12">
                    <h4 class="card-title" style="text-align: center;">Expiring Policy for This Month</h4> 
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
                          $sql = "SELECT DISTINCT client.*, policy.* FROM policy JOIN client ON client.c_ic=policy.c_ic WHERE policy.expired_date LIKE '%/$month/$year%' ORDER BY policy.expired_date ASC";                          
                          
                          if(isset($_POST['submit'])) {
                              $pol_panel=$_POST['pol_panel'];
                              $sql = "SELECT DISTINCT client.*, policy.* FROM policy JOIN client ON client.c_ic=policy.c_ic WHERE policy.expired_date LIKE '%/$month/$year%'";
                              
                              if($pol_panel && !empty($pol_panel)){
                                $sql .= "AND policy.`pol_panel` LIKE '%$pol_panel%' ORDER BY policy.expired_date ASC";
                                // SELECT DISTINCT client.*, policy.* FROM policy JOIN client ON client.c_ic=policy.c_ic WHERE policy.expired_date LIKE '%05/2019%'
                                // AND policy.pol_panel LIKE '%12%' ORDER BY policy.expired_date ASC
                              }
                          }
                          elseif(isset($_POST['reset'])) {
                              $sql = "SELECT DISTINCT client.*, policy.* FROM policy JOIN client ON client.c_ic=policy.c_ic WHERE policy.expired_date LIKE '%/$month/$year%' ORDER BY policy.expired_date ASC";
                          }
                          
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
                                    <?php echo $expired=htmlentities($result->expired_date);?> <br>
                                    <?php $today=date('d/m/Y'); $interval = $expired - $today; 
                                    if(htmlentities($result->status)!='renew' && htmlentities($result->status)!='sold' && htmlentities($result->status)!='renew other agent') {
                                         if($interval >= 0) { ?>
                                            <label class="badge badge-danger">
                                                <?php echo $interval?> days left
                                            </label>
                                        <?php } 
                                        else { ?>
                                            <label class="badge badge-danger">
                                                <?php echo( abs($interval))?> days ago
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
                                                <textarea type="text" style="text-align: center;" class="form-control" readonly/><?php if(htmlentities($result->remarks) != '' || htmlentities($result->remarks) != '') {echo htmlentities($result->remarks); } else { echo 'No Remarks'; }?> </textarea>
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
<!--               <div class="row">
                    QUERY PER MONTH
                    SELECT COUNT(policy.pol_id) AS cnt, panel.panel_name FROM policy
                    JOIN panel ON policy.pol_panel=panel.panel_id
                    WHERE policy.expired_date LIKE '%/02/2021%'
                    GROUP BY panel.panel_id
                <div class="col-md-7 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Recent Updates</h4>
                      <div class="image-grid row">
                        <div class="col-md-6 pr-md-2">
                          <img class="w-100 img-fluid rounded" src="images/dashboard/Img_1.jpg" alt="images">
                        </div>
                        <div class="col-md-6 pl-md-2">
                          <div class="row">
                            <div class="col-md-12 mb-3 mt-3 mt-md-0">
                              <img class="w-100 img-fluid rounded" src="images/dashboard/Img_2.jpg" alt="images">
                            </div>
                            <div class="col-md-12">
                              <img class="w-100 img-fluid rounded" src="images/dashboard/Img_3.jpg" alt="images">
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus, nascetur ridiculus mus.</p>
                      <div class="d-flex align-items-center">
                        <span class="d-none d-sm-inline-block"><strong>jack Menqu</strong> All of Rwanda is at high elevation</span>
                        <span class="ml-auto text-muted">7:30 pm<i class="ml-2 mdi mdi-heart-outline"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Todo list</h4>
                      <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">
                        <button class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button>
                      </div>
                      <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse todo-list">
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Meeting with Alisa
                              </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Create invoice
                              </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Print Statements
                              </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                          <li class="completed">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox" checked>
                                Prepare for presentation
                              </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="checkbox" type="checkbox">
                                Pick up kids from school
                              </label>
                            </div>
                            <i class="remove mdi mdi-close-circle-outline"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
<!--               <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Admin Dept</h4>
                      <div class="w-50 mt-5 mb-4 mx-auto">
                        <div id="revenueCircle3" class="progressbar-js-circle"></div>
                      </div>
                      <h4 class="text-center"><strong>Storage Size</strong></h4>
                      <h4 class="text-center"><strong>1.98TB</strong></h4>
                      <div class="d-flex row mt-5">
                        <div class="col">
                          <p class="text-left mb-2">1.30 GB free</p>
                          <h4 class="text-left"><strong>35.4%</strong></h4>
                        </div>
                        <div class="col">
                          <p class="text-right mb-2">1.30 GB free</p>
                          <h4 class="text-right"><strong>35.4%</strong></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Recent Updates</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <tr>
                            <th>Asigned Name</th>
                            <th>Progress</th>
                            <th>Amount</th>
                            <th>Deadline</th>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div><img src="images/faces/face2.jpg" alt="profile image"></div>
                                <div class="ml-3">
                                  <p class="mb-1">Jessica T. Phillips</p>
                                  <small class="text-muted">Sales Assistant</small>
                                </div>
                              </div>
                            </td>
                            <td><canvas id="areaChart_1" style="height:30px; max-width:130px;"></canvas></td>
                            <td>$450.12</td>
                            <td>Mar 08 2018</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div><img src="images/faces/face1.jpg" alt="profile image"></div>
                                <div class="ml-3">
                                  <p class="mb-1">Luke J. Sain</p>
                                  <small class="text-muted">Software Engineer</small>
                                </div>
                              </div>
                            </td>
                            <td><canvas id="areaChart_2" style="height:30px; max-width:130px;"></canvas></td>
                            <td>$124.66</td>
                            <td>Mar 09 2018</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div><img src="images/faces/face4.jpg" alt="profile image"></div>
                                <div class="ml-3">
                                  <p class="mb-1">Mark C. Diaz</p>
                                  <small class="text-muted">Accountant</small>
                                </div>
                              </div>
                            </td>
                            <td><canvas id="areaChart_3" style="height:30px; max-width:130px;"></canvas></td>
                            <td>$763.00</td>
                            <td>Mar 10 2018</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div><img src="images/faces/face6.jpg" alt="profile image"></div>
                                <div class="ml-3">
                                  <p class="mb-1">Margeret V. Ligon</p>
                                  <small class="text-muted">Software Engineer</small>
                                </div>
                              </div>
                            </td>
                            <td><canvas id="areaChart_4" style="height:30px; max-width:130px;"></canvas></td>
                            <td>$120.76</td>
                            <td>Mar 11 2018</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div><img src="images/faces/face8.jpg" alt="profile image"></div>
                                <div class="ml-3">
                                  <p class="mb-1">Messy max</p>
                                  <small class="text-muted">Personnel Lead</small>
                                </div>
                              </div>
                            </td>
                            <td><canvas id="areaChart_5" style="height:30px; max-width:130px;"></canvas></td>
                            <td>$450.20</td>
                            <td>Mar 12 2018</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
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
      <script src="js/progress-bar.js"></script>
      <!-- End custom js for this page-->
    </body>
    </html>
    <?php } ?>