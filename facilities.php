<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
	<?php include 'includes/head.php'; ?>
</head>

<body>

	<!-- Page Preloder -->
	<?php include 'includes/preloader.php'; ?>

	<!-- Header -->
	<?php include 'includes/header.php'; ?>

	<!-- Navbar -->
	<?php include 'includes/navbar.php'; ?>

	<!-- Side Nav -->
	<?php include 'includes/sidenav.php'; ?>


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Facilities</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Facilities section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>FACILITIES</h3>
				<p>What our students think?</p>
			</div>
			<div class="row">
				<div class="container">
					<div class="row">



						<?php
							$dir = opendir('./img/facilities');
							while(($file = readdir($dir)) !== FALSE){
								if( $file !== '.' and $file !== '..')
								echo '<div class="col-md-6" style="margin-bottom: 30px;">
								<div class="card no-border">
									<div class="card-body">
										<h5 class="card-title">'.pathinfo($file)['filename'].'</h5>
										<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
										<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
									</div>
									<img class="card-img-bottom" style="height:20rem;" src="./img/facilities/'.$file.'" data-toggle="modal" data-target="#exampleModalCenter" alt="Card image cap">
								</div>
							</div>';
							}
						?>




					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Facilities section end-->

	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<!-- Back 2 Top -->
	<?php include 'includes/back2Top.php'; ?>

	<!--====== Javascripts & Jquery ======-->
	<?php include 'includes/javascripts.php'; ?>

</body>

</html>