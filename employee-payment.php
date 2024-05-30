<!DOCTYPE html>
<html lang="en">
<title>Payment parameter</title>
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
<!-- Overlay effect when opening sidebar on small screens -->


  <!-- Header -->
      

      
      
      <form class="page-container" action="emp-payphp.php" method="post">
          
                 <p><label class='danger'>Employee id</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="empid" required></p>
                 <p>
                     <label class='danger'>Select Year</label>&nbsp&nbsp
                      <input class="page-input page-light-grey page-animate-input" type="number" name="year" required></p><br><br>
                <p> <label class='danger'>Select Month</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                 <select class="page-input page-light-grey page-animate-input" name="month">
                  <option value="january">january</option>
                   <option value="february">february</option>
                   <option value="march">march</option>
                    <option value="april">april</option>
                      <option value="may">may</option>
                     <option value="june">june</option>
                     <option value="july">july</option>
                     <option value="august">august</option>
                     <option value="september">september</option>
                     <option value="october">october</option>
                     <option value="november">november</option>
                     <option value="december">december</option>
              </select>
          </p>
                <p>
                     <label class='danger'>Absence</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      <input class="page-input page-light-grey page-animate-input" type="number" name="absence" required></p>
                <p>
                     <label class='danger'>Overtime</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                       <input class="page-input page-light-grey page-animate-input" type="number" name="overtime" required></p>
               <p><label class='danger'>Seasonal Bonus</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="sbonus" required></p>
          
               <p><label class='danger'>Other Bonus</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="obonus" required></p>
                 
                 
                     <input type="submit" value="Submit" class="page-input page-green page-round-xxlarge page-animate-input page-hover-blue page-button">
                     
       
                 
               
            </form>
      
      
      
      </div>
   
      
          
  </div>

<!-- page.CSS Container -->
<script>
function page_open() {
  document.getElementById("mySidenav").style.width = "250px";
}
 
function page_close() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>

</body>
</html>
