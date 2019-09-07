<!DOCTYPE html>
<html lang="en">


<!-- Head -->

<head>
	<?php include 'includes/head.php'; ?>

	<!-- gallery stufff style start -->

	<style>
		/* body {
			max-width: 100%;
			overflow-x: hidden;
		
		}
		html {
			box-sizing: border-box;
		}
		*,
		*:before,
		*:after {
			box-sizing: inherit;
		}
		.column {
			float: left;
			width: 30%;
			margin-bottom: 50px;
			padding: 0 30px;
			margin-left: 20px;
		}
		@media screen and (max-width: 650px) {
			.column {
				width: 100%;
				display: block;
			}
		}
		.card:hover {
			box-shadow: 2px 2px 5px 2px #bdc3c7;
		}
		.card {
			box-shadow: 2px 2px 20px 8px #bdc3c7;
		
			border-radius: 0px;
			transition: 0.1s ease-in;
		}
		.container {
			padding: 0 20px;
		}
		.container::after,
		.row::after {
			content: "";
			clear: both;
			display: table;
		}
		.title {
			color: grey;
		}
		body {
		
		}
		.button {
			border: none;
			border-radius: 20px;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: white;
			background-color: #e67e22;
			text-align: center;
			cursor: pointer;
			width: 100%;
		}
		.card img {
			padding: 7px;
		}
		.button:hover {
			background-color: #d35400;
		} */
		/* .row{
        padding-left: 80px;
        padding-right: 80px;
    } */
		body {
			/* font-family:'Times New Roman', Times, serif; */
		}

		/* html {
            box-sizing: border-box;
        } */
		/* *, *:before, *:after {
            box-sizing: inherit;
        } */
		.column {
			float: left;
			width: 30%;
			margin-bottom: 50px;
			padding: 0 30px;
			margin-left: 20px;
		}

		@media screen and (max-width: 650px) {
			.column {
				width: 100%;
				display: block;
				padding: 0px 0px;
				margin-left: 0px;
			}

			body {
				overflow-x: hidden;
			}

			/* iframe{
                position:relative;
                left:-15%;
            }  */
		}

		.card:hover {
			box-shadow: 2px 2px 5px 2px #bdc3c7;
		}

		.card {
			box-shadow: 2px 2px 20px 8px #bdc3c7;
			/*#8395a7*/
			border-radius: 0px;
			transition: 0.3s ease-in;
		}

		.container {
			padding: 0 20px;
		}

		.container::after,
		.row::after {
			content: "";
			clear: both;
			display: table;
		}

		.title {
			color: grey;
		}

		body {
			/* background-color: #ecf0f1; */
			overflow-x: hidden;
		}

		.button {
			border: none;
			border-radius: 20px;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: white;
			background-color: #1E90FF;
			/* #e67e22; */
			text-align: center;
			cursor: pointer;
			width: 100%;
		}

		.card img {
			padding: 7px;
		}

		.button:hover {
			background-color: #0c579f;
		}

		.ok {
			padding-left: 50px;
			padding-right: 50px;
		}
	</style>
	<!-- gallery stufff style end -->

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


	<!-- gallery work start -->

	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Gallery</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>Gallery</h3>
				<!-- <p>What our students think?</p> -->
			</div>
			<div class="row">

				<div class="row ok">
					<?php
					$fo = opendir("img/gallery");
					//$ns = 1;
					while ($file = readdir($fo)) {  //$dir_name=preg_replace('/.[^.]*$/', '', basename($file)); 
						if ($file != "." && $file != ".." && $file != "Thumbs.db") {
							$dir_name = basename($file);
							$fofo = opendir("img/gallery/$dir_name");
							while ($filefile = readdir($fofo)) {
								if ($filefile != "." && $filefile != ".." && $filefile != "Thumbs.db") {
									$photo = $filefile;
									break;
								}
							}
							echo "<div class='column'>";
							echo "<a href ='tout.php?option=";
							echo basename($file);
							echo "' style='margin-left:10px ; color:black; text-decoration:none; '>";
							echo  "   <div class='card'>
									<img src='img/gallery/$dir_name/$photo' alt='Jane' style='width:100%;'> 
									<div class='container'>
									<h2 style='font-size:25px; margin-bottom:5px;'>";
							echo basename($file);
							echo "</h2><p><button class='button' >View more</button></p> </div></div>";
							echo "</a></div>";
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>

	<!-- gallery work end -->


	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<!-- Back 2 Top -->
	<?php include 'includes/back2Top.php'; ?>

	<!--====== Javascripts & Jquery ======-->
	<?php include 'includes/javascripts.php'; ?>

</body>

</html>