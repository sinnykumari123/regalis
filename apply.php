<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Apply</h2>
              <p>Regalis Welfare Foundation</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index-2.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Apply</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">

              <div class="col-lg-12 mb-5 text-center">
            <h2 class="section-title-underline mb-6">
              <span>Apply for Admission</span>
            </h2>
          </div>
            <div class="row justify-content-center">
              
                <div class="col-lg-6">
                  <form action="register_action.php" method="post">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="useremail">Email</label>
                            <input type="email" id="useremail" name="useremail" class="form-control form-control-lg" placeholder="Email" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="usercourses">Courses</label>
                            <input type="text" id="usercourses" name="usercourses" class="form-control form-control-lg" placeholder="Courses" list="courses" required>
<!--                             <input list="browsers" name="browser" id="browser"> -->
                              <datalist id="courses">
                                <option value="Paramedical - Degree Course">
                                <option value="Paramedical - Diploma Course">
                                <option value="Paramedical - Lateral Entry Course">
                                <option value="Paramedical - Nursing Course">
                                <option value="Pharamacy">
                                <option value="Management">
                                <option value="Technology">
                                <option value="Yoga">  
                              </datalist>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="usercontact">Contact</label>
                            <input type="text" id="usercontact" name="usercontact" class="form-control form-control-lg" placeholder="Contact" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="useraddress">Address</label>
                            <input type="text" id="useraddress" name="useraddress" class="form-control form-control-lg" placeholder="Address" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="usercity">City</label>
                            <input type="text" id="usercity" name="usercity" class="form-control form-control-lg" placeholder="City" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="userstate">State</label>
                            <input type="text" id="userstate" name="userstate" class="form-control form-control-lg" placeholder="State" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="userzip">Zip</label>
                            <input type="text" id="userzip" name="userzip" class="form-control form-control-lg" placeholder="Zip" required>
                        </div>
                    <!--      <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="text" id="pword" name="password" class="form-control form-control-lg" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Re-type Password</label>
                            <input type="text" id="re_type_pword" name="re_type_password" class="form-control form-control-lg" placeholder="Re-type Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div> -->
                    </div>
                 <!--    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Submit" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div> -->
                  </form>
                </div>

                <div class="col-lg-6">
                  <form action="register_action.php" method="post">
                    <div class="row">
                     <h6 style="color: red;">Payment</h6>
                       <div class="col-md-12 form-group">
                         <label for="fname">Accepted Cards</label>
                          <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                          </div>
                       </div>
                        <div class="col-md-12 form-group">
                            <label for="usercardname">Name on Card</label>
                            <input type="text" id="usercardname" name="usercardname" class="form-control form-control-lg" placeholder="John" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="usercredit">Credit card numbe</label>
                            <input type="email" id="usercredit" name="usercredit" class="form-control form-control-lg" placeholder="1111-2222-3333-4444" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" class="form-control form-control-lg" placeholder="September" list="month" required>
<!--                             <input list="browsers" name="browser" id="browser"> -->
                              <datalist id="month">
                                <option value="January">
                                <option value="February">
                                <option value="March">
                                <option value="April">
                                <option value="May">
                                <option value="June">
                                <option value="July">
                                <option value="August"> 
                                <option value="September">
                                <option value="October">
                                <option value="November">
                                <option value="December">  
                              </datalist>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="expyear">Exp Year</label>
                            <input type="text" id="expyear" name="expyear" class="form-control form-control-lg" placeholder="2025" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" class="form-control form-control-lg" placeholder="352" required>
                        </div>
                       
                     



                       <!--   <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="text" id="pword" name="password" class="form-control form-control-lg" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Re-type Password</label>
                            <input type="text" id="re_type_pword" name="re_type_password" class="form-control form-control-lg" placeholder="Re-type Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Continue to checkout" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                  </form>
                </div>

            </div>
            

          
        </div>
    </div>

    

    <!-- Start footer -->

  <?Php include("footer.php"); ?>

  <!-- End footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>
  
   <!-- confirm password JS -->
  <script>
  function matchPassword() {
  var pw1 = document.getElementById("pswd1").value;
  var pw2 = document.getElementById("pswd2").value;
  if(pw1 != pw2)
  { 
      alert("Passwords  not match");
      return false;
    } else {
      return true;
    }
  }
</script>
  
  
    <script>
      var myInput = document.getElementById("psw");
      var letter = document.getElementById("letter");
      var capital = document.getElementById("capital");
      var number = document.getElementById("number");
      var length = document.getElementById("length");

      // When the user clicks on the password field, show the message box
      myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
      }

      // When the user clicks outside of the password field, hide the message box
      myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
      }

      // When the user starts to type something inside the password field
      myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
          letter.classList.remove("invalid");
          letter.classList.add("valid");
        } else {
          letter.classList.remove("valid");
          letter.classList.add("invalid");
      }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
          capital.classList.remove("invalid");
          capital.classList.add("valid");
        } else {
          capital.classList.remove("valid");
          capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
          number.classList.remove("invalid");
          number.classList.add("valid");
        } else {
          number.classList.remove("valid");
          number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) {
          length.classList.remove("invalid");
          length.classList.add("valid");
        } else {
          length.classList.remove("valid");
          length.classList.add("invalid");
        }
      }
</script>
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