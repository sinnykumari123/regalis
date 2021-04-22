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
              <h2 class="mb-0">Management Course</h2>
              <p>Master Of Business Administration (MBA)</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Master Of Business Administration (MBA)</span>
      </div>
    </div>

    <div class="container pt-5 mb-5">
            <div class="row">
              <div class="col-lg-12">
                <h2 class="section-title-underline">
                  <span>Master Of Business Administration (MBA)</span>
                </h2>
              </div>
              <div class="col-lg-12">
                <p>MBA stands forMaster of Business Administration which is a 2 year postgraduate course in management stream. It is the most popular course in India as well as abroad and lakhs of students opt for MBA coursein India every year.MBA course curricumulm impart skills to students which are neccessary to succeed in the multiple related field of Management, Economics, Commerce and in the overall corporate sector.MBA courses in India are offered in 2-year full time mode and also in distance education mode. Other popular modes of MBA courses include Online MBA, Executive MBA, and Part Time MBA.MBA courses come in different specializations like MBA Finance, MBA Marketing, MBA HR, MBA Business Analytics, MBA Entrepreneurship, etc.MBA course subjects impart both theoretical and practical training and give a general understanding of business management functions.</p> 
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
                    <p>Eligibility criteria for MBA is Graduation. However, Many colleges prescribe minimum marks in aggregate in Graduation ( 50% for General and 45 percent for SC/ST candidates).</p>
                </div>
            </div>

            <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="images/course_5.jpg" alt="Image" class="img-fluid"> 
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="section-title-underline mb-5">
                            <span>What is the scope of MBA?</span>
                        </h2>
                        <p>Masters in Business Administration offers various areas of specialization like Management, Finances, Operations, Hotel Management, Public Relations, Human Resources, Information, and Technology. A career in MBA is not only progressive but also brings with it many perks.</p>
                        
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