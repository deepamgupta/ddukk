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

	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.html"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Activities</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<?php
	function display_activity($activity_type)
	{
		$dir = "./img/activities/" . $activity_type . "/";
		$folders = scandir($dir);
		$details = array();
		foreach ($folders as $folder) {
			if ($folder !== "." and $folder !== ".." and is_dir($dir . $folder)) {
				$name_date = explode("_", $folder);
				$date = end($name_date);
				$name = $name_date[0];
				$detail = array("folder" => $dir . $folder . "/", "name" => $name, "date" => strtotime($date));
				$details[] = $detail;
			}
		}



		usort($details, function ($a, $b) {
			return -($a["date"] <=> $b["date"]);
		});



		foreach ($details as $detail) {
			echo '<div class="col-sm-6 col-md-4 col-lg-3 pl-4 pr-4 mt-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">' . $detail["name"] . '</h5>
						<div class="activities-img">
							<img src="' . $detail["folder"] . scandir($detail["folder"])[2] . '" alt="Avatar" class="image-over">
							<div class="middle-over">
								<a href="#" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<small class="text-muted">' . date("d/m/y", $detail["date"]) . '</small>
					</div>
				</div>
			</div>';
		}
	}
	?>


	<!-- Activities section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>Activities</h3>
				<p>What our students think?</p>
			</div>
			<h4 class="text-center">EXPERT LECTURES</h4>
			<hr>
			<div class="row">
				<?php display_activity("expert_lectures"); ?>
			</div>
			<hr>
			<h4 class="text-center mt-5 pt-4">FIELD VISITS</h4>
			<hr>
			<div class="row">
				<?php display_activity("field_visits"); ?>
			</div>
			<hr>
			<h4 class="text-center mt-5 pt-4">ACHIEVEMENTS</h4>
			<hr>
			<div class="row">
				<?php display_activity("achievements"); ?>
			</div>
		</div>
	</section>
	<!-- Activities section end-->



	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<!-- Back 2 Top -->
	<?php include 'includes/back2Top.php'; ?>

	<!--====== Javascripts & Jquery ======-->
	<?php include 'includes/javascripts.php'; ?>

</body>

</html>