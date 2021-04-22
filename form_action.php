<?php
   include("connection.php");
   session_start();
   
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";

      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         header("location: back end Portal/dashboard.php"); 
         
         
      }else {
         /*$error = "Your Login Name or Password is invalid";*/
         echo "bye";
         header("location: index.php");
      }
   
?>