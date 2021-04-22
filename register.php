<?php
   include("connection.php");
   session_start();
   $msg = "";
   if (isset($_POST['submit'])) {
        
      $myusername = $_POST['username'];
      $myuseremail = $_POST['useremail'];
      $myusercontact = $_POST['usercontact'];
      $mypassword = $_POST['password'];
      $re_type_password = $_POST['re_type_password']; 

      $sql = "INSERT INTO registration (name, email, contact, password, re_type_password)
         VALUES ('".$myusername."', '".$myuseremail."', '".$myusercontact."', '".$mypassword."', '".$re_type_password."')";

         // if ($connect->query($sql) === TRUE) {
         //   echo "successfully";
         // } else {
         //   echo "Error: " . $sql . "<br>" . $connect->error;
         // }


      $result = mysqli_query($connect,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
  
      if($result == 1) {
         
         $_SESSION['login_user'] = $myusername;
         $msg = "Thankyou For Register.";
      }else {
         /*$error = "Your Login Name or Password is invalid";*/
         echo "bye";
         $msg = "Not Successfully";
      }
    }
   
?>
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
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2>
              <p>Regalis Welfare Foundation</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
               

                <div class="col-md-5">
                  <?php 
                  if ($msg != "") {?> 
                   <h1><?php echo $msg;?></h1>
                   <?php }
               ?>
                  <form action="" method="post">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" required >
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="useremail">Email</label>
                            <input type="email" id="useremail" name="useremail" class="form-control form-control-lg" placeholder="Email" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="usercontact">Contact</label>
                            <input type="text" id="usercontact" name="usercontact" class="form-control form-control-lg" placeholder="Contact" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="text" id="pswd1" name="password" class="form-control form-control-lg" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword" >Re-type Password</label>
                            <input type="text" id="pswd2" name="re_type_password" class="form-control form-control-lg" placeholder="Re-type Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" onclick="return matchPassword()" name="submit" value="Submit" class="btn btn-primary btn-lg px-5">
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
  


  <!-- password validation --> 
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