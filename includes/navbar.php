<nav class="navbar navbar-expand-lg navigation" id="bootnavbar">
      <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler  ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="font-size:0.85em;">
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
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About Us
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- <li class="nav-item dropdown">
								<a class="dropdown-item dropdown-toggle" href="about.php" id="navbarDropdown1"
									role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									About
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
									<li><a class="dropdown-item" href="#">Vision</a></li>
									<li><a class="dropdown-item" href="#">Mission</a></li>
									<li><a class="dropdown-item" href="#">Messege from Head</a></li>
								</ul>
							</li> -->
                                    <li><a class="dropdown-item" href="about.php">About</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="boac.php">Board of Advisory Comittee</a></li>
                                    <li><a class="dropdown-item" href="bos.php">Board of Studies</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="admission.php">Admission</a></li>
                                    <li class="nav-item dropdown">
                                          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Academic
                                          </a>
                                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                                <li><a class="dropdown-item" href="faculty.php">Faculty</a></li>
                                                <li><a class="dropdown-item" href="activities.php">Activities</a></li>
                                          </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="facilities.php">Facilities</a></li>
                              </ul>
                        </li>

                        <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Courses
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="regular_courses.php">Regular Courses</a></li>
                                    <li><a class="dropdown-item" href="short_term_courses.php">Short Term Courses</a></li>
                              </ul>
                        </li>

                        <li class="nav-item">
                              <a class="nav-link" href="gallery.php" role="button" aria-haspopup="true" aria-expanded="false">
                                    Gallery
                              </a>
                        </li>

                        <li class="nav-item">
                              <a class="nav-link" href="placements.php" role="button" aria-haspopup="true" aria-expanded="false">
                                    Training & Placements
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="alumni.php" role="button" aria-haspopup="true" aria-expanded="false">
                                    Alumni
                              </a>
                        </li>

                        <li class="nav-item">
                              <a class="nav-link" href="feedback.php" role="button" aria-haspopup="true" aria-expanded="false">
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
      $(function() {
            $('#bootnavbar').bootnavbar();
      })
</script>