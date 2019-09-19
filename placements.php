<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
	<?php include 'includes/head.php'; ?>
	<script src="./js/placements.js"></script>
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
			<span>Trainings & Placements</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Training section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>TRAINING</h3>
				<p>Companies who train our students</p>
			</div>

			<ul class="row training-ul text-center">
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<img class="img-responsive" src="img/training/1.jpeg">
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					<img class="img-responsive" src="img/training/2.jpeg">
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					<img class="img-responsive" src="img/training/3.jpeg">
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					<img class="img-responsive" src="img/training/4.jpeg">
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					<img class="img-responsive" src="img/training/5.jpeg">
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4  col-xs-4">
					<img class="img-responsive" src="img/training/6.jpeg">
				</li>
			</ul>


			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->



			<div class="more-companies">
				<h5>More companies...</h5>
				<div class="row pl-4 pr-4 pt-3">
					<ul class="col-sm-6">
						<li>A.C. Associates</li>
						<li>Safe-ex Press</li>
						<li>Vijayshri Architecht & Designers</li>
						<li>Sydicate Pharma</li>
						<li>R.K. Freight Carriers</li>
						<li>Carry Fast Logistics</li>
						<li>ICD Kheda</li>
						<li>NRO Transports</li>
						<li>Entrepreneur</li>
						<li>ICD Dhanbad</li>
					</ul>
					<ul class="col-sm-6">
						<li>Flipkart Internet Services</li>
						<li>Pegasus Inland container Depot Pvt. Ltd.</li>
						<li>Metro Cash & Carry</li>
						<li>USTL Ltd. Bhillai</li>
						<li>GSEC</li>
						<li>Promoted</li>
						<li>Rivigo Logistics, Mumbai</li>
						<li>Fairdeal International</li>
						<li>Higher Studies</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Training section end-->



	<!-- Placements section-->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>PLACEMENTS</h3>
				<p>Where our students lead</p>
			</div>
			<div class="row">
				<div class="nav flex-column nav-pills col-md-2" id="v-pills-tab" role="tablist"
					aria-orientation="vertical">



					<a class="nav-link active list-group-item-action" id="tab-2017-18" data-toggle="pill" href="#placement-2017-18"
						role="tab" aria-controls="placement-2017-18" aria-selected="true">2017-18</a>
					<a class="nav-link list-group-item-action" id="tab-2016-17" data-toggle="pill" href="#placement-2016-17"
						role="tab" aria-controls="placement-2016-17" aria-selected="false">2016-17</a>
					<a class="nav-link list-group-item-action" id="tab-2015-16" data-toggle="pill" href="#placement-2015-16"
						role="tab" aria-controls="placement-2015-16" aria-selected="false">2015-16</a>



				</div>
				<div class="tab-content col-md-10" id="v-pills-tabContent">




					
					<div class="tab-pane fade show active" id="placement-2017-18" role="tabpanel"
						aria-labelledby="tab-2017-18">
						<div class="embed-responsive embed-responsive-1by1">
							<iframe class="embed-responsive-item rounded"
								src="docs/placements/5.2.1 placement 2017-18.pdf" allowfullscreen>
							</iframe>
						</div>
					</div>
					<div class="tab-pane fade" id="placement-2016-17" role="tabpanel"
						aria-labelledby="tab-2016-17">
						<div class="embed-responsive embed-responsive-1by1">
							<iframe class="embed-responsive-item rounded"
								src="docs/placements/5.2.1 placement 2016-17.pdf" allowfullscreen>
							</iframe>
						</div>
					</div>
					<div class="tab-pane fade" id="placement-2015-16" role="tabpanel"
						aria-labelledby="tab-2015-16">
						<div class="embed-responsive embed-responsive-1by1">
							<iframe class="embed-responsive-item rounded"
								src="docs/placements/5.2.1 placement 2015-16.pdf" allowfullscreen>
							</iframe>
						</div>
					</div>



					<!-- For Accordian -->
					<!-- <div class="tab-pane fade" id="placement-2017-18" role="tabpanel"
						aria-labelledby="tab-2017-18">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">S.No.</th>
										<th scope="col">Name</th>
										<th scope="col">Mobile</th>
										<th scope="col">Company</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td colspan="2">Larry the Bird</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> -->


					
				</div>
			</div>
		</div>
	</section>
	<!-- Placements section end-->



	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<!-- Back 2 Top -->
	<?php include 'includes/back2Top.php'; ?>

	<!--====== Javascripts & Jquery ======-->
	<?php include 'includes/javascripts.php'; ?>

</body>

</html>