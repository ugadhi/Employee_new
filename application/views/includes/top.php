<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
		
			<div class="m-header">
				<a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
				<a href="index.html" class="b-brand">
					<!-- <div class="b-bg">
						<i class="fas fa-bolt"></i>
					</div>
					<span class="b-title">Dasho</span> -->
					<img src="assets/images/logo.svg" alt="" class="logo images">
					<img src="assets/images/logo-icon.svg" alt="" class="logo-thumb images">
				</a>
			</div>
			<a class="mobile-menu" id="mobile-header" href="#!">
				<i class="feather icon-more-horizontal"></i>
			</a>
			<div class="collapse navbar-collapse">
				<a href="#!" class="mob-toggler"></a>
				
				<ul class="navbar-nav ml-auto">
					
					<li><a href="#" class="displayChatbox"><?php echo $_SESSION['name'] ?></a></li>
					<li><a href="login/logout" class="displayChatbox"><i class="feather icon-power"></i></a></li>
				
				</ul>
			</div>
			
	</header>
	<!-- [ Header ] end -->