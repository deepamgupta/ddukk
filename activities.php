<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
	<?php include 'includes/head.php'; ?>
	<style>
		.activities-img {
			height: 10rem;
		}

		@media only screen and (max-width: 479px) {
			.activities-img {
				height: 14rem;
			}
		}

		/* 
		body {
			font-family: Arial;
			margin: 0;
		}

		* {
			box-sizing: border-box;
		} */
		/* 
		img {
			vertical-align: middle;
		} */

		/* Position the image container (needed to position the left and right arrows) */
		.activities-container {
			position: relative;
		}

		/* Hide the images by default */
		.mySlides {
			display: none;
		}

		/* Add a pointer when hovering over the thumbnail images */
		.cursor {
			cursor: pointer;
		}

		/* Next & previous buttons */
		.prev,
		.next {
			user-select: none;
			-webkit-user-select: none;
		}

		.prev {
			float: left;
		}

		/* Position the "next button" to the right */
		.next {
			float: right;
			border-radius: 3px 0 0 3px;
		}

		/* Number text (1/3 etc) */
		.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			background :#f6993a;
			opacity: 0.9;
			/* top: 0; */
		}

		/* Container for image text */
		.caption-container {
			text-transform: uppercase;
			text-align: center;
			background-color: #222;
			padding: 2px 16px;
			color: white;
		}

		.activity-row:after {
			content: "";
			display: table;
			clear: both;
		}

		/* Six columns side by side */
		.column {
			float: left;
			width: 16.66%;
		}

		/* Add a transparency effect for thumnbail images */
		.demo {
			opacity: 0.6;
			padding: 0.3rem;
			height: 4rem;
			height: 12rem;
		}

		.active,
		.demo:hover {
			opacity: 1;
		}






		.overlay {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 600;
			top: 0;
			left: 0;
			background-color: rgb(0, 0, 0);
			background-color: rgba(0, 0, 0, 0.9);
			overflow-x: hidden;
			transition: 0.5s;
		}

		.overlay-content {
			position: relative;
			top: 25%;
			width: 100%;
			text-align: center;
			margin-top: 30px;
		}

		.overlay a {
			padding: 8px;
			text-decoration: none;
			font-size: 36px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.overlay a:hover,
		.overlay a:focus {
			color: #f1f1f1;
		}

		.overlay .closebtn {
			position: absolute;
			top: 20px;
			right: 45px;
			font-size: 60px;
		}

		@media screen and (max-height: 450px) {
			.overlay a {
				font-size: 20px
			}

			.overlay .closebtn {
				font-size: 40px;
				top: 15px;
				right: 35px;
			}
		}
	</style>
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
	function display_activity($activity_type, $color)
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
				<div class="card border-' . $color . '">
					<div class="card-body">
						<h6 class="card-title">' . $detail["name"] . '</h6>
						<div class="activities-img">
							<img src="' . $detail["folder"] . scandir($detail["folder"])[2] . '" alt="Avatar" class="image-over" style="height:inherit;">
							<div class="middle-over">
								<a href="javascript:void(0)" class="btn btn-' . $color . ' btn-sm" onclick="openNav(\'' . $detail["folder"] . '\',\'' . $detail["name"] . '\')"><i class="fas fa-plus"></i></a>
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
			<h5 class="text-center">EXPERT LECTURES</h5>
			<hr>
			<div class="row">
				<?php display_activity("expert_lectures", "info"); ?>
			</div>
			<hr>
			<h5 class="text-center mt-5 pt-4">FIELD VISITS</h5>
			<hr>
			<div class="row">
				<?php display_activity("field_visits", "success"); ?>
			</div>
			<hr>
			<h5 class="text-center mt-5 pt-4">ACHIEVEMENTS</h5>
			<hr>
			<div class="row">
				<?php display_activity("achievements", "warning"); ?>
			</div>
		</div>
	</section>
	<!-- Activities section end-->


	<!-- Slideshow Section -->
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<div class="activities-container container" id="slideshow">

			</div>
		</div>

		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("demo");
				// var captionText = document.getElementById("caption");
				if (n > slides.length) {
					slideIndex = 1
				}
				if (n < 1) {
					slideIndex = slides.length
				}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
				// captionText.innerHTML = dots[slideIndex - 1].alt;
			}
		</script>

	</div>

	<!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->



	<script>
		function openNav(folder, name) {
			// alert(name);

			// AJAX

			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("slideshow").innerHTML = this.responseText;
				}
				// alert(folder);
			};
			xmlhttp.open("GET", "activities_slideshow.php?folder=" + folder + "&name=" + name, true);
			xmlhttp.send();
			document.getElementById("myNav").style.width = "100%";

			// AJAX
		}

		function closeNav() {
			document.getElementById("myNav").style.width = "0%";
		}
	</script>

	<!-- Slideshow Section End -->


	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<!-- Back 2 Top -->
	<?php include 'includes/back2Top.php'; ?>

	<!--====== Javascripts & Jquery ======-->
	<?php include 'includes/javascripts.php'; ?>

</body>

</html>