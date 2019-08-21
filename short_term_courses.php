<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/head.php'; ?>


	<style>
		.roow table {
			width: 100%;
			border-collapse: collapse;
		}

		/* Zebra striping */
		.roow tr:nth-of-type(odd) {
			background: #eee;
		}

		.roow th {
			background: #333;
			color: white;
			font-weight: bold;
		}

		.roow td,
		th {
			padding: 6px;
			border: 1px solid #ccc;
			text-align: left;
		}

		@media only screen and (max-width: 760px),
		(min-device-width: 768px) and (max-device-width: 1024px) {

			/* Force table to not be like tables anymore */
			.roow table,
			.roow thead,
			.roow tbody,
			.roow th,
			.roow td,
			.roow tr {
				display: block;
			}

			/* Hide table headers (but not display: none;, for accessibility) */
			.roow thead tr {
				position: absolute;
				top: -9999px;
				left: -9999px;
			}

			.roow tr {
				border: 1px solid #ccc;
			}

			.roow td {
				/* Behave  like a "row" */
				border: none;
				border-bottom: 1px solid #eee;
				position: relative;
				padding-left: 50%;
			}

			.roow td:before {
				/* Now like a table header */
				position: absolute;
				/* Top/left values mimic padding */
				top: 6px;
				left: 6px;
				width: 45%;
				padding-right: 10px;
				white-space: nowrap;
			}

			/*
            Label the data
            */
			.roow td:nth-of-type(1):before {
				content: "Course Name";
			}

			.roow td:nth-of-type(2):before {
				content: "Duration";
			}

			.roow td:nth-of-type(3):before {
				content: "No. Of. Participants";
			}

			.roow td:nth-of-type(4):before {
				content: "Coloboration";
			}

			.roow td:nth-of-type(5):before {
				content: "Wars of Trek?";
			}

			.roow td:nth-of-type(6):before {
				content: "Secret Alias";
			}

			.roow td:nth-of-type(7):before {
				content: "Date of Birth";
			}

			.roow td:nth-of-type(8):before {
				content: "Dream Vacation City";
			}

			.roow td:nth-of-type(9):before {
				content: "GPA";
			}

			.roow td:nth-of-type(10):before {
				content: "Arbitrary Data";
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
			<span>Short Term Courses</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>Short Term Courses</h3>
				<!-- <p>What our students think?</p> -->
			</div>
			<div class="row roow">

				<table>
					<thead>
						<tr>
							<th>S.no</th>
							<th>Course Name</th>
							<th>Duration</th>
							<th>No. Of. Participants</th>
							<th>Coloboration</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Matman</td>
							<td>Chief Sandwich Eater</td>
							<td>James</td>
							<td>pasmes</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Matman</td>
							<td>Chief Sandwich Eater</td>
							<td>James</td>
							<td>pasmes</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Matman</td>
							<td>Chief Sandwich Eater</td>
							<td>James</td>
							<td>pasmes</td>
						</tr>

						<tr>
							<td>4</td>
							<td>Matman</td>
							<td>Chief Sandwich Eater</td>
							<td>James</td>
							<td>pasmes</td>
						</tr>

						<tr>
							<td>5</td>
							<td>Matman</td>
							<td>Chief Sandwich Eater</td>
							<td>James</td>
							<td>pasmes</td>
						</tr>

						<tr>
							<td>6</td>
							<td>Matman</td>
							<td>Chief Sandwich Eater</td>
							<td>James</td>
							<td>pasmes</td>
						</tr>

					</tbody>
				</table>
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