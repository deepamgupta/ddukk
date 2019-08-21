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
				content: "S.No.";
			}

			.roow td:nth-of-type(2):before {
				content: "Title of Course";
			}

			.roow td:nth-of-type(3):before {
				content: "Duration";
			}
			.roow td:nth-of-type(4):before {
				content: "No. Of. Participants";
			}

			.roow td:nth-of-type(5):before {
				content: "Collaboration";
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
							<th>Title of Course</th>
							<th>Duration</th>
							<th>No. of Participants</th>
							<th>Collaboration</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1.</td>
							<td>Basic Computer Hardware Maintenance</td>
							<td>10-23 May 2018</td>
							<td>21</td>
							<td>HTTP Computers, Indore</td>
						</tr>
						<tr>
							<td>2.</td>
							<td>Awareness on Healthy Snacks & Beverages</td>
							<td>2 June 2018</td>
							<td>100</td>
							<td>Nestle India Pvt. Ltd., Indore</td>
						</tr>
						<tr>
							<td>3.</td>
							<td>Network Routing & Switching</td>
							<td>2-4 July 2018</td>
							<td>28</td>
							<td>pasmes</td>
						</tr>

						<tr>
							<td>4.</td>
							<td>Making Handicraft for Special Children</td>
							<td>4-5 August 2018</td>
							<td>35</td>
							<td>Networkers Champ, Indore</td>
						</tr>

						<tr>
							<td>5.</td>
							<td>Website Design & Development</td>
							<td>6-27 August 2018</td>
							<td>56</td>
							<td>Workholics Infocorp, Indore</td>
						</tr>

						<tr>
							<td>6.</td>
							<td>Website Design & Development at Shri Vaishnav Institute of Management</td>
							<td>19 Sept - 3 Oct 2018</td>
							<td>33</td>
							<td>Workholics Infocorp, Indore</td>
						</tr>
						<tr>
							<td>7.</td>
							<td>Photoshop</td>
							<td>3-9 Oct 2018</td>
							<td>31</td>
							<td>New Era Consultancy, Indore</td>
						</tr>
						<!-- <tr>
							<td>8.</td>
							<td>Website Design & Development at DAVV, Indore</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>9.</td>
							<td>Nourishing Yourself at Mata Gujari College, Indore</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>10.</td>
							<td>Workshop on Zangle/ Doodle Art</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>11.</td>
							<td>Entrepreneurship Development Program</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>12.</td>
							<td>Creative Craft Creation at NEEV Foundation</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>13.</td>
							<td>Englistia</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>14.</td>
							<td>Personality Development Thru Drametics</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>15.</td>
							<td>PHOTOSHOP at Shri Vaishnav Institute of Management</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>16.</td>
							<td>TALLY</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>17.</td>
							<td>Website Design & Development</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
<tr>
							<td>18.</td>
							<td>GST</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>19.</td>
							<td>TALLY</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>20.</td>
							<td>Environment Best Out of Waste</td>
							<td></td>
							<td></td>
							<td></td>
						</tr> -->
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