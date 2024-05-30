<?php include('depdataphp.php');
session_start();
if (isset($_SESSION['user_name'])) {
  ?>
  <HTML>
  <head>
  <title>HOME</title>
      <link rel="icon" type="image/png" href="images/f%20small.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="style/st.css">

  <link rel="stylesheet" href="style/page.css">
  
  <script>
function page_open() {
document.getElementById("mySidenav").style.width = "250px";
}

function page_close() {
document.getElementById("mySidenav").style.width = "0";
}

</script>
<style>
  .jumbotron {
  position: relative;
  background: url("https://wallpapercave.com/wp/wp2446267.jpg"); 
  background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
.cancelbtn {
width: auto;
padding: 10px 18px;
background-color: #f44336;
}

</style>
  </head>
  <body class='jumbotron' >
  
  <?php
  include('navigation.php');
  ?>
  
  <div class="page-bar page-hide-small page-hide-medium page-hover-white page-container " style="position:inherit" >
  <a href="index.php" class="page-bar-item page-large page-button page-white page-margin page-border page-bottombar page-topbar page-leftbar page-rightbar page-hover-text-light-blue   page-hover-white page-hover-border-light-blue page-border-black page-round-xxlarge" ><b><h2>Payroll Management System</h2></b></a>
  <a href="logout.php"  style="float:right" class="page-bar-item page-button page-large page-white page-margin page-border page-border-black page-hover-white page-hover-border-light-blue page-hover-text-light-blue page-round-xxlarge">Log-out</a>
  </div>

    <div>
  <button class="page-button page-light-grey page-opacity page-hover-opacity-off page-border page-border-black page-large " style="position:fixed;" onclick="page_open()">&#9776;</button>
  </div>

<div class="centered">

    <a href="admin_home_page.php" class=" page-xxlarge page-btn page-white page-opacity page-hover-opacity-off page-border page-hover- page-hover-border-black  page-border-black page-round-xlarge"><h1><b>Get Started</b></h1></a>

</div>
  </body>
  </html>

<?php 
}


else{
  ?>
<HTML>
    <head>
    <title>HOME</title>
        <link rel="icon" type="image/png" href="images/f%20small.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style/st.css">

    <link rel="stylesheet" href="style/page.css">
    
<style>
    .jumbotron {
    position: relative;
    background: url("https://wallpapercave.com/wp/wp2446267.jpg"); 
    background-attachment: fixed;
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

</style>
    </head>
    <body class='jumbotron' >
    
  

    <div class="page-bar page-hide-small page-hide-medium page-hover-white page-container " style="position:inherit" >
    <a href="index.php" class="page-bar-item page-large page-button page-white page-margin page-border page-bottombar page-topbar page-leftbar page-rightbar page-hover-text-light-blue   page-hover-white page-hover-border-light-blue page-border-black page-round-xxlarge" ><b><h2>Payroll Management System</h2></b></a>
    </div>

     
    <div class="page-modal-content  page-animate-zoom page-modal" id='id01'>

<div class="page-center"><br>
  <img src="http://cdn.onlinewebfonts.com/svg/download_411076.png" alt="Avatar" style="width:30%" class="page-circle page-margin-top">
</div>

<form class="page-container" action="login.php" method="post" autocomplete="off">
  <div class="page-section">
    <label><b>Username</b></label>
    <input class="page-input page-border page-margin-bottom" placeholder="Enter Username" name="uname"><br>
    <label><b>Password</b></label>
    <input class="page-input page-border" type="password" placeholder="Enter Password" name="password" required><br>

    <button class="page-button page-block page-light-blue page-section page-padding" type="submit">Login</button>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="page-button page-block page-red page-section page-padding">Cancel</button>
  
    </div>
  </div>
</form>



</div>

<div class="centered">

        <h1 class=" page-xxlarge page-btn page-white page-opacity page-hover-opacity-off page-border page-hover- page-hover-border-black  page-border-black page-round-xlarge" onclick="document.getElementById('id01').style.display='block'"><b>Get Started</b></h1>
</div>
        <div id="id01"  class="page-modal" onclick="this.style.display='none'">
          <span class="page-button page-hover-red page-xlarge page-display-topright">&times;</span>
          <div align="right" style="height:100%" class="page-modal-content page-card-4 page-animate-zoom" style="max-width:600px">
            <iframe width="100%" height="100%" >
      
            </iframe>
          </div>
         </div>
  

      
<br>
   
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    </body>
    </html>
    
<?php 
}
?>  
