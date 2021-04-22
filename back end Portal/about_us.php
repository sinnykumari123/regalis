<?php 
 include("connection.php");

 if(isset($_POST['submit']))
 {
    $about = $_POST['aboutEditInput'];
    $file = $_FILES['image']['name'];
   
    $kt = "UPDATE `about` SET `about_cover`='".$file."',`about_content`='".$about."' WHERE about_id = 2";
    /*$kt = "UPDATE from about (about_cover, about_content) values('$file', '$about')";*/

    if (mysqli_query($connect, $kt)) {
    move_uploaded_file($_FILES['image']['tmp_name'], "picture/$file");
    echo "<script>alert('File Inserted')</script>";
  }
  else{
  echo "<script>alert('File not Inserted')</script>";
}

}
$query = "SELECT * from about where about_id= 2";
$sql = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($sql)) {
  $content = $row['about_content'];
}
?>
<!DOCTYPE html>
<head>

<!-- meta  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="portal style.css">


</head>

<body>
  <div class="sidenav">
      <h1>Regalis Foundation</h1>
      <a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
      <a href="about_us.php"><i class="fa fa-briefcase"></i> About</a>
      <a href="admission.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Admission</a>
      <a href="course.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Course</a>
      <button class="dropdown-btn">
        <i class="fa fa-book" aria-hidden="true"></i> Courses 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
        <a href="placement.php"><i class="fa fa-bullhorn" aria-hidden="true"></i> Placement</a>
        <a href="teacher.php"><i class="fa fa-users" aria-hidden="true"></i> Teacher</a>
        <a href="contact.php"><i class="fa fa-envelope"></i> Contact</a>
        <a href="booknow.php"><i class="fa fa-paper-plane"></i> Book Now</a>
</div>
 

   <!---------------------------header part---------------->



    <div class="header">
      <a href="#default" class="logo" id="sidebar-toggle-btn-in" >
        <div class="container" onclick="myFunction(this)" id="sidebar-toggle-btn-out">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
     </a>
   
          <div class="header-right">
            <a href="#home">Running Session : 2021-2022 
              <i class="fa fa-caret-down"></i></a>

            <a href="#contact"> <i class="fa fa-globe" aria-hidden="true"></i></a>
            <a href="#about"> <i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </div>

    </div>

     <!-----------------------/header part---------------->

<!--  Main Content -->

    <div class="header">
      <div class="main">
         <div class="row">
             <div class="col-md-10 col-sm-10">
               <h4>Regalis Foundation</h4>
             </div>
             <div class="col-md-2 col-sm-2">
              <button class="btn btn-primary" id="sidebar-toggle-btn-in">
                <span class="fa fa-briefcase fa-25 pr-2"></span>About
              </button>
          
             </div>
         </div>
      </div>
    </div> 

<!--  Main About Section -->

<div class="container" id="header">
    <div class="row mt-2 text-white">
       
    </div>


    <div class="row mt-2 text-white">
        <div class="col-md-11 col-12 bg-primary p-2 rounded m-auto">
            <span> About </span>
 <!--            <span class="fa fa-edit float-right mr-2 fa-25 p-cursor" onclick="var x = document.getElementsByClassName('aboutEditInput');
              for(var i =0;i<x.length;i++){x[i].readOnly = false;}">
            </span> -->
        </div>
        <div class="col-md-11 col-12 m-auto border">
            <form action="#" method="post" enctype="multipart/form-data">
               
                  <div class="form-group text-dark">
                     <input type="file" name="image">
                     <br>
                     <label>About</label>
                          <textarea name="aboutEditInput" rows="20" class="form-control"><?php echo $content;?></textarea>
                  </div>
                  <div class="form-group col-md-12 text-right">
                          
                          <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                  </div>
            </form>
        </div>
    </div>
</div>

      
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>
 <script>
  CKEDITOR.replace( 'aboutEditInput' );
</script>

</body>
</html> 
