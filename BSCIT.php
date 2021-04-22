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
              <h2 class="mb-0">Technology Course</h2>
              <p>Bachelor Of Science In Information Technology (BSC.IT)</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Bachelor Of Science In Information Technology (BSC.IT)</span>
      </div>
    </div>

    <div class="container pt-5 mb-5">
            <div class="row">
              <div class="col-lg-12">
                <h2 class="section-title-underline">
                  <span>Bachelor Of Science In Information Technology (BSC.IT)</span>
                </h2>
              </div>
              <div class="col-lg-12">
                <p>The full form of BSc IT is a Bachelor of Science in Information Technology. BSc IT is a bachelor's degree awarded for an undergraduate course in the Information Technology field. Students seeking career opportunities in IT and software can opt for a BSc IT diploma or course. There are multiple variations available for this course in different fields and subjects, students can choose the categories according to their preferences. BSc is a gateway to work in the Information Technology industry.</p> 
              </div>
            </div>
          </div> 

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="images/course_1.jpg" alt="Image" class="img-fluid"> 
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                    <h2 class="section-title-underline mb-5">
                        <span>Eligibility Criteria
                        </span>
                    </h2>
                    <p>Candidates must have passed their 10+2 level of education from a recognised educational Board. They must have Physics, Chemistry, and Mathematics as the main subjects, and scored a minimum of 50% marks.</p>
                </div>
            </div>

            <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="images/course_5.jpg" alt="Image" class="img-fluid"> 
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="section-title-underline mb-5">
                            <span>What is the scope of BCA?</span>
                        </h2>
                        <p>A. BSc IT graduates can get an initial annual salary package between Rs 2.5 lakh to Rs 4 lakh per annum. Candidate with and BSc IT degree can get profiles such as programmer, system engineer, software engineer, network administrator, hardware engineer, tester, and system analyst.</p>
                        
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