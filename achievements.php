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

		/* Position the image container (needed to position the left and right arrows) */
		.activities-container {
			position: relative;
		}

		/* Hide the images by default */
		.mySlides {
			display: none;
			margin: auto;
			/* transition: visibility 0.3s linear, opacity 0.3s linear; */
		}

		.mySlides img {
			height: 35rem;
		}

		/* Add a pointer when hovering over the thumbnail images */
		.cursor {
			cursor: pointer;
		}

		/* Number text (1/3 etc) */
		.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			background: #f6993a;
			/* top: 0; */
		}

		/* Container for image text */
		.caption-container {
			text-transform: uppercase;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 2rem;
			background-color: #f6993a;
			padding: 10px 16px;
			color: white;
			width: 30rem;
			border-radius: 7px;
		}

		.activity-row:after {
			content: "";
			display: table;
			clear: both;
		}

		/* Add a transparency effect for thumnbail images */
		.demo {
			opacity: 0.9;
			/* padding: 0.1rem; */
			height: 12rem;
			margin-bottom: 10%;
		}

		.active,
		.demo:hover {
			opacity: 1;
		}

		.card {
			transition: transform 0.1s linear;
		}

		.card:hover {
			transform: scale(0.97);
		}




		.overlay {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1000;
			top: 0;
			left: 0;
			background-color: rgb(0, 0, 0);
			background-color: rgba(0, 0, 0, 0.9);
			overflow-x: hidden;
			transition: 0.3s;
		}

		.overlay-content {
			position: relative;
			top: 11%;
			width: 100%;
			text-align: center;
			/* margin-top: 30px; */
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
			top: 0px;
			right: 2rem;
			font-size: 60px;
		}

		@media screen and (max-width: 450px) {
			.overlay a {
				font-size: 20px
			}

			.overlay .closebtn {
				font-size: 40px;
				top: 15px;
				right: 35px;
			}

			.mySlides img {
				height: 15rem;
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

	<!-- Side Nav -->
	<?php include 'includes/sidenav.php'; ?>

	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Student Achievements</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->



	<?php
	function display_activity($activity_type, $color)
	{

		$dir = "./img/achievements/" . $activity_type . "/";
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
									<a href="javascript:void(0)" class="btn btn-' . $color . ' btn-lg" onclick="openNav(\'' . $detail["folder"] . '\',\'' . $detail["name"] . '\')"><i class="fas fa-plus"></i></a>
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
				<h3>Student Achievements</h3>
				<p>Our students have that Extra Potential</p>
			</div>



			<h5 class="text-center mt-5">Shivani Pawar - Yoga</h5>
			<hr>
			<div class="row">
				<?php display_activity("Shivani Pawar - Yoga", "warning"); ?>
			</div>


			<h5 class="text-center mt-5">Eshika Raghuvanshi - Volleyball</h5>
			<hr>
			<div class="row">
				<?php display_activity("Eshika Raghuvanshi - Volleyball", "danger"); ?>
			</div>



		</div>
	</section>
	<!-- Activities section end-->


	<!-- Slideshow Section -->
	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<div class="activities-container container-fluid">
				<div class="row">
					<div class="col-lg-2" onclick="closeNav()"></div>
					<div class="col-lg-8" id="slideshow"></div>
					<div class="col-lg-2" onclick="closeNav()"></div>
				</div>
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