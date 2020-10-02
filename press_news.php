<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
	<?php include 'includes/head.php'; ?>
	<style>
		.press-news img {
			height: auto;
			width: 100%;
			margin-bottom: 5%;
			max-height: 25rem;
			transition: transform 0.2s linear, filter 0.2s linear;
		}
		.press-news img:hover{
			transform: scale(0.96);
			filter: brightness(70%);
		}

		.zoom-in {
			cursor: zoom-in;
		}

		/* Clear floats after the columns */
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
			<a href="index.php"><i class="fa fa-home"></i>Home</a> <i class="fa fa-angle-right"></i>
			<span>Pess News</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->



	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>Press News</h3>
				<p>We in the media</p>
			</div>

			<div class="row">
				<?php
				$dir = "./img/press_news/";
				$images = scandir($dir);
				
				array_splice($images, 0, 2);

				for ($i = 0; $i < 4 && $i < count($images); ++$i) {
					echo '<div class="press-news col-lg-3 col-md-3 col-sm-6 col-xs-6">';
					for ($j = $i; $j < count($images); $j += 4) {
						echo '<img onclick="modalFun(this)" data-toggle="modal" data-target="#myModal" src="' . $dir . $images[$j] . '" class="img-fluid img-thumbnail zoom-in">';
					}
					echo '</div>';
				}
				?>
			</div>


			<!-- Button to Open the Modal -->
			<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				Open modal
			</button> -->
			<div class="modal fade" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<!-- <div class="modal-header">
							<h4 class="modal-title">Modal Heading</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div> -->

						<!-- Modal body -->
						<div class="modal-body">
							<img src="" id="modal-image">
						</div>

						<!-- Modal footer -->
						<!-- <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div> -->

					</div>
				</div>
			</div>
		</div>


	</section>
	<!-- About section end-->

	<script>
		function modalFun(image) {
			document.getElementById("modal-image").src = image.src;
		}
	</script>


	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<!-- Back 2 Top -->
	<?php include 'includes/back2Top.php'; ?>

	<!--====== Javascripts & Jquery ======-->
	<?php include 'includes/javascripts.php'; ?>

</body>

</html>