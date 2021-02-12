<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.phoenixcoded.net/dasho/bootstrap/default/dt_ext_col_reorder.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 07:29:45 GMT -->
<head>

	<title>Home</title>
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


	<!-- data tables css -->
	<link rel="stylesheet" href="assets/plugins/data-tables/css/datatables.min.css">

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
	<!-- [ Main Content ] start -->
	<section class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">


							<div class="row">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-header">
											<h5>Records</h5>
										</div>
										<div class="card-body">
											<div class="dt-responsive table-responsive">
												<table id="realtime-reorder" class="table table-striped table-bordered nowrap">
													<thead>
														<tr>
															<th>Name</th>
															<th>Email</th>
															<th>phone</th>
															<th>status</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($employees as $employee) { ?>
														<tr>
															<td><?php echo $employee['name'] ?></td>
															<td><?php echo $employee['email'] ?></td>
															<td><?php echo $employee['phone'] ?></td>
															<td><a href="<?php echo base_url() ?>viewspecificrport?id=<?php echo $employee['id'] ?>">view</a></td>
														</tr>
														<?php } ?>
													</tbody>
													<tfoot>
														<tr>
															<th>Name</th>
															<th>Email</th>
															<th>phone</th>
															<th>status</th>
														</tr>
													</tfoot>
												</table>
											</div>
										</div>
									</div>
								</div>


							</div>
							<!-- [ Main Content ] end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- [ Main Content ] end -->


	<!-- Required Js -->
	<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/menu-setting.min.js"></script>


	<!-- datatable Js -->
	<script src="assets/plugins/data-tables/js/datatables.min.js"></script>
	<script src="assets/js/pages/data-reorder-custom.js"></script>

</body>

</html>
