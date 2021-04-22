 <!--   connection -->

<?php 
include("connection.php");
$content = "";
$query = "SELECT * from about where about_id= 2";
$sql = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($sql)){
  $content = $row['about_content'];
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
              <h2 class="mb-0">About Us</h2>
              <p>Regalis Education</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index-2.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Regalis Education</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 mb-4">
                    <p class="mb-5">
                        <img src="images/course_5.jpg" alt="Image" class="img-fluid">
                    </p>
                    <p>At RIGALIS EDUCATION, we transcend horizons! Going beyond the average, putting in that extra mile, extending ourselves to excel and win on all accounts. As one of the finest institution for the higher studies in the field of Management, Information Technology & Media education, RIGALIS EDUCATION has persistently built on its unique strength of imparting high quality education through pedagogic innovations and emphasizing on its twin objective of Influencing Practice and Promoting Value based growth. RIGALIS EDUCATION displays a differentiated approach across the entire academic flow of activities in higher management education. In all our endeavors, we put a great emphasis on ‘Knowledge and Skills’ as well as ‘Indigenous learner-centric pedagogy’. The approach to pedagogy combines fieldwork, case studies, internship, workshops and instrumented feedback with a strong emphasis on concepts and theory. The intent is to encourage intellectual curiosity and open minds to the adventure of ideas</p>
                    <p>Over the years, RIGALIS EDUCATION has grown into an outstanding academic establishment in Bihar covering varied areas of academic interests, and attracting an equally diverse faculty and student body. Going by the past track record, we have witnessed a remarkable success, winning the ‘Best Emerging Institution Award’ in the field of Management Education by ‘All India Management Education’ (AIMA) is one of them.</p>
                    <p>At RIGALIS EDUCATION, a team of over 200 faculties, including full time and visiting, rich in academic and industry experience, always keep them abreast of the ever-changing and evolving corporate world to provide the students with the best. Eminent academicians & professionals are invited as visiting faculty to teach & guide specific courses. The most contemporary teaching methodology at RIGALIS EDUCATION provides students the atmosphere to crack the cocoon around them and enter the dynamic world. The classroom atmosphere is synergetic with interactive and participative sessions. This makes learning proactive and instills in the students a sense of team spirit, responsibility and professional integrity. It helps in building a healthy student-faculty bond, which develops students to their fullest potential and harnesses the best in the teachers.</p>
                    <p> The focus at RIGALIS EDUCATION is to develop a Complete Student, i.e. a combination of academic and co-curricular skills. We groom our students to face the challenges of the corporate world with a blend of social sensitivity. Besides the requisite managerial, IT or media skills, the students also attain visionary, entrepreneurial and leadership skills. A very important parameter of success for any Management, IT & Media institute is, its ability to offer corporate interface for its students, which enhances their practical knowledge to face the corporate world. RIGALIS EDUCATION has built strong partnerships with the corporate world. It strives to conduct workshops, seminars, and guest lectures for students to expose them to the realms of the corporate environment. As a self-reliant institution, we enjoy operational freedom and encourage an entrepreneurial, agile and flexible organizational culture, working on a collaborative pursuit of innovative solutions</p>
                    <p>We, at RIGALIS EDUCATION, achieve the objectives of the institution through self-accountability, professional discipline and hard work. Our students are individualists of enormous intellectual energy with a talent for collaboration and teamwork. Corporate recruiters value our graduates for their intellectual abilities, their collaborative mind-set, their individuality and their ability to hit the ground running. We invite you to discover RIGALIS EDUCATION for yourself.</p>
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