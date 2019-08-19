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

   <!-- style og this view gallery page start -->


   <style>
   
   body {
                /* font-family: Verdana, sans-serif; */
                margin: 0;
            }

            * {
                box-sizing: border-box;
            }

            .row > .column {
                padding: 0 8px;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            .column {
                float: left;
                width: 25%;
            }

            /* The Modal (background) */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 10px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: #000000e6;
            }

            /* Modal Content */
            .modal-content {
                position: relative;
                background-color: #fefefe;
                margin: auto;
                padding: 0;
                width: 90%;
                max-width: 1200px;
            }

            /* The Close Button */
            .close {
                color: white;
                position: absolute;
                top: 10px;
                right: 25px;
                font-size: 35px;
                font-weight: bold;
                transition: 0.5s;
                opacity: 1;
            }

            .close:hover,
            .close:focus {
                color: white;
                opacity: 1;
                background-color:black;
                text-decoration: none;
                cursor: pointer;
            }

            .mySlides {
                display: none;
            }

            .cursor {
                cursor: pointer;
            }

            /* Next & previous buttons */
            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -50px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
                background-color: rgba(70, 68, 68, 0.8);
            }
            .prev:hover, .next:hover{
                background-color: black;
            }
            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }
            .close:not(:disabled):not(.disabled):focus, .close:not(:disabled):not(.disabled):hover{
                color:white;
                font-size: 45px;
            }
            a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover{
                font-size:30px;
            }

            img {
                margin-bottom: 0px;

            }

            .caption-container {
                text-align: center;
                background-color: black;
                padding: 2px 16px;
                color: white;
            }

            .demo {
                opacity: 0.6;
            }

            .active,
            .demo:hover {
                opacity: 1;
            }

            img.hover-shadow {
                transition: 0.3s;
            }

            .hover-shadow:hover {
                box-shadow: 0 4px 8px 0 gba(70, 68, 68, 0.8), 0 6px 20px 0 gba(70, 68, 68, 0.8);
            }
            a:not([href]):not([tabindex]) {
                color: white;
            }
            a:not([href]):not([tabindex]):hover{
                color: white
            }
            body{
                background-color:white;
            }
            .gallery-grid{
                padding-left: 0px;
                padding-right: 0px;
                border: 3px solid white;
                filter: brightness(100%); 
                transition: 0.4s ease-in-out;
            }
            .gallery-grid img{
                position: relative;
            }
            .gallery-grid:hover img{
                filter: brightness(50%);


            }
            .gallery-grid p{
                display: none;
                position: absolute;
                top:40%;
                left: 40%;
                color:whitesmoke;
            }
            .gallery-grid:hover p{
                display: block;
                filter: brightness(100%);
            }
            .modal-grid{
                padding-left: 0px;
                padding-right: 0px;
            }
            .fa-play{
                font-size: 30px;
            }
            body{
                /* font-family: 'Times New Roman', Times, serif; */
            }
            hr{
                box-shadow: 0px 10px 20px grey;
            }
            
            
            
            
            

            .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                display: flex;
                background: url(images/loader.gif) center no-repeat #fff;}

   </style>

   <!-- style og this view gallery page end -->

 
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->

			<div class="row">
				<div class="col text-center">
					<a href="index.html" class="site-logo"><img src="img/logo.png" class="img-fluid"
							alt=""></a>
				</div>
				<div class="col-lg-8 col-sm-8 text-center ddukk-mainhead">
					<section class="ddukk">Deen Dayal Upadhyaya Kaushal Kendra</section>
					<section class="ugc">(Under UGC Scheme for Skill Development)</section>
					<section class="davv">Devi Ahilaya Vishwavidhyalaya, Indore</section>
					<section class="naac">(NAAC "A" Grade University of M.P, India)</section>
				</div>
				<div class=" col text-center skill-india">
					<a href="index.html" class="site-logo"><img src="img/skill.jpeg" class="img-fluid"
							alt=""></a>
				</div>
			</div>
			<div class="row">
				<div class="ddukk-head text-centre col">DDU-KK, DAVV,<br> Indore (M.P.)</div>
			</div>

			<!-- <div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Working time:</span>Monday - Friday: 08 AM - 06 PM</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Find us:</span>40 Baria Street 133/2, New York City, US</p>
				</div>
			</div> -->
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<!-- <nav class="nav-section nav-bar">
		<div class="container">
			<div class="nav-right">
				<a href=""><i class="fa fa-search"></i></a>
				<a href=""><i class="fa fa-shopping-cart"></i></a>
			</div>
			<ul class="main-menu">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="#">Event</a></li>
				<li class="dropdown"><a class="dropdown-toggle" id="course" href="javascript:void(0)"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">COURSES</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
				<li><a href="blog.html">blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</nav> -->
	<!-- Header section end -->



	<!-- Deepam ============ -->


	<!-- DONOT TOUCH THE COMMENTED CODE BELOW -->


	<nav class="navbar navbar-expand-lg navigation" id="bootnavbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><i class="fas fa-home"></i></a>
			<button class="navbar-toggler  ml-auto custom-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation" style="font-size:0.85em;">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<!-- <li class="nav-item active">
						<a class="nav-link" href="#">Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
							<li class="nav-item dropdown">
								<a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Dropdown
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<div class="dropdown-divider"></div>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
									<li class="nav-item dropdown">
										<a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2"
											role="button" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false">
											Dropdown
										</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<div class="dropdown-divider"></div>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
 -->

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							About Us
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li class="nav-item dropdown">
								<a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
									role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									Establishment
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
									<li><a class="dropdown-item" href="#">Vision</a></li>
									<li><a class="dropdown-item" href="#">Mission</a></li>
									<li><a class="dropdown-item" href="#">Messege from Head</a></li>
								</ul>
							</li>
							<div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="#">Board of Advisory Comittee</a></li>
							<li><a class="dropdown-item" href="#">Board of Studies</a></li>
							<div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="#">Admission</a></li>
							<li class="nav-item dropdown">
								<a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
									role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									Academic
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
									<li><a class="dropdown-item" href="#">Faculty</a></li>
									<li><a class="dropdown-item" href="#">Activities</a></li>
								</ul>
							</li>
							<li><a class="dropdown-item" href="#">Facilities</a></li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Courses
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li class="nav-item dropdown">
								<a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1"
									role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									Regular Courses
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
									<li><a class="dropdown-item" href="#">Diploma Courses</a></li>
									<li><a class="dropdown-item" href="#">B.Voc. Courses</a></li>
									<li><a class="dropdown-item" href="#">M.Voc. Courses</a></li>
									<li><a class="dropdown-item" href="#">Ph.D.</a></li>
								</ul>
							</li>
							<li><a class="dropdown-item" href="#">Short Term Courses</a></li>
						</ul>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#" role="button" aria-haspopup="true"
							aria-expanded="false">
							Gallery
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#" role="button" aria-haspopup="true"
							aria-expanded="false">
							Training & Placements
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" role="button" aria-haspopup="true"
							aria-expanded="false">
							Alumni
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#" role="button" aria-haspopup="true"
							aria-expanded="false">
							Feedback
						</a>
					</li>

				</ul>
				<!-- <form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form> -->
			</div>
		</div>
	</nav>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootnavbar.js"></script>
	<script>
		$(function () {
			$('#bootnavbar').bootnavbar();
		})
    </script>
    

    <!-- gallery extra view work start  -->



        <!-- ***************************OUTLOOK OF ALBUM START*************** -->
        <h2 style="text-align:center ; font-family: 'Times New Roman', Times, serif; padding: 2%;">GALLERY</h2>
        <hr>
        <br>
          <!-- <div class="row"> -->
            <div class="container">
                <div class="row">
                    <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(1)">
                      <img src="images/gallery/1.jpg" style="width: 100%; "  class="hover-shadow cursor">
                      <p style="font-family:Arial, Helvetica, sans-serif; font-weight: 500; " align="center">view</p>
                    </div>
                    <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(2)">
                        <img src="images/gallery/2.jpg" style="width:100%; "  class="hover-shadow cursor">
                        <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
                    </div>
                    <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                        <img src="images/gallery/3.jpg" style="width:100%" >
                        <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                    </div> 
                    <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                        <img src="images/gallery/4.jpg" style="width:100%" >
                        <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                    </div> 
                    <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                        <img src="images/gallery/5.jpg" style="width:100%" >
                        <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                    </div>
                    <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                        <img src="images/gallery/6.jpg" style="width:100%" >
                        <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                    </div>  
                </div>
                <div class="row">
                  <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(7)">
                    <img src="images/gallery/7.jpg" style="width: 100%; "  class="hover-shadow cursor">
                    <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
                  </div>
                  <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(8)">
                      <img src="images/gallery/8.jpg" style="width:100%; "  class="hover-shadow cursor">
                      <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
                  </div>
                  <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                      <img src="images/gallery/9.jpg" style="width:100%" >
                      <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                  </div> 
                  <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
                      <img src="images/gallery/10.jpg" style="width:100%" >
                      <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                  </div> 
                  <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
                      <img src="images/gallery/11.jpg" style="width:100%" >
                      <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                  </div>
                  <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
                      <img src="images/gallery/12.jpg" style="width:100%" >
                      <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                  </div>  
              </div>
      
              <div class="row">
                <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(13)">
                  <img src="images/gallery/13.jpg" style="width: 100%; "  class="hover-shadow cursor">
                  <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
                </div>
                <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(14)">
                    <img src="images/gallery/14.jpg" style="width:100%; "  class="hover-shadow cursor">
                    <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
                </div>
                <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
                    <img src="images/gallery/15.jpg" style="width:100%" >
                    <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                </div> 
                <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
                    <img src="images/gallery/16.jpg" style="width:100%" >
                    <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                </div> 
                <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
                    <img src="images/gallery/17.jpg" style="width:100%" >
                    <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                </div>
                <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
                    <img src="images/gallery/18.jpg" style="width:100%" >
                    <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
                </div>  
            </div>
      
      
            <div class="row">
              <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(19)">
                <img src="images/gallery/19.jpg" style="width: 100%; "  class="hover-shadow cursor">
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
              </div>
              <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(20)">
                  <img src="images/gallery/20.jpg" style="width:100%; "  class="hover-shadow cursor">
                  <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
              </div>
              <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
                  <img src="images/gallery/21.jpg" style="width:100%" >
                  <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
              </div> 
              <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
                  <img src="images/gallery/22.jpg" style="width:100%" >
                  <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
              </div> 
              <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
                  <img src="images/gallery/23.jpg" style="width:100%" >
                  <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
              </div>
              <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
                  <img src="images/gallery/24.jpg" style="width:100%" >
                  <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
              </div>  
          </div>
      
          <div class="row">
            <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(25)">
              <img src="images/gallery/25.jpg" style="width: 100%; "  class="hover-shadow cursor">
              <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
            </div>
            <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(26)">
                <img src="images/gallery/27.jpg" style="width:100%; "  class="hover-shadow cursor">
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
            </div>
            <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(27)" class="hover-shadow cursor">
                <img src="images/gallery/27.jpg" style="width:100%" >
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
            </div> 
            <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(28)" class="hover-shadow cursor">
                <img src="images/gallery/28.jpg" style="width:100%" >
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
            </div> 
            <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(29)" class="hover-shadow cursor">
                <img src="images/gallery/29.jpg" style="width:100%" >
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
            </div>
            <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(30)" class="hover-shadow cursor">
                <img src="images/gallery/30.jpg" style="width:100%" >
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
            </div>  
        </div>
      
      
        <div class="row">
          <div class=" col-md-2 gallery-grid " onclick="openModal();currentSlide(31)">
            <img src="images/gallery/31.jpg" style="width: 100%; "  class="hover-shadow cursor">
            <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(32)">
              <img src="images/gallery/32.jpg" style="width:100%; "  class="hover-shadow cursor">
              <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(33)" class="hover-shadow cursor">
              <img src="images/gallery/33.jpg" style="width:100%" >
              <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(34)" class="hover-shadow cursor">
              <img src="images/gallery/34.jpg" style="width:100%" >
              <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div> 
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(35)" class="hover-shadow cursor">
              <img src="images/gallery/35.jpg" style="width:100%" >
              <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>
          <div class=" col-md-2 gallery-grid" onclick="openModal();currentSlide(36)" class="hover-shadow cursor">
              <img src="images/gallery/36.jpg" style="width:100%" >
              <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " align="center">view</p>
          </div>  
      </div>
                </div>
                <br>
                <hr>
                <br>
              
        
      
          <!-- ***************************OUTLOOK OF ALBUM END*************** -->
      
          <!-- *************************MODALLLLL************************* -->
          
          <div id="myModal" class="modal" style="padding-top: 80px; z-index: 501;">
              
            <span class="close cursor" style="z-index:6;     position: relative;
          top: -29px;" onclick="closeModal()">&times;</span>
           
       
            <div class="modal-content" style="" >
              
                <div class="mySlides">
                    <div class="numbertext" >1/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/1.jpg" style="width:100%"></div> 
                    </div>
                </div>
                
                <div class="mySlides">
                    <div class="numbertext" >2/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            Honourable chief guest
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">volley ball </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Mr Shri Rama</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/2.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
                <div class="mySlides">
                    <div class="numbertext" >3/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/3.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
                <div class="mySlides">
                    <div class="numbertext" >4/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            Chief Guest
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/4.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
                <div class="mySlides">
                    <div class="numbertext" >5/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            Smashed
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Kishan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/5.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
                <div class="mySlides">
                    <div class="numbertext" >6/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            Court
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Players</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/6.jpg" style="width:100%"></div> 
                    </div>
                </div>
                
      
                <div class="mySlides">
                    <div class="numbertext" >7/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            Ground
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;"> Players </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Davv</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/7.jpg" style="width:100%"></div> 
                    </div>
                </div>
                
      
                <div class="mySlides">
                    <div class="numbertext" >8/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                              Court
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball</h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Players</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/8.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
                <div class="mySlides">
                    <div class="numbertext" >9/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            Good Shot
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Samyak Jain</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/9.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >10/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                           Guest
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Players</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/10.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >11/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                           Sports Commitie
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Volleyball Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Players</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/11.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >12/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            Indian Army
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Salute Sir </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Mr Anand Singh</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/12.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >13/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            Felicitation
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Warm Welcome </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Mr Anand Singh</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/13.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >14/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            live FIRE~~
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;"> Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Spirit</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/14.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >15/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                           Softball
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Championship </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Warm Welcome</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/15.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >16/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                           Honourable Sir
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Speech </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Mr Anand Singh</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/16.jpg" style="width:100%"></div> 
                    </div>
                </div>
                      
                
                <div class="mySlides">
                    <div class="numbertext" >17/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                              Softball
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Championship  </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/17.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
                <div class="mySlides">
                    <div class="numbertext" >18/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Speech </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Mr Param Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/18.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
                <div class="mySlides">
                    <div class="numbertext" >19/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/19.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >20/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/20.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >21/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/21.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >22/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/22.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >23/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/23.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >24/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/24.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >25/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/25.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >26/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/26.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >27/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/27.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >28/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/28.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >29/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/29.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >30/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/30.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >31/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/31.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >32/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/32.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >33/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/33.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >34/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/34.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >35/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/35.jpg" style="width:100%"></div> 
                    </div>
                </div>
      
      
      
                <div class="mySlides">
                    <div class="numbertext" >36/ 36</div>
                      <div class="row">
                          <div class="col-md-4 modal-grid" style="background-color:black;  padding-right: 4px; padding-top: 115px;" align="center">
                            <h1 style="color:whitesmoke">
                            DAVV 2013
                          </h1>
                          <br>
                          <hr style="border: 0.4px groove whitesmoke ;position: relative; left: 1px; width: 100px; ">
                          <br><br>
                          <h2 style="color:whitesmoke; opacity: 0.4;">Hockey Player </h2>
                          <h6 style="font-family: cursive; color: rgba(245, 245, 245, 0.376)"><i>~Karan Mishera</i></h6>
                        </div>
                      <div class="col-md-8 modal-grid"> <img src="images/gallery/36.jpg" style="width:100%"></div> 
                    </div>
                </div>
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
          
              <div class="caption-container">
                <p id="caption"></p>
              </div>
          
          
          <script>
          function openModal() {
            document.getElementById('myModal').style.display = "block";
          }
          
          function closeModal() {
            document.getElementById('myModal').style.display = "none";
          }
          
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
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
             captionText.innerHTML = dots[slideIndex-1].alt;
          }
          </script>
          
       </div>
       </div>


       <!-- gallery extra view work end  -->
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
