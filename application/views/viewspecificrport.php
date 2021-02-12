<?php

$dataPoints = $dataPoints

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.phoenixcoded.net/dasho/bootstrap/default/chart-highchart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 07:30:07 GMT -->
<head>

	<title>Dasho - Bootstrap 4 Admin Template</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
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
<script>
	window.onload = function () {

		var chart = new CanvasJS.Chart("chartContainer", {
			title: {
				text: "Pulse Rate"
			},
			axisY: {
				title: "Pulse Rate"
			},
			data: [{
				type: "line",
				dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();

	}
</script>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>

	
	<?php include('includes/includes.php') ?>
	<?php include('includes/top.php') ?>
	
	

	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">


							<div class="row">
								<!-- [ bar-Chart ] start -->
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header">
											<h5>User Daily Report</h5>
										</div>
										<div class="card-body">
											<div id="chartContainer" style="width: 100%; height: 450px;"></div>
										</div>

									</div>
								</div>

							</div>
							<div class="row">
								<!-- [ form-element ] start -->
								<div class="col-sm-12">
									<!-- Basic Inputs -->
									<form method="post" action="viewspecificrport/sendmail">
										<div class="card">
											<div class="card-header">
												<h5>Basic Inputs</h5>
											</div>
											<input type="hidden" name="semail" value="<?php echo $userdetail['0']['email'] ?>">
											<input type="hidden" name="spass" value="<?php echo $userdetail['0']['mailpass'] ?>">
											<input type="hidden" name="tomail" value="<?php echo $empdatails['0']['email'] ?>">
											<input type="hidden" name="replay" value="No Replay">
											<div class="card-body">
												<div class="form-group mb-0">
													<label class="form-label" for="exampleTextarea">Textarea</label>
													<textarea class="form-control" name="message" rows="3"></textarea>
												</div>
											</div>
											<div class="card-footer">
												<input type="submit" class="btn btn-primary mr-2" value="Send Mail">
											</div>
										</div>
									</form>
									<!-- HTML Input Types -->

								</div>

								<!-- [ form-element ] end -->
							</div>
							<!-- [ Main Content ] end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ Main Content ] end -->


	<!-- Required Js -->
	<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/menu-setting.min.js"></script>


	<!-- highchart chart -->
	<!-- <script src="assets/plugins/chart-highchart/js/highcharts.js"></script> -->
	<!-- <script src="assets/plugins/chart-highchart/js/highcharts-3d.js"></script> -->
	<!-- <script src="assets/js/pages/chart-highchart-custom.js"></script> -->
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



</body>


<!-- Mirrored from html.phoenixcoded.net/dasho/bootstrap/default/chart-highchart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 07:30:19 GMT -->
</html>
