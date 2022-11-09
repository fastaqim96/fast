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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
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
                    <h4 class="card-title" style="text-align: center;">Report for This Month</h4> 
                  </div>
                  <div class="col-12">
                    <div class="alert alert-warning" role="alert" style="text-align: center;">
                      <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <h4 class="card-title">Line chart</h4>
                      <div id="curve_chart" style="width: 100%"></div>                        
                        <!--QUERY PER MONTH-->
                        <!--SELECT COUNT(policy.pol_id) AS cnt, panel.panel_name FROM policy-->
                        <!--JOIN panel ON policy.pol_panel=panel.panel_id-->
                        <!--WHERE policy.expired_date LIKE '%/02/2021%'-->
                        <!--GROUP BY panel.panel_id-->
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
      <script src="vendors/d3/d3.min.js"></script>
      <script src="vendors/c3/c3.min.css"></script>
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="js/off-canvas.js"></script>
      <script src="js/hoverable-collapse.js"></script>
      <script src="js/misc.js"></script>
      <script src="js/settings.js"></script>
      <script src="js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="js/c3.js"></script>
      <!-- End custom js for this page-->
    </body>
    </html>
    <?php } ?>