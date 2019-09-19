<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
	<?php include 'includes/head.php'; ?>
	<style>
		#data tr {
			display: none;
		}
		.new{
			content: url("./img/new.png");
			display: inline-block;
			height: 2rem;
			vertical-align: bottom;
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
			<a href="index.php"><i class="fa fa-home"></i>Home</a> <i class="fa fa-angle-right"></i>
			<span>Notices</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->



	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>NOTICES</h3>
				<p>All the stuff comes here, be updated :)</p>
			</div>




			<div class="row" id="list">
				<table id="data" class="table table-hover">
					<?php
					$counter = 0;
					function addCounter()
					{
						global $counter;
						echo '<mark class="bg-warning">' . ++$counter . ')</mark>&nbsp;&nbsp;';
					}
					?>
					<tbody>






						<tr>
							<td><?php addCounter(); ?>DDU-KK starts III batch of TALLY (GST Version) very soon...<span class="new"></span> </td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>One Month Training Program on Stepping Stones in "'JAVA" in collaboration with Sterling Institute- A development Venture<span class="new"></span></td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Fees Refund Notice for C.E.T. Exam - 2019<span class="new"></span></td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Notice Regarding Induction Program Dated 04.09.2019<span class="new"></span></td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>One Week Training Program on GST from 10 June to 14 June, 2019<span class="new"></span></td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Short Term Course on Website Design & Development<span class="new"></span></td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Quotations are invited for Structured cabling LAN (33 points) work <span class="new"></span></td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>One Month Program on Accounting Software Tally<span class="new"></span></td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 5</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 6</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 7</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 8</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 9</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 10</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 11</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 12</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 13</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 14</td>
						</tr>
						<tr>
							<td><?php addCounter(); ?>Dummy Row 15</td>
						</tr>
						





						
					</tbody>
				</table>
			</div>







			<script>
				$(document).ready(function() {
					$('#list').after('<nav aria-label="Page navigation"><ul id="nav" class="pagination justify-content-center pagination-lg"></ul></nav>');
					var rowsShown = 10;
					var rowsTotal = $('#data tbody tr').length;
					var numPages = rowsTotal / rowsShown;
					for (i = 0; i < numPages; i++) {
						var pageNum = i + 1;
						$('#nav').append('<li class="page-item"><a class="page-link" href="javascript:void(0)" rel="' + i + '">' + pageNum + '</a> </li>');
					}
					$('#data tbody tr').hide();
					$('#data tbody tr').slice(0, rowsShown).show();
					$('#nav a:first').addClass('active');
					$('#nav li:first').addClass('active');

					$('#nav li').bind('click', function() {
						$('#nav li').removeClass('active');
						$(this).addClass('active');
					});

					$('#nav a').bind('click', function() {

						$('#nav a').removeClass('active');
						$(this).addClass('active');
						var currPage = $(this).attr('rel');
						var startItem = currPage * rowsShown;
						var endItem = startItem + rowsShown;
						$('#data tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
						css('display', 'table-row').animate({
							opacity: 1
						}, 300);
					});
				});
			</script>





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