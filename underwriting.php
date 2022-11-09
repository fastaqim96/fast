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
					<div class="row">
						<div class="col-md-3 grid-margin stretch-card">
							<div class="card">
								<div style="margin: 10px">
									<h4 class="card-title" style="text-align: center;">ALLIANZ</h4>
									<p class="card-description" style="text-align: center;">Kereta Persendirian</p>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Comprehensive</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM10K <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 1-15 tahun
											</small>
										</div>

									</div>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">3rd Fire & Theft</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM6K <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 10 - 35 tahun
											</small>
										</div>

									</div>
									<br>
									<p class="card-description" style="text-align: center;">Motosikal Persendirian</p>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Comprehensive</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM1K <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 1 - 7 tahun
											</small>
										</div>

									</div>
									<div class="wrapper d-flex align-items-center py-2">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">3rd Party</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 2-35 tahun
											</small>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 grid-margin stretch-card">
							<div class="card">
								<div style="margin: 10px">
									<h4 class="card-title" style="text-align: center;">AXA AFFIN</h4>
									<p class="card-description" style="text-align: center;">Kereta Persendirian</p>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Comprehensive</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 1-20 tahun <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM10K <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 21 - 30 tahun <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Cover < RM10K & DPPA A
											</small>
										</div>

									</div>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">3rd Fire & Theft</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 7 tahun ke atas <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Cover RM6K - RM20K
											</small>
										</div>

									</div>
									<br>
									<p class="card-description" style="text-align: center;">Motosikal Persendirian</p>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Comprehensive</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 1 - 15 tahun <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM1.5K <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> 500cc, wajib DPPA D
											</small>
										</div>
									</div>
									<div class="wrapper d-flex align-items-center py-2">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">3rd Party</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 3 tahun ke atas <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> 500cc, wajib DPPA D
											</small>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 grid-margin stretch-card">
							<div class="card">
								<div style="margin: 10px">
									<h4 class="card-title" style="text-align: center;">ZURICH TAKAFUL</h4>
									<p class="card-description" style="text-align: center;">Kereta Persendirian</p>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Comprehensive</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 1 - 20 tahun <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM10K
											</small>
										</div>

									</div>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">3rd Fire & Theft</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 4 20 tahun <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM7K
											</small>
										</div>

									</div>
									<br>
									<p class="card-description" style="text-align: center;">Motosikal Persendirian</p>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Comprehensive</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 1-7 tahun
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM1K <br>
											</small>
										</div>

									</div>
									<div class="wrapper d-flex align-items-center py-2">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">3rd Party</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 2 - 35 tahun
											</small>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 grid-margin stretch-card">
							<div class="card">
								<div style="margin: 10px">
									<h4 class="card-title" style="text-align: center;">TAKAFUL MALAYSIA</h4>
									<p class="card-description" style="text-align: center;">Kereta Persendirian</p>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Comprehensive</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM10K <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 1-15 tahun
											</small>
										</div>

									</div>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">3rd Fire & Theft</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM6K <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 10-35 tahun
											</small>
										</div>

									</div>
									<br>
									<p class="card-description" style="text-align: center;">Motosikal Persendirian</p>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Comprehensive</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Min. Cover RM1K <br>
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 1-7 tahun
											</small>
										</div>

									</div>
									<div class="wrapper d-flex align-items-center py-2">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">3rd Party</h6>
											<small class="text-muted mb-0">
												<i class="mdi mdi-map-marker-outline mr-1"> </i> Umur 2-35 tahun
											</small>
										</div>

									</div>
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