<?php
session_start();


if (isset($_SESSION['user_name'])) {
  $message = $_SESSION['user_name'].' is logged in as '.$_SESSION['role'];
  echo "<SCRIPT>
   alert('$message')
  </SCRIPT>";
  
  echo '<div class="page-bar page-hide-small page-hide-medium page-hover-white page-container " style="position:inherit" >
  <a href="index.php" class="page-bar-item page-large page-button page-white page-margin page-border page-bottombar page-topbar page-leftbar page-rightbar page-hover-text-light-blue   page-hover-white page-hover-border-light-blue page-border-black page-round-xxlarge" ><b> '.$_SESSION['user_name'] .'</b></a>

  <a href="logout.php"  style="float:right" class="page-bar-item page-button page-large page-white page-margin page-border page-border-black page-hover-white page-hover-border-light-blue page-hover-text-light-blue page-round-xxlarge">Log-out</a>  </div>';

}

else {
  echo '<div class="page-bar page-hide-small page-hide-medium page-hover-white page-container " style="position:inherit" >
  <a href="index.php" class="page-bar-item page-large page-button page-white page-margin page-border page-bottombar page-topbar page-leftbar page-rightbar page-hover-text-light-blue   page-hover-white page-hover-border-light-blue page-border-black page-round-xxlarge" ><b>Payroll Management System</b></a>

  <a href="index.php"  style="float:center" class="page-bar-item page-button page-large page-white page-margin page-border page-border-black page-hover-white page-hover-border-light-blue page-hover-text-light-blue page-round-xxlarge">Log-in</a>  </div>';
}
 ?>



<HTML>
<head>
<title>Payroll Management System</title>
    <link rel="icon" type="image/png" href="images/f%20small.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style/st.css">

<link rel="stylesheet" href="style/page.css">

<script>
function page_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function page_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
</head>
<body background="images/bg2.jpg" style="height: 100%; background-position: center;
  background-repeat: no-repeat;
  background-size: cover;" >

  <div class="page-sidebar page-bar-block page-animate-left page-hide-large page-light-grey page-center" style="display:none;z-index:5" id="mySidebar">


</div>
  <!-- Page Content -->
  <div class="page-overlay page-animate-opacity" onclick="page_close()" style="cursor:pointer" id="myOverlay">

</div>


<button class="page-button page-light-grey page-opacity page-hover-opacity-off page-border page-border-black page-large page-hide-large " style="position:fixed;" onclick="page_open()">&#9776;</button>
<div>
  
</div>





<div class="page-display-middle page-large">

<a href="*.php" class=" page-xxlarge page-btn page-white page-opacity page-hover-opacity-off page-margin page-border   page-hover- page-hover-border-black  page-border-black page-round-xlarge" ><b>XYZ</b></a>
</div>
</body>
</html>
