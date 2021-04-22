 <!--   connection -->

<?php 
include("connection.php");
$content = "";
$query = "SELECT * from course where course_id= 1";
$sql = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($sql)) {
$content = $row['course_content'];
}
?>

 <!--   connection -->

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <title>Regalis Foundation | Education | Consultant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

 <!-- Start header -->

  <?Php include("header.php"); ?>

  <!-- End header -->
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Courses</h2>
              <p>Regalis Welfare Foundation</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Courses</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="course-1-item">
                      <figure class="thumnail">
                      <a href="Paramedical - Degree Course.php"><img src="images/courses1.jpg" alt="Image" class="img-fluid"></a>
                      <!-- <div class="price">$99.00</div> -->
                      <div class="category"><h3>Paramedical - Degree Course</h3></div>  
                    </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="course-1-item">
                         <figure class="thumnail">
                      <a href="Paramedical - Diploma Course.php"><img src="images/courses2.jpg" alt="Image" class="img-fluid"></a>
                     <!--  <div class="price">$99.00</div> -->
                      <div class="category"><h3>Paramedical - Diploma Course</h3></div>  
                    </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="course-1-item">
                      <figure class="thumnail">
                      <a href="Paramedical - Lateral Entry Course.php"><img src="images/courses3.jpg" alt="Image" class="img-fluid"></a>
                     <!--  <div class="price">$99.00</div> -->
                      <div class="category"><h3>Paramedical - Lateral Entry Course</h3></div>  
                    </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="course-1-item">
                      <figure class="thumnail">
                      <a href="Paramedical - Nursing Course.php"><img src="images/nursing.jpg" alt="Image" class="img-fluid"></a>
                     <!--  <div class="price">$99.00</div> -->
                      <div class="category"><h3>Paramedical - Nursing Course</h3></div>  
                    </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="course-1-item">
                      <figure class="thumnail">
                      <a href="Pharamacy.php"><img src="images/pharmacy.jpeg" alt="Image" class="img-fluid"></a>
                     <!--  <div class="price">$99.00</div> -->
                      <div class="category"><h3>Pharamacy</h3></div>  
                    </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="course-1-item">
                         <figure class="thumnail">
                      <a href="Management.php"><img src="images/courses5.jpg" alt="Image" class="img-fluid"></a>
                     <!--  <div class="price">$99.00</div> -->
                      <div class="category"><h3>Management</h3></div>  
                    </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                  <div class="col-lg-6 col-md-6 mb-4">
                    <div class="course-1-item">
                     <figure class="thumnail">
                      <a href="Technology.php"><img src="images/course_6.jpg" alt="Image" class="img-fluid"></a>
                     <!--  <div class="price">$99.00</div> -->
                      <div class="category"><h3>Technology</h3></div>  
                    </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="Yoga.php"><img src="images/courses7.jpg" alt="Image" class="img-fluid"></a>
                     <!--  <div class="price">$99.00</div> -->
                      <div class="category"><h3>Yoga</h3></div>  
                    </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

   <div class="section-bg style-1" style="background-image: url('images/back.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-mortarboard"></span>
            <h3>Our Philosphy</h3>
            <p>Our students are individualists of enormous intellectual energy with a talent for collaboration and teamwork. Corporate recruiters value our graduates for their intellectual abilities, their collaborative mind-set, their individuality and their ability to hit the ground running.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-school-material"></span>
            <h3>Regalis Principle</h3>
            <p>As a self-reliant institution, we enjoy operational freedom and encourage an entrepreneurial, agile and flexible organizational culture, working on a collaborative pursuit of innovative solutions. We, at RIGALIS EDUCATION, achieve the objectives of the institution through self-accountability, professional discipline and hard work.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-library"></span>
            <h3>Key of Success</h3>
            <p>A very important parameter of success for any Management, IT & Media institute is, its ability to offer corporate interface for its students, which enhances their practical knowledge to face the corporate world. RIGALIS EDUCATION has built strong partnerships with the corporate world. It strives to conduct workshops, seminars, and guest lectures for students to expose them to the realms of the corporate environment.</p>
          </div>
        </div>
      </div>
    </div>
      

 <!-- Start footer -->

  <?Php include("footer.php"); ?>

  <!-- End footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>
</html>