<!DOCTYPE html>
<html lang="en">
<title>Payment history</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style/st.css">
<link rel="stylesheet" href="style/page.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.page-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.page-half img:hover{opacity:1}
.danger {background-color: #607d8b;
  color: white;
  padding: 8px;
  }
  .jumbotron {
    position: relative;
    background: url("https://indonesiaexpat.biz/wp-content/uploads/2019/12/salary-myncretirement.png"); 
    background-attachment: fixed;
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
}
</style>
<body class='jumbotron'>
   
<!-- Sidebar/menu -->
<?php
    include('navigation.php');
    ?>

<!-- Top menu on small screens -->


<!-- Overlay effect when opening sidebar on small screens -->
        <div class="nav">   
                                        
        <div class="page-bar page-hide-small page-hide-medium page-blue-gray page-container " style="position:inherit" >
    <a href="index.php" class="page-bar-item page-large page-button page-white page-margin page-border page-bottombar page-topbar page-leftbar page-rightbar page-hover-text-light-blue   page-hover-white page-hover-border-light-blue page-border-black page-round-xxlarge " ><b><h2>Payroll Management System</h2></b></a>
    </div>

        <div>
    <button class="page-button page-light-grey page-opacity page-hover-opacity-off page-border page-border-black page-large " style="position:fixed;" onclick="page_open()">&#9776;</button>
    </div>
<!-- !PAGE CONTENT! -->
  <div class="page-main" style="margin-left:90px;margin-right:90px;margin-top: -5px;margin-bottom: 0px">

  <!-- Header -->
<br><br>

          
      
      <form class="page-container" action="employee-payhistoryshow.php" method="post">
          
                
                 <p>
                     <label class='danger'>Select id to see payment history:</label>
                    <input class="page-input page-light-grey page-animate-input" type="number" name="id" required></p>
                
     <input type="submit" value="generate" class="page-input page-green page-round-xxlarge page-animate-input page-hover-blue page-button">
                     
       
                 
               
            </form>
      
      
      
      </div>
   
      
          
  </div>

<!-- page.CSS Container -->

<script>
// Script to open and close sidebar
function page_open() {
  document.getElementById("mySidenav").style.width = "250px";
}
 
function page_close() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>
