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
    <link rel="stylesheet" href="css/faculty.css" />

	<!-- navbar CSS -->
	<link rel="stylesheet" href="css/bootnavbar.css">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Jquery mainly for navbar dropdown -->
	<script src="js/jquery-3.3.1.min.js"></script>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Sarala:700|Exo+2:300');
	
	*,
	*:before,
	*:after{
	  box-sizing: border-box;
	  -webkit-tap-highlight-color: rgba(255,255,255,0);
	  outline: 1px solid transparent;
	}
	
	body{ 
	  /* display: flex; 
	   width: 100vw;
	  height: 100vh; 
	  flex-direction: column;*/
	  align-items: center;
	  justify-content: center;
	  margin: 0;
	  padding: 0;
	  /* overflow: hidden; */
	  /* background-image: linear-gradient(-55deg, rgba(50,45,55,1) 0%, rgba(101,96,106,1) 100%); */
	  color: #e3dfdf;
	  /* font-family: 'Exo 2'; */
	  font-weight: 300;
	  /* animation: fadeIn .5s cubic-bezier(0.390, 0.575, 0.565, 1.000) 1; */
	}
	
	.wrapper{
	  width: 280px;
	  height: 480px;
	  perspective: 800px;
	  position: relative;
	}
	
	.card{
	  width: 320px;
	  height: 450px;
	  position: relative;
	  transform-style: preserve-3d;
	  transform: translateZ(-140px);
	  transition: transform 350ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
	  cursor: pointer;
	}
	
	.card > div{
	  position: absolute;
	  width: 320px;
	  height: 450px;
	  padding: 34px 21px;
	  transition: all 350ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
	}
	
	.front{
	  background-image: linear-gradient(180deg, rgb(246, 120, 58) 0%, rgb(237, 110, 26) 100%);
		/* rgb(114, 50, 7) 100%);  */
	  /* rgba(145,141,144,1) 0%, rgba(92,91,94,0) 100%); */
	  transform: rotateY(0deg) translateZ(160px); 
	  border-radius: 34px 3px 0 0;
	}
	
	.right{ 
	  /* background-image: linear-gradient(0deg, rgba(145,141,144,1) 0%, rgba(92,91,94,0) 100%); */
		background-image: linear-gradient(180deg, rgb(246, 120, 58) 0%, rgb(237, 110, 26) 100%);
		 /* rgb(93, 13, 21) 100%);  */
	  opacity: 0.08;
	  transform: rotateY(90deg) translateZ(160px);
	  border-radius: 0 0 3px 34px;
	}
	
	.card:hover{
	  transform: translateZ(-160px) rotateY( -90deg);
	}
	
	.card:hover .front{
	  opacity: 0; 
	}
	
	.card:hover .right{
	  opacity: 1; 
	}
	
	h1,h2{
	  margin: 0;
	  font-size: 38px;
	  letter-spacing: -.25px;
	  /* transform: translateX(-5px); */
	  font-family: 'Sarala'; 
	  font-weight: 700;
	}
	
	h2{
	  font-size: 21px;
	  /* transform: translateX(0px); */
	}
	
	p{
	  margin: 0;
	  font-weight: 300;
	  font-size: 16px;
	}
	
	/* span{
	  margin-left: 13px;
	  opacity: .55;
	}
	 */
	img{
	  transform-origin: top right;
	  transition: transform 300ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
	  transition-delay: 100ms;
	  transform: translateX(0%) rotateZ(0deg) skewX(0deg);
	  pointer-events: none;
	}
	
	.img-wrapper{
	  animation: float 4s cubic-bezier(0.390, 0.575, 0.565, 1.000) infinite alternate;
	  position: absolute;
	  top: 0; right: 0;
	  pointer-events: none;
	  backface-visibility: hidden;
	}
	
	@keyframes float{
	  0%{
		 transform: translateZ(20px);
	  }
	  100%{
		 transform: translateY(-21px) translateX(-13px) translateZ(30px);
	  }
	}
	
	.card:hover ~ .img-wrapper img{
	  transform: scale(0.9) translateX(77%) translateY(90%) rotateZ(80deg);
	}
	
	.card ul{
	  margin-left: 21px;
	  /* margin-top: 10px; */
	  padding: 0;
	  font-size: 16px;
	  font-weight: 300;
	  list-style: none;
	}
	
	li{
	 /* font-family: 'Exo 2'; */
	  position: relative;
		
	}
	
	/* li:before{
	  content: 'x';
	  position: absolute;
	  left: -21px;
	  opacity: .55;
	} */
	
	.right button{
	  position: absolute;
	  right: 21px; 
	  bottom: 34px;
	  border: none;
	  box-shadow: none;
	  background: none;
	  color: inherit;
	  font-family: 'Exo 2';
	  font-weight: 300;
	  font-size: 30px;  
	  letter-spacing: -.25px;
	  font-weight: 700;
	  padding: 3px 12px;
	  border-radius: 55px 55px 55px 55px;  
	  background-image: linear-gradient(130deg, rgba(117,51,165,1)  50%, rgba(51,46,57,.89) 100%);
	  background-size: 125% 100%;
	  background-position: right;
	  cursor: pointer;
	  box-shadow: 8px 5px 13px rgba(34,34,34,.08);
	  transform: scale(0) skewY(13deg);
	  transition: all 150ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
	  transform-origin: right bottom;
	}
	
	.card:hover button{
	   transform: scale(1) skewY(0);
	}
	
	.card:not(:hover) button{
	opacity: 0;
	}
	
	button:hover{
	  background-position: left;
	}
	
	.price{
	  position: absolute;
	  bottom: 34px;
	  left: 21px;
	  font-size: 34px;
	  opacity: .34;
	}
	
	/* @keyframes fadeIn{
	  0%{
		opacity: 0.33;
		transform: scale(.89);
	  }
	} */
	
	@media only screen and (max-width: 600px){
	  body{
		 /* transform: scale(.67);  */
	  }
	}

	 h1, h2, h3, h4, h5, h6 {

		color: #e3dfdf;
	}
	.mainc{
		padding:15px;
	}	 
		</style>




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
				<ul class="navbar-nav mr-auto" > 
						<!-- style="font-size:17px; margin-left:0px;" -->
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


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.html"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Faculty</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container" style="font-family: 'Exo 2';">
			<div class="section-title text-center">
				<h3 style="color:#ab3232;">Teaching Section</h3>


				

			</div>
			<div class="row">
            
      
				<div class="col-md-4">
					<div class="wrapper">
						<div class="card">
						  <div class="front">
							<h1>Mr. DUmmy</h1>
							<p>Guest Faculty<span></span></p>
							
							<div>
								<img src="img/member/4.jpg">
							</div>
						  </div>
						  <div class="right">
							<h2>Mr. DUmmy</h2>
							<ul>
							  <li class="mainc">Designation :</li>
							  <li class="mainc">Graduation &nbsp;:</li>
							  
							  <li class="mainc">Research &nbsp;&nbsp;&nbsp;&nbsp;:</li>
								<li class="mainc">course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
								<li class="mainc"> Skills &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:</li>
							</ul>
							<button><i class="fab fa-facebook"></i></button>
							<button style="right:123px;"><i class="fas fa-envelope"></i></button>
							<button style="right:230px;"><i class="fab fa-linkedin"></i></button>
						  </div>
						</div>
				  </div>
				</div>	


				<div class="col-md-4">
					<div class="wrapper">
						<div class="card">
						  <div class="front">
							<h1>Mr. DUmmy</h1>
							<p>Guest Faculty<span></span></p>
							
							<div>
								<img src="img/member/4.jpg">
							</div>
						  </div>
						  <div class="right">
							<h2>Mr. DUmmy</h2>
							<ul>
							  <li class="mainc">Designation :</li>
							  <li class="mainc">Graduation &nbsp;:</li>
							  
							  <li class="mainc">Research &nbsp;&nbsp;&nbsp;&nbsp;:</li>
								<li class="mainc">course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
								<li class="mainc"> Skills &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:</li>
							</ul>
							<button><i class="fab fa-facebook"></i></button>
							<button style="right:123px;"><i class="fas fa-envelope"></i></button>
							<button style="right:230px;"><i class="fab fa-linkedin"></i></button>
						  </div>
						</div>
				  </div>
				</div>	



				<div class="col-md-4">
					<div class="wrapper">
						<div class="card">
						  <div class="front">
							<h1>Mr. DUmmy</h1>
							<p>Guest Faculty<span></span></p>
							
							<div>
								<img src="img/member/4.jpg">
							</div>
						  </div>
						  <div class="right">
							<h2>Mr. DUmmy</h2>
							<ul>
							  <li class="mainc">Designation :</li>
							  <li class="mainc">Graduation &nbsp;:</li>
							  
							  <li class="mainc">Research &nbsp;&nbsp;&nbsp;&nbsp;:</li>
								<li class="mainc">course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
								<li class="mainc"> Skills &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:</li>
							</ul>
							<button><i class="fab fa-facebook"></i></button>
							<button style="right:123px;"><i class="fas fa-envelope"></i></button>
							<button style="right:230px;"><i class="fab fa-linkedin"></i></button>
						  </div>
						</div>
				  </div>
				</div>				




				
			</div>

			<div class="section-title text-center" style="padding-top: 50px; margin-bottom: 25px;">
				<hr>
				<h3 style="color:#ab3232;">Non Teaching Section</h3>
				


				

			</div>

			<div class="row">
            
      
					<div class="col-md-4">
						<div class="wrapper">
							<div class="card">
								<div class="front">
								<h1>Mr. DUmmy</h1>
								<p>Guest Faculty<span></span></p>
								
								<div>
									<img src="img/member/4.jpg">
								</div>
								</div>
								<div class="right">
								<h2>Mr. DUmmy</h2>
								<ul>
									<li class="mainc">Designation :</li>
									<li class="mainc">Graduation &nbsp;:</li>
									
									<li class="mainc">Research &nbsp;&nbsp;&nbsp;&nbsp;:</li>
									<li class="mainc">course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
									<li class="mainc"> Skills &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:</li>
								</ul>
								<button><i class="fab fa-facebook"></i></button>
								<button style="right:123px;"><i class="fas fa-envelope"></i></button>
								<button style="right:230px;"><i class="fab fa-linkedin"></i></button>
								</div>
							</div>
						</div>
					</div>	
	
	
					<div class="col-md-4">
						<div class="wrapper">
							<div class="card">
								<div class="front">
								<h1>Mr. DUmmy</h1>
								<p>Guest Faculty<span></span></p>
								
								<div>
									<img src="img/member/4.jpg">
								</div>
								</div>
								<div class="right">
								<h2>Mr. DUmmy</h2>
								<ul>
									<li class="mainc">Designation :</li>
									<li class="mainc">Graduation &nbsp;:</li>
									
									<li class="mainc">Research &nbsp;&nbsp;&nbsp;&nbsp;:</li>
									<li class="mainc">course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
									<li class="mainc"> Skills &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:</li>
								</ul>
								<button><i class="fab fa-facebook"></i></button>
								<button style="right:123px;"><i class="fas fa-envelope"></i></button>
								<button style="right:230px;"><i class="fab fa-linkedin"></i></button>
								</div>
							</div>
						</div>
					</div>	
	
	
	
					<div class="col-md-4">
						<div class="wrapper">
							<div class="card">
								<div class="front">
								<h1>Mr. DUmmy</h1>
								<p>Guest Faculty<span></span></p>
								
								<div>
									<img src="img/member/4.jpg">
								</div>
								</div>
								<div class="right">
								<h2>Mr. DUmmy</h2>
								<ul>
									<li class="mainc">Designation :</li>
									<li class="mainc">Graduation &nbsp;:</li>
									
									<li class="mainc">Research &nbsp;&nbsp;&nbsp;&nbsp;:</li>
									<li class="mainc">course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
									<li class="mainc"> Skills &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:</li>
								</ul>
								<button><i class="fab fa-facebook"></i></button>
								<button style="right:123px;"><i class="fas fa-envelope"></i></button>
								<button style="right:230px;"><i class="fab fa-linkedin"></i></button>
								</div>
							</div>
						</div>
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
    <script src="js/faculty.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>