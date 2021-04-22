 <!--   connection -->

<?php 
include("connection.php");
$content = "";
$query = "SELECT * from admission where admission_id= 1";
$sql = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($sql)) {
$content = $row['admission_content'];
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
              <h2 class="mb-0">Admissions</h2>
              <p>Regalis Welfare Foundation</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Admission</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="images/course_6.jpg" alt="Image" class="img-fluid"> 
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                    <h2 class="section-title-underline mb-5">
                        <span>Application Procedure :</span>
                    </h2>
                    <p>Candidates seeking admission in Undergraduate Programs { BPT / BMLT / Occuption Therapy / O.T Assistant / D.Pharma / B.Pharma / GNM / ANM / BSC.NURSING / BHM / BBA / BCA} may either apply onlineor may collect ‘Entrance Exam Form’ from the College Reception by paying Rs. 1000/- in cash.</p>
<!-- 
                    <ol class="ul-check primary list-unstyled">
                        <li>Accomplished Application Form</li>
                        <li>High School Report Card </li>
                        <li>High School Transcript</li>
                        <li>Certificate of Good Moral Characte</li>
                        <li>2×2 picture</li>
                        <li>1×1 picture</li>
                    </ol> -->

                </div>
            </div>

            <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="images/course_5.jpg" alt="Image" class="img-fluid"> 
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="section-title-underline mb-5">
                            <span>Eligibility :</span>
                        </h2>
                        <p>He/She must have qualified Intermediate/+2 in Arts, Science, or Commerce as a regular student or as a student of Distance Education. He/She must have obtained at least 45% marks overall at intermediate/+2 level. The students from SC/ST/EBC/ Differently-abled Categories should have 40% marks overall.</p>
                      <!--   <ol class="ul-check primary list-unstyled">
                                <li>Accomplished Application Form</li>
                                <li>High School Report Card </li>
                                <li>High School Transcript</li>
                                <li>Certificate of Good Moral Characte</li>
                                <li>2×2 picture</li>
                                <li>1×1 picture</li>
                            </ol> -->
                    </div>
            </div>
            <br><br>
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="images/courses3.jpg" alt="Image" class="img-fluid"> 
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                    <h2 class="section-title-underline mb-5">
                        <span>Certificates:</span>
                    </h2>
                    <p>At the time of admission, the student is required to present the Original Certificates (for verification) as well as 2 Photo Copies of the following documents:</p>
                   

                    <ol class="ul-check primary list-unstyled">
                        <li>Matric/ICSE/CBSE/NIOS/Other Board Certificate.</li>
                        <li>Marksheet of the qualifying examination – +2 or Intermediate Colour passport size photograph (5-Copies) </li>
                        <li>College/School Leaving Certificate (CLC/SLC).</li>
                        <li>Character Certificate of +2/Intermediate.</li>
                        <li>Migration Certificate (Not necessary, for those from Bihar Board).</li>
                        <li>Caste Certificate (From DM or competent authority for SC/ST/OBC/EBC/Differently-Abled)</li>
                    </ol>

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