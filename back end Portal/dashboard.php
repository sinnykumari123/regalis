<!DOCTYPE html>
<html>
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
         
             <div class="header-right col-md-6">
             <div class="row">
               <div class="col-md-8">
                 <button class="dropdown-btn btn-primary" style="color: white;">
                Running session 2021-2022
                   <i class="fa fa-caret-down"></i>
                 </button>
                 <div class="dropdown-container">
                  <a href="#">Running session 2022-2023</a>
                  <a href="#">Running session 2023-2024</a>
                  <a href="#">Running session 2024-2025</a>
                 </div>   
              </div>
            

            <a href="#contact" class="col-md-2"> <i class="fa fa-globe" aria-hidden="true"></i></a>
            <a href="#about" class="col-md-2"> <i class="fa fa-sign-out" aria-hidden="true"></i></a>
             </div>
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
                <span class="fa fa-home fa-25 pr-2"></span>Dashboard
              </button>
          
             </div>
         </div>
      </div>
    </div> 

    <div class="container" id="header">
       <div class="row border mt-5 p-3 border-bottom">
           <div class="col-md-3 border">
               <div class="row">
                    <div class="col-md-12 text-white bg-primary p-2">
                      <span>Total Booking </span>
                      <span class="float-right mr-2 fa fa-ticket fa-25"></span>
                    </div>
                    <div class="col-md-12 p-2">
                      <span class="fa-25 font-weight-bold">10 </span>
                      <span class="float-right fa-25 fa fa-pagelines"></span>
                    </div>
               </div>
           </div>
       <div class="col-md-3 border">
             <div class="row">
                  <div class="col-md-12 text-white bg-primary p-2">
                    <span>Total Courses </span>
                    <span class="float-right mr-2 fa fa-server fa-25"></span>
                  </div>
                  <div class="col-md-12 p-2">
                    <span class="fa-25 font-weight-bold">7</span>
                    <span class=" float-right fa-25 fa fa-pagelines"></span>
                  </div>
             </div>
       </div>
       <div class="col-md-3 border">
          <div class="row">
            <div class="col-md-12 text-white bg-primary p-2">
                <span>Total Contact</span>
                <span class="float-right mr-2 fa fa-phone fa-25"></span>
            </div>
            <div class="col-md-12 p-2">
               <span class="fa-25 font-weight-bold">0</span>
               <span class=" float-right fa-25 fa fa-pagelines"></span>
            </div>
          </div>
       </div>
       <div class="col-md-3 border">
          <div class="row">
             <div class="col-md-12 text-white bg-primary p-2">
                 <span>Total Income</span>
                 <span class="float-right mr-2 fa fa-rupee fa-25"></span>
             </div>
             <div class="col-md-12 p-2">
                 <span class="fa-25 font-weight-bold">235</span>
                 <span class=" float-right fa-25 fa fa-pagelines"></span>
             </div>
          </div>
       </div>
    </div>
  </div>
  <div class='container' id="header">
        <div class='row'>
              <div class='col-md-12'>
                   <div id="barchart_values">
                   </div>
              </div>
        </div>
  </div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    var da = new Date();
    var a = 10;
    var b = 10;
    var c = 10;
    var d = 10;
    var e = 10;
    var f = 10;
    var g = 10;
    var d1 = new Date(da.setDate(da.getDate() - da.getDay()));
    var d2 = new Date(da.setDate(da.getDate() - da.getDay()+1));
    var d3 = new Date(da.setDate(da.getDate() - da.getDay()+2));
    var d4 = new Date(da.setDate(da.getDate() - da.getDay()+3));
    var d5 = new Date(da.setDate(da.getDate() - da.getDay()+4));
    var d6 = new Date(da.setDate(da.getDate() - da.getDay()+5));
    var d7 = new Date(da.setDate(da.getDate() - da.getDay()+6));
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        [d1, a, "#b87333"],
        [d2, b, "silver"],
        [d3, c, "gold"],
        [d4, d, "color: #e5e4e2"],
        [d5, e, "silver"],
        [d6, f, "gold"],
        [d7, g, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Number Of Booking Of Last Week(Date Wise)",
        width: 1000,
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
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

</body>
</html> 
