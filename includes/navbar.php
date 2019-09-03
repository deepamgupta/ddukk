<nav class="navbar navbar-expand-lg navigation fixed-top" style="position:sticky; top: 0; width:100%;" id="bootnavbar">
      <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler  ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="font-size:0.85em;">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About Us
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                                                <li><a class="dropdown-item disabled" href="faculty.php">Faculty</a></li>
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
                              <a class="nav-link disabled" href="alumni.php" role="button" aria-haspopup="true" aria-expanded="false">
                                    Alumni
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="press_news.php" role="button" aria-haspopup="true" aria-expanded="false">
                                    Press News
                              </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="https://www.dauniv.ac.in/" target="_blank" role="button" aria-haspopup="true" aria-expanded="false">
                                    DAVV
                              </a>
                        </li>
                  </ul>
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