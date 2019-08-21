<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
	<?php include 'includes/head.php'; ?>
</head>

<?php
	$conn = mysqli_connect("localhost", "root", "root", "students");
	if(isset($_POST[""]))
?>

<body>

	<!-- Page Preloder -->
	<?php include 'includes/preloader.php'; ?>

	<!-- Header -->
	<?php include 'includes/header.php'; ?>

	<!-- Navbar -->
	<?php include 'includes/navbar.php'; ?>

	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.html"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Feedback</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->

	<!-- Feedback section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>FEEDBACK</h3>
				<p>What our students think?</p>
			</div>
			<div class="row">
				<form method="POST" action="form.php">
					<div class="group">
						<input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
						<label>Username</label>
					</div>
					<div class="group">
						<input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
						<label>Password</label>
					</div>
					<button type="submit" class="button buttonBlue">Login
						<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
					</button>
				</form>
			</div>
		</div>
	</section>
	<!-- Feedback section end-->


	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<!-- Back 2 Top -->
	<?php include 'includes/back2Top.php'; ?>

	<!--====== Javascripts & Jquery ======-->
	<?php include 'includes/javascripts.php'; ?>

</body>

</html>