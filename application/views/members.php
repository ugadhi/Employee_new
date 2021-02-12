<!DOCTYPE html>
<html lang="en">

<head>
	<title>Add Employee Details</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Dasho Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Dasho, Dasho bootstrap admin template">
	<meta name="author" content="Phoenixcoded" />

	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.svg" type="image/x-icon">
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
	<!-- animation css -->
	<link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<?php include('includes/includes.php') ?>
	<!-- [ navigation menu ] end -->
	<?php include('includes/top.php') ?>
	<!-- [ chat user list ] start -->
	
	<!-- [ chat user list ] end -->


	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							
							<div class="row">
								<!-- [ form-element ] start -->
								<div class="col-lg-12">



									<div class="card">
										<div class="card-header">
											<h5>Add Users</h5>
										</div>
										<div class="card-body">
											<form method="post" action="members/addinfos">
												<div class="form-group row">
													<div class="col-lg-4">
														<label class="form-label">Name:</label>
														<input type="text" name="name" class="form-control" placeholder="Enter Name">
													</div>
													<div class="col-lg-4">
														<label class="form-label">Email:</label>
														<input type="text" name="email" class="form-control" placeholder="Enter Email">

													</div>
													<div class="col-lg-4">
														<label class="form-label">Phone:</label>
														<input type="Number" name="phone" class="form-control" placeholder="Enter Phone">

													</div>
												</div>
												



												<div class="form-group row right" style="float: rigth">
													<div class="col-lg-12 rigth">
														
														<input type="submit" value="Success" class="btn btn-success right">
														<input type="reset" value="reset" class="btn btn-light right">

													</div>
												</div>
											</form>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Required Js -->
	<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/menu-setting.min.js"></script>


	<div class="footer-fab">
		<div class="b-bg">
			<i class="fas fa-question"></i>
		</div>
		<div class="fab-hover">
			<ul class="list-unstyled">
				<li><a href="http://html.phoenixcoded.net/doc/index-bc-package.html" target="_blank" data-text="UI Kit" class="btn btn-icon btn-rounded btn-info m-0"><i class="feather icon-layers"></i></a></li>
				<li><a href="doc/index.html" target="_blank" data-text="Document" class="btn btn-icon btn-rounded btn-primary m-0"><i class="feather icon feather icon-book"></i></a></li>
			</ul>
		</div>
	</div>

</body>


<!-- Mirrored from html.phoenixcoded.net/dasho/bootstrap/default/form2_lay-multicolumn.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 07:29:23 GMT -->
</html>
