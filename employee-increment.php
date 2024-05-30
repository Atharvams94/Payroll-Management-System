<!DOCTYPE html>
<html lang="en">
<title>Payroll System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.pageschools.com/pagecss/4/page.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.page-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.page-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<?php
    include('navigation.php');
    ?>

<!-- Top menu on small screens -->
<header class="page-container page-top page-hide-large page-red page-xlarge page-padding">
  <a href="javascript:void(0)" class="page-button page-red page-margin-right" onclick="page_open()">☰</a>
  <span>Payroll system</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="page-overlay page-hide-large" onclick="page_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
  <div class="page-main" style="margin-left:290px;margin-right:-10px;margin-top: -5px;margin-bottom: 0px">

  <!-- Header -->
      
      <div class="page-display-container page-text-blue" style="font-size: 50px">
          <img src="images/banner.jpg" alt="Lights" style="width:100%" style="height: 150px">
          <div class="page-display-middle page-large" > <h1 >Welcome to Payroll system</h1></div>
      </div>
      <div class="page-container" style="padding: 50px 200px 20px 200px">
      
      
      <form class="page-container" action="emp-setsalaryphp.php" method="post">
          
                
                 
                <p>
                     <label>Salary</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="salary"></p>
                <input type="submit" value="submit" class="page-input page-green page-round-xxlarge page-animate-input page-hover-blue">
                     
       
                 
               
            </form>
      
      
      
      </div>
   
      
          
  </div>

<!-- page.CSS Container -->
<div class="page-dark-grey page-container page-padding-32" style="margin-top:75px;padding-right:58px"><p class="page-right">Powered by <a href="https://www.pageschools.com/pagecss/default.asp" title="page.CSS" target="_blank" class="page-hover-opacity">page.css</a></p></div>

<script>
// Script to open and close sidebar
function page_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function page_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
