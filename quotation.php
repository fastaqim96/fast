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
						<div class="col-lg-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<p class="card-description" style="text-align: center;">ALLIANZ</p>
									<div class="accordion" id="accordion" role="tablist">
										<div class="card">
											<div class="card-header" role="tab" id="headingOne">
												<h6 class="mb-0">
													<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														Kereta Cover No. 1
													</a>
												</h6>
											</div>
											<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : KERETA <br>
														CC :  CC <br>
														<br>
														Nama Ins : ALLIANZ <br>
														Jenis Ins : *No 1 (RM K)* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														1) FREE Towing 150KM (2 Hala). <br>
														2) FREE Minor Roadside Repair. <br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
														2) FREE Sticker Roadtax ALLIANZ. <br>
														3) FREE Random Car Perfume.
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" role="tab" id="headingTwo">
												<h6 class="mb-0">
													<a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														Kereta Cover TPFT
													</a>
												</h6>
											</div>
											<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : KERETA <br>
														CC :  CC <br>
														<br>
														Nama Ins : ALLIANZ <br>
														Jenis Ins : *No 3 Fire & Theft (RM6K)* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														1) FREE Pampasan Banjir. <br>
														2) FREE Pampasan Kematian/Cacat Kekal akibat Kemalangan - RM5,000. <br>
                                                        3) FREE Pendapatan Hospital RM50/hari max 60 hari. <br>
                                                        4) FREE Perbelanjaan Pengkebumian RM1,000.
														<br><br>
														Ulasan :  <br>
														1) Expired : . <br>
														2) FREE Sticker Roadtax ALLIANZ. <br>
														3) FREE Random Car Perfume.
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" role="tab" id="headingThree">
												<h6 class="mb-0">
													<a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
														Motosikal Cover No. 1
													</a>
												</h6>
											</div>
											<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : MOTOSIKAL <br>
														CC :  CC <br>
														<br>
														Nama Ins : ALLIANZ <br>
														Jenis Ins : *No 1 (RM K)* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM2 <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														1) All Rider. <br>
														2) FREE Towing 50KM (2 Hala). <br>
														3) FREE Perlindungan Kemalangan Max RM10K. <br>
														4) FREE Pendapatan Hospital RM100/Hari. <br>
														5) FREE Pampasan Bencana Khas. <br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" role="tab" id="headingFour">
												<h6 class="mb-0">
													<a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
														Motosikal Cover No. 3
													</a>
												</h6>
											</div>
											<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : MOTOSIKAL <br>
														CC :  CC <br>
														<br>
														Nama Ins : ALLIANZ <br>
														Jenis Ins : *No 3 Kosong* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM2 <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														1) All Rider. <br>
														2) FREE Perlindungan Kemalangan Max RM10K. <br>
														3) FREE Pendapatan Hospital RM100/Hari. <br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<p class="card-description" style="text-align: center;">ZURICH TAKAFUL</p>
									<div class="accordion" id="accordion-2" role="tablist">
										<div class="card">
											<div class="card-header" role="tab" id="headingOne-2">
												<h6 class="mb-0">
													<a data-toggle="collapse" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
														Kereta Cover No. 1
													</a>
												</h6>
											</div>
											<div id="collapseOne-2" class="collapse" role="tabpanel" aria-labelledby="headingOne-2" data-parent="#accordion-2">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : KERETA <br>
														CC :  CC <br>
														<br>
														Nama Ins : ZURICH TAKAFUL <br>
														Jenis Ins : *No 1 (RM K)* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														1) FREE Towing 150KM (2 Hala). <br>
														2) FREE Minor Roadside Repair. <br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
														2) FREE Sticker Roadtax ZURICH TAKAFUL. <br>
														3) FREE Random Car Perfume.
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" role="tab" id="headingTwo-2">
												<h6 class="mb-0">
													<a class="collapsed" data-toggle="collapse" href="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
														Kereta Cover TPFT
													</a>
												</h6>
											</div>
											<div id="collapseTwo-2" class="collapse" role="tabpanel" aria-labelledby="headingTwo-2" data-parent="#accordion-2">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : KERETA <br>
														CC :  CC <br>
														<br>
														Nama Ins : ZURICH TAKAFUL <br>
														Jenis Ins : *No 3 Fire & Theft (RM6K)* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
														2) FREE Sticker Roadtax ZURICH TAKAFUL. <br>
														3) FREE Random Car Perfume.
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" role="tab" id="headingThree-2">
												<h6 class="mb-0">
													<a class="collapsed" data-toggle="collapse" href="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2">
														Motosikal Cover No. 1
													</a>
												</h6>
											</div>
											<div id="collapseThree-2" class="collapse" role="tabpanel" aria-labelledby="headingThree-2" data-parent="#accordion-2">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : MOTOSIKAL <br>
														CC :  CC <br>
														<br>
														Nama Ins : ZURICH TAKAFUL <br>
														Jenis Ins : *No 1 (RM K)* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM2 <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														1) All Rider. <br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" role="tab" id="headingFour-2">
												<h6 class="mb-0">
													<a class="collapsed" data-toggle="collapse" href="#collapseFour-2" aria-expanded="false" aria-controls="collapseFour-2">
														Motosikal Cover No. 3
													</a>
												</h6>
											</div>
											<div id="collapseFour-2" class="collapse" role="tabpanel" aria-labelledby="headingFour-2" data-parent="#accordion-2">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : MOTOSIKAL <br>
														CC :  CC <br>
														<br>
														Nama Ins : ZURICH TAKAFUL <br>
														Jenis Ins : *No 3 Kosong* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM2 <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														1) All Rider. <br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
                        <div class="col-lg-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<p class="card-description" style="text-align: center;">TAKAFUL MALAYSIA</p>
									<div class="accordion" id="accordion" role="tablist">
										<div class="card">
											<div class="card-header" role="tab" id="headingOne">
												<h6 class="mb-0">
													<a data-toggle="collapse" href="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">
														Kereta Cover No. 1
													</a>
												</h6>
											</div>
											<div id="collapseOne-3" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : KERETA <br>
														CC :  CC <br>
														<br>
														Nama Ins : TAKAFUL MALAYSIA <br>
														Jenis Ins : *No 1 (RM K)* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														1) FREE Towing 50KM (2 Hala). <br>
														2) FREE Minor Roadside Repair. <br>
														3) FREE Pampasan Kematian/Cacat Kekal akibat Kemalangan - RM15,000/orang. <br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
														2) FREE Random Car Perfume.<br>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" role="tab" id="headingTwo">
												<h6 class="mb-0">
													<a class="collapsed" data-toggle="collapse" href="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
														Kereta Cover TPFT
													</a>
												</h6>
											</div>
											<div id="collapseTwo-3" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : KERETA <br>
														CC :  CC <br>
														<br>
														Nama Ins : TAKAFUL MALAYSIA <br>
														Jenis Ins : *No 3 Fire & Theft (RM6K)* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : -<br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
														2) FREE Random Car Perfume.<br>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" role="tab" id="headingThree">
												<h6 class="mb-0">
													<a class="collapsed" data-toggle="collapse" href="#collapseThree-3" aria-expanded="false" aria-controls="collapseThree-3">
														Motosikal Cover No. 1
													</a>
												</h6>
											</div>
											<div id="collapseThree-3" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : MOTOSIKAL <br>
														CC :  CC <br>
														<br>
														Nama Ins : TAKAFUL MALAYSIA <br>
														Jenis Ins : *No 1 (RM K)* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM2 <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														1) All Rider. <br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" role="tab" id="headingFour">
												<h6 class="mb-0">
													<a class="collapsed" data-toggle="collapse" href="#collapseFour-3" aria-expanded="false" aria-controls="collapseFour-3">
														Motosikal Cover No. 3
													</a>
												</h6>
											</div>
											<div id="collapseFour-3" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
												<div class="card-body">
													<div style="margin: 10px">
														▶ *FASTAQIM RESOURCES* ▶ <br>
														*SSM Reg. No. : 002987227-M* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														*(Agen Sah Insuran/Takaful & R.Tax)* <br>
														*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰* <br>
														<br>
														Nama :  <br>
														No plat :  <br>
														Jenis Kenderaan : MOTOSIKAL <br>
														CC :  CC <br>
														<br>
														Nama Ins : TAKAFUL MALAYSIA <br>
														Jenis Ins : *No 3 Kosong* <br>
														Harga Ins : *RM * <br>
														NCD : % <br>
														Harga R.Tax : RM2 <br>
														Servis Caj : RM10 <br>
														<br>
														JUMLAH: *RM * <br>
														<br>
														Additional Coverage : <br>
														1) All Rider. <br>
														<br>
														Ulasan :  <br>
														1) Expired : . <br>
													</div>
												</div>
											</div>
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