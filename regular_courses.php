<!DOCTYPE html>
<html lang="en">

<head>
	<title>DDU-KK</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=ABeeZee|Alegreya|Ubuntu|Merriweather" rel="stylesheet">

	<!-- Font- Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/themify-icons.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/style.css" />

	<!-- navbar CSS -->
	<link rel="stylesheet" href="css/bootnavbar.css">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Jquery mainly for navbar dropdown -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<style>
        .mylist{
            list-style-type:disc;

        }
        #regular li{
            padding: 10px;
        }
        .list-unstyled
        {
            padding-left: 14px;
        }
        .mybtn{
            background-color: rgb(243, 247, 246);
            outline: none;
            border: none;
            color: black;
            margin-top: 15px;
            margin-left: 19px;
        }
        .mybtn:hover{
            background-color: rgb(181, 184, 183);
        }
        .mybtn:active
        {
            background-color: #020032;
        }
        .mybtn:focus
        {
            background-color: #020032;
            box-shadow: 0 0 0 0.2rem rgba(38, 47, 58, 0.5);
        }
        .download-arrow
        {
            padding: inherit;
        }
        .list-arrow
        {
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


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootnavbar.js"></script>
	<script>
		$(function () {
			$('#bootnavbar').bootnavbar();
		})
	</script>


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
                <button type="button" class="btn btn-primary btn-block mybtn"  onclick="">Scheme<i class='fas fa-arrow-alt-circle-down download-arrow'  ></i></button>
                <button type="button" class="btn btn-primary btn-block mybtn" onclick="">Syllabus<i class='fas fa-arrow-alt-circle-down download-arrow' ></i></button>
            </li>
            <li>
                <h5><i class='fas fa-caret-right list-arrow'></i>B.Voc</h5>
                <div class="container">
                <ul class="list-unstyled mylist">
                    <li>
                        <h6>L.D</h6>
                        <button type="button" class="btn btn-primary btn-block mybtn" onclick="">Scheme<i class='fas fa-arrow-alt-circle-down download-arrow' ></i></button>
                        <button type="button" class="btn btn-primary btn-block mybtn" onclick="">Syllabus<i class='fas fa-arrow-alt-circle-down download-arrow' ></i></button>
                    </li>
                    <li>
                        <h6>N.D</h6>
                        <button type="button" class="btn btn-primary btn-block mybtn" onclick="">Scheme<i class='fas fa-arrow-alt-circle-down download-arrow' ></i></button>
                        <button type="button" class="btn btn-primary btn-block mybtn" onclick="">Syllabus<i class='fas fa-arrow-alt-circle-down download-arrow' ></i></button>
                    </li>
                    <li>
                        <h6>Handicaps</h6>
                        <button type="button" class="btn btn-primary btn-block mybtn" onclick="">Scheme<i class='fas fa-arrow-alt-circle-down download-arrow' ></i></button>
                        <button type="button" class="btn btn-primary btn-block mybtn" onclick="">Syllabus<i class='fas fa-arrow-alt-circle-down download-arrow' ></i></button>
                    </li>
                </ul>
                </div>
            </li>
            <li>
                <h5><i class='fas fa-caret-right list-arrow'></i>M.Voc</h5>
                <button type="button" class="btn btn-primary btn-block mybtn" onclick="">Scheme<i class='fas fa-arrow-alt-circle-down download-arrow' ></i></button>
                <button type="button" class="btn btn-primary btn-block mybtn" onclick="">Syllabus<i class='fas fa-arrow-alt-circle-down download-arrow' ></i></button>
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

	<footer>
		<div class="container-fluid" id="cf">
			<div class="row" id="e">
				<div class="col-md-3 col3style">

					<table align="center">
						<tr align="center">
							<td><a href="index.php"><img src="img/logo.png" class="image-responsive"
										width="128px" height="118px"></a></td>
						</tr>
						<tr align="center" valign="bottom">
							<td>
								<h3 class="sobstyle">Deen dayal upadhyaya Kaushal Kendra</h3>
							</td>
						</tr>

					</table>

					<hr class="hrstyle">

					<table align="center" id="it">
						<tr>
							<td width="58px" valign="top">
								<i class="fa fa-map-marker-alt "></i>
							</td>
							<td class="tdstyle">
								<span>Deen Dayal Upadhyay Kaushal Kendra(DDU-KK), Devi Ahilya
									Vishwavidyalaya
									Takshashila Parisar,Indore(M.P.)-452001, india</span>
							</td>
						</tr>

						<tr class="trstyle">
							<td>
								<i class="fas fa-phone-volume"></i>
							</td>
							<td>

								<span>(0731)2438531&nbsp;&nbsp;,&nbsp;&nbsp;(0731)2461888</span>
							</td>
						</tr>
						<tr class="trstyle">
							<td>
								<i class="fas fa-envelope-open"></i>
							</td>
							<td>
								<span>principal_cc@dauniv.ac.in</span>
							</td>
						</tr>
						<tr class="trstyle">
							<td>
								<i class="fas fa-fax"></i>
							</td>
							<td>
								<span>0731-2761358</span>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-md-4">
					<h4 align="center">
						QUICK LINKS
					</h4>
					<div class="row">
						<div class="rowstylef">
							<ul id="ql">
								<a href="aboutus.php">
									<li>About Us</li>
								</a>
								<a href="msc.php">
									<li>Boac</li>
								</a>
								<a href="notices.php">
									<li>bos</li>
								</a>
								<a href="notices.php">
									<li>ESt.</li>
								</a>
							</ul>
						</div>
						<div class="rowstylef">
							<ul id="ql">
								<a href="http://www.dauniv.ac.in/" target="_blank">
									<li>Courses</li>
								</a>
								<a href="phd.php">
									<li>Admission</li>
								</a>
								<a href="activities.php">
									<li>Activities</li>
								</a>
								<a href="notices.php">
									<li>Gallery</li>
								</a>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.046696077626!2d75.86971651443606!3d22.689305534395956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fce8a4750f9f%3A0x93b9fe36af1401f1!2sVigyan+Bhavan%2C+DAVV!5e0!3m2!1sen!2sin!4v1553060800015"
						frameborder="0" allowfullscreen class="img-thumbnail iframestyle"></iframe>

					<div class="developers">
						<a href="team.php" class="effect-shine">Developers</a>
					</div>

				</div>

			</div>
			<div class="row">
				<div class="col-md-12" id="bgc">


					<table align="center">
						<tr>
							<td>
								<i class="far fa-copyright" id="c"></i>
							</td>
							<td>
								<em>&nbsp;2018 Registrar,Deen Dayal Upadhyay Kaushal
									Kendra,Indore(MP)India 452001</em>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end-->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>