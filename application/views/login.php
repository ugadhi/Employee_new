<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login</title>
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

<div class="auth-wrapper">
	<div class="auth-content container">
		<div class="card">
			<div class="row align-items-center">
				<div class="col-md-8">
					<form action="login/userlogin" method="post">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Login into your account</h4>
						<div class="form-group mb-2">
							<label class="form-label">Enter Email</label>
							<input type="email" class="form-control" name="email" placeholder="name@sitename.com">
						</div>
						<div class="form-group mb-3">
							<label class="form-label">Enter Password</label>
							<input type="password" class="form-control" name="password" placeholder="Allow only max 14 character">
						</div>
						<input type="submit" class="btn btn-primary mb-4" value="Login">
						<!-- <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> -->
					</div>
				</form>
				</div>
				<div class="col-md-4 ">
					<img src="assets/myimg/conversation.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>



</body>

</html>
