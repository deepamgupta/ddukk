<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
	<?php include 'includes/head.php'; ?>

	<style>
		.mylist {
			list-style-type: disc;
		}

		#regular li {
			padding: 10px;
		}

		.list-unstyled {
			padding-left: 14px;
		}

		.mybtn {
			background-color: rgb(243, 247, 246);
			outline: none;
			border: none;
			color: black;
			margin-top: 15px;
			margin-left: 19px;
		}

		.mybtn:hover {
			background-color: rgb(181, 184, 183);
		}

		.mybtn:active {
			background-color: #020032;
		}

		.mybtn:focus {
			background-color: #020032;
			box-shadow: 0 0 0 0.2rem rgba(38, 47, 58, 0.5);
		}

		.download-arrow {
			padding: inherit;
		}

		.list-arrow {
			padding-right: 1rem;
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
			<span>Regular Courses</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>REGULAR COURSES</h3>
				<p>What our students think?</p>
			</div>
			<div class="row">
				<div class="container">

					<ul class="list-unstyled" id="regular">
						<li>
							<h5><i class='fas fa-caret-right list-arrow'></i>Diploma</h5>
							<button type="button" class="btn btn-primary btn-block mybtn" onclick="window.open('docs/courses/.pdf')">Scheme<i class='fas fa-arrow-alt-circle-down download-arrow'></i></button>
							<button type="button" class="btn btn-primary btn-block mybtn" onclick="window.open('docs/courses/.pdf')">Syllabus<i class='fas fa-arrow-alt-circle-down download-arrow'></i></button>
						</li>
						<li>
							<h5><i class='fas fa-caret-right list-arrow'></i>B.Voc</h5>
							<div class="container">
								<ul class="list-unstyled mylist">
									<li>
										<h6>L.D</h6>
										<button type="button" class="btn btn-primary btn-block mybtn" onclick="window.open('docs/courses/LD SCHEME.pdf')">Scheme<i class='fas fa-arrow-alt-circle-down download-arrow'></i></button>
										<button type="button" class="btn btn-primary btn-block mybtn" onclick="window.open('docs/courses/LD SYLLABUS.pdf')">Syllabus<i class='fas fa-arrow-alt-circle-down download-arrow'></i></button>
									</li>
									<li>
										<h6>N.D</h6>
										<button type="button" class="btn btn-primary btn-block mybtn" onclick="window.open('docs/courses/ND SCHEME.pdf')">Scheme<i class='fas fa-arrow-alt-circle-down download-arrow'></i></button>
										<button type="button" class="btn btn-primary btn-block mybtn" onclick="window.open('docs/courses/ND SYLLABUS.pdf')">Syllabus<i class='fas fa-arrow-alt-circle-down download-arrow'></i></button>
									</li>
									<li>
										<h6>Handicaps</h6>
										<button type="button" class="btn btn-primary btn-block mybtn" onclick="window.open('docs/courses/.pdf')">Scheme<i class='fas fa-arrow-alt-circle-down download-arrow'></i></button>
										<button type="button" class="btn btn-primary btn-block mybtn" onclick="window.open('docs/courses/.pdf')">Syllabus<i class='fas fa-arrow-alt-circle-down download-arrow'></i></button>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<h5><i class='fas fa-caret-right list-arrow'></i>M.Voc</h5>
							<button type="button" class="btn btn-primary btn-block mybtn" onclick="window.open('docs/courses/.pdf')">Scheme<i class='fas fa-arrow-alt-circle-down download-arrow'></i></button>
							<button type="button" class="btn btn-primary btn-block mybtn" onclick="window.open('docs/courses/.pdf')">Syllabus<i class='fas fa-arrow-alt-circle-down download-arrow'></i></button>
						</li>
						<li>
							<h5><i class='fas fa-caret-right list-arrow'></i>Ph.D.</h5>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</section>
	<!-- About section end-->



	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<!-- Back 2 Top -->
	<?php include 'includes/back2Top.php'; ?>

	<!--====== Javascripts & Jquery ======-->
	<?php include 'includes/javascripts.php'; ?>

</body>

</html>