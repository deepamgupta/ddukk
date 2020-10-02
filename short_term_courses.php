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
				content: "No. Of Hours";
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

	<!-- Side Nav -->
	<?php include 'includes/sidenav.php'; ?>


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Short Term Courses</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>Short Term Courses</h3>
				<p>Level-up your value</p>
			</div>
			<div class="row roow">

				<table>
					<thead>
						<tr>
							<th>S.No.</th>
							<th>Title of Course</th>
							<th>Duration</th>
							<th>No. Of Hours</th>
							<th>Collaboration</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$counter = 0;
						function addCounter()
						{
							global $counter;
							echo '<mark class="bg-warning">' . ++$counter . ')</mark>';
						}
						?>




						<tr>
							<td><?php addCounter(); ?></td>
							<td>Basic Computer Hardware Maintenance</td>
							<td>10-23 May 2018</td>
							<td>3</td>
							<td>HTTP Computers, Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Awareness on Healthy Snacks & Beverages</td>
							<td>2 June 2018</td>
							<td>3</td>
							<td>Nestle India Pvt. Ltd., Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Network Routing & Switching</td>
							<td>2-4 July 2018</td>
							<td>3</td>
							<td>Networkers Champ, Indore</td>
						</tr>

						<tr>
							<td><?php addCounter(); ?></td>
							<td>Making Handicraft for Special Children</td>
							<td>4-5 August 2018</td>
							<td>3</td>
							<td>Networkers Champ, Indore</td>
						</tr>

						<tr>
							<td><?php addCounter(); ?></td>
							<td>Website Design & Development</td>
							<td>6-27 August 2018</td>
							<td>3</td>
							<td>Workholics Infocorp, Indore</td>
						</tr>

						<tr>
							<td><?php addCounter(); ?></td>
							<td>Website Design & Development at Shri Vaishnav Institute of Management</td>
							<td>19 Sept - 3 Oct 2018</td>
							<td>3</td>
							<td>Workholics Infocorp, Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>A Short Term Course on Photoshop</td>
							<td>3-9 Oct 2018</td>
							<td>2</td>
							<td>New Era Consultancy, Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Website Design & Development at DAVV, Indore</td>
							<td>8 Oct 2018(20 days)</td>
							<td>2</td>
							<td>Workholics Infocorp, Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Nourishing Yourself at Mata Gujari College, Indore</td>
							<td>12 Oct 2018</td>
							<td>1</td>
							<td>---</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Workshop on Zangle/ Doodle Art</td>
							<td>23-25 Oct 2018</td>
							<td>2</td>
							<td>GJ Design Studio, Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Entrepreneurship Development Program</td>
							<td>15-30 Nov</td>
							<td>2</td>
							<td>LIC of India, Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Creative Craft Creation at NEEV Foundation</td>
							<td>15 Jan 2019</td>
							<td>1</td>
							<td>---</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>One Week Workshop on English (Englistia)</td>
							<td>1-5 Feb 2019</td>
							<td>2</td>
							<td>Quest Edustation, Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Personality Development Thru Dramatics</td>
							<td>26 Feb 2019</td>
							<td>6</td>
							<td>New Era Consultancy, Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Workshop on PHOTOSHOP at Shri Vaishnav Institute of Management</td>
							<td>23-29 April 2019</td>
							<td>2</td>
							<td>---</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>A Short Term Program on Accounting Software TALLY with GST version</td>
							<td>1-31 May</td>
							<td>2</td>
							<td>---</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Website Design & Development</td>
							<td>20 May- 20 June 2019</td>
							<td>2</td>
							<td>Workholics Infocorp, Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>One Week Training Programme on GST</td>
							<td>10-14 June 2019</td>
							<td>2</td>
							<td>Institute of Charted Accountants of India, indore Branch</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>A Short Term Program on Accounting Software TALLY with GST version</td>
							<td>15 July -16 Aug 2019</td>
							<td>2</td>
							<td>---</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Environment Best Out of Waste</td>
							<td>28 July 2019</td>
							<td>3</td>
							<td>Inner Wheel Club of Indore Uptown, Indore</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Empower Parents, Enable Breastfeeding</td>
							<td>06 August 2019</td>
							<td>3</td>
							<td>---</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Stepping Stones in "JAVA"</td>
							<td> 02 Sept 2019 - 31 Sept 2019</td>
							<td>2</td>
							<td>Sterling Institute- A Development Venture</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>A Short Term Program on Accounting Software TALLY with GST version
							</td>
							<td> 25 Sept 2019 - 25 Oct 2019</td>
							<td>2</td>
							<td>---</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>A Short Term Course on OFFICE AUTOMATION
							</td>
							<td> 29 September to onwards (Only SUNDAYS)
							</td>
							<td>3</td>
							<td>---</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>Basic Computer Hardware Maintenance at Shri Vaishnav Institute of Management, Indore
							</td>
							<td> 10- 21 October 2019
							</td>
							<td>2</td>
							<td>HTP Computers, Indore
							</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?></td>
							<td>A Short Term Course on PHOTOSHOP
							</td>
							<td> 14- 18 October 2019
							</td>
							<td>2</td>
							<td>New Era Consultancy, Indore
							</td>
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