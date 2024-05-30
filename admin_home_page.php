<?php include('depdataphp.php');
session_start();
if (isset($_SESSION['user_name'])) {
 
?>
<!DOCTYPE html>
<html lang="en">
<title>Admin Home Page</title>
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
    
    table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

    td,th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}
tr:nth-child(odd){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #607d8b;
  color: white;
}
.danger {background-color: #607d8b;
  color: white;
  padding: 8px;
  }
  .jumbotron {
    position: relative;
    background: url("https://www.mockandassociates.com/wp-content/uploads/2018/11/Tax-Consulting-750x375.jpg"); 
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


       
       

          <div id="margins" class="page-margin page-margin-top page-center page-justify">
            <div class="page-panel page-round-xlarge page-white page-hover-white page-padding-large page-card page-margin page-button page-border  page-border- page-hover-border-black" style="width: 350px; height:300px">
              <h2>Admin Profile</h2>
              <img src="https://www.jobisjob.co.uk/blog/wp-content/uploads/2014/04/database.jpg" style="width:320px; height:150px" onclick="document.getElementById('id01').style.display='block'" class="page-image page-border page-round-large page-border- page-hover-border-black" >
            
              <div id="id01"  class="page-modal" onclick="this.style.display='none'">
                <span class="page-button page-hover-red page-xlarge page-display-topright">&times;</span>
                <div align="left" style="height:100%" class="page-modal-content page-card-4 page-animate-zoom" style="max-width:600px">
          
                 <iframe width="100%" height="100%" src="original.html">
            
               </iframe>
 
                </div>
              </div>

            </div>
            <div class="page-panel page-round-xlarge page-white page-hover-white page-padding-large page-card page-margin page-button page-border  page-border- page-hover-border-black" style="width: 350px; height:300px">
              <h2>Department Details</h2>
            <a href='department.php'>  <img src="https://www.powerlitefitz.co.uk/wp-content/uploads/2020/03/Farida_Grewal_design-289.jpg" style="width:320px; height:150px" class="page-image page-border page-round-large page-border- page-hover-border-black" ></a>
            
              <div id="id01"  class="page-modal" onclick="this.style.display='none'">
                <span class="page-button page-hover-red page-xlarge page-display-topright">&times;</span>
                <div align="right" style="height:100%" class="page-modal-content page-card-4 page-animate-zoom" style="max-width:600px">
                  <iframe width="100%" height="100%" src="original.html">
            
                  </iframe>
 
                </div>
              </div>

            </div>

            <div class="page-panel page-round-xlarge page-white page-hover-white page-padding-large page-card page-margin page-button page-border  page-border- page-hover-border-black" style="width: 350px; height:300px">
              <h2>Employee Details</h2>
            <a href='employee.php'>  <img src="https://www.hubinternational.com/-/media/1---Old-Root-Media/Employee-Value-Proposition-min.jpg" style="width:320px; height:150px" class="page-image page-border page-round-large page-border- page-hover-border-black" ></a>
            
              <div id="id01"  class="page-modal" onclick="this.style.display='none'">
                <span class="page-button page-hover-red page-xlarge page-display-topright">&times;</span>
                <div align="right" style="height:100%" class="page-modal-content page-card-4 page-animate-zoom" style="max-width:600px">
                  <iframe width="100%" height="100%" src="original.html">
            
                  </iframe>
 
                </div>
              </div>

            </div>
<br>
            <div class="page-panel page-round-xlarge page-white page-hover-white page-padding-large page-card page-margin page-button page-border  page-border- page-hover-border-black" style="width: 350px; height:300px">
              <h2>Payment Parameters</h2>
              <a href='employee-payment.php'> <img src="https://th.bing.com/th/id/OIP.byIRO2nXLvm0mM88egdUzQHaE8?pid=Api&rs=1" style="width:320px; height:150px" class="page-image page-border page-round-large page-border- page-hover-border-black" >
            
              <div id="id01"  class="page-modal" onclick="this.style.display='none'">
                <span class="page-button page-hover-red page-xlarge page-display-topright">&times;</span>
                <div align="left" style="height:100%" class="page-modal-content page-card-4 page-animate-zoom" style="max-width:600px">
          
                 <iframe width="100%" height="100%" src="index.html">
            
               </iframe>
               
                </div>
              </div>

            </div>

            <div class="page-panel page-round-xlarge page-white page-hover-white page-padding-large page-card page-margin page-button page-border  page-border- page-hover-border-black" style="width: 350px; height:300px">
              <h2>Pay Slip</h2>
            <a href='employee-payslip.php'>  <img src="https://loanscanada.ca/wp-content/uploads/2016/01/loan_payment.png" style="width:320px; height:150px" class="page-image page-border page-round-large page-border- page-hover-border-black" ></a>
            
              <div id="id01"  class="page-modal" onclick="this.style.display='none'">
                <span class="page-button page-hover-red page-xlarge page-display-topright">&times;</span>
                <div align="right" style="height:100%" class="page-modal-content page-card-4 page-animate-zoom" style="max-width:600px">
          
                 <iframe width="100%" height="100%" src="index.html">
            
               </iframe>
 
                </div>
              </div>

            </div>
            <div class="page-panel page-round-xlarge page-white page-hover-white page-padding-large page-card page-margin page-button page-border  page-border- page-hover-border-black" style="width: 350px; height:300px">
              <h2>Payment History</h2>
              <a href='employee-payhistory.php'> <img src="https://smallimg.pngkey.com/png/small/365-3658493_shipjewel-cash-on-delivery-cash-on-delivery-now.png" style="width:320px; height:150px" class="page-image page-border page-round-large page-border- page-hover-border-black" >
            
              <div id="id01"  class="page-modal" onclick="this.style.display='none'">
                <span class="page-button page-hover-red page-xlarge page-display-topright">&times;</span>
                <div align="left" style="height:100%" class="page-modal-content page-card-4 page-animate-zoom" style="max-width:600px">
          
                 <iframe width="100%" height="100%" src="index.html">
            
               </iframe>
               
                </div>
              </div>

            </div>

          </div>




          <script>
function page_open() {
  document.getElementById("mySidenav").style.width = "250px";
}
 
function page_close() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>
<br>
<br>
<div class="footer"  >
<h4>C3-03-19CE5503 /  C3-02-19CE5502 / C3-14-18CE7013</h4>

</div>
<style>
.footer {
   position: absolute;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #607d8b;
   color: white;
   text-align: center;
}
</style>
		 </body>
</html>
<?php
}
else{
  echo "<script type='text/javascript'>alert('Login first');
  window.location='home.php';
  </script>";
}
?>