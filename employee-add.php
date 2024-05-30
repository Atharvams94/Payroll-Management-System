<!DOCTYPE html>
<html lang="en">
<title>Add Employee</title>
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
</style>
<body>
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


  <!-- Header -->
  

      
      <form class="page-container" action="empinfophp.php" method="post">
          
                 <p><label class='danger'>Employee id</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="empid" required></p>
                 <p><br>
                     <label  class='danger'>Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input class="page-input page-light-grey page-animate-input" type="text" name="name" required>
                </p><br>
                <p>
                        <label  class='danger'>Date of Birth</label>
                        <input class="page-input page-light-grey page-animate-input" type="date" name="dob" required>
                </p><br>
                <p>
                        <label  class='danger'>Gender</label>
                        <br>
                  <input type="radio" name="gender" value="male" checked><label class='danger'>Male</label><br>
                  <input type="radio" name="gender" value="female"> <label class='danger'>Female</label><br>
                  <input type="radio" name="gender" value="other"> <label class='danger'>Other</label><br>
                        
                </p><br>
                <p>
                        <label  class='danger'>Joining date</label>
                        <input class="page-input page-light-grey page-animate-input" type="date" name="sdate" required>
                </p><br>
              
                 <p>
                     <label  class='danger'>Email</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input class="page-input page-light-grey page-animate-input" type="email" name="email" required></p><br>
                 <p>
                     <label  class='danger'>Phone</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      <input class="page-input page-light-grey page-animate-input" type="text" name="phone" required></p><br>
              
             
          <label  class='danger'>Jobtitle</label><br><br>
                 <select class="page-input page-light-grey page-animate-input" name="jobtitle">
                  <option value="executive">Executive</option>
                   <option value="manager">Manager</option>
                   <option value="director">Director</option>
                    <option value="accountant">Accountant</option>
                      <option value="chief">Chief</option>
              </select>
              <br><br><p>
                     <label  class='danger'>Salary
                                       </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                       <input class="page-input page-light-grey page-animate-input" type="number" name="salary" required></p><br>
          <p><label class='danger'>Bank Account No</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="bacc" required></p><br>
          
                      
                 <p>
                     <label class='danger'>Address</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input class="page-input page-light-grey page-animate-input" type="text" name="address" required>
                </p><br>
                 
                    <p><label class='danger'>Employee Department</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="depid" required></p><br>
          
                 
                 
                     <input type="submit" value="Submit" class="page-input page-green page-round-xxlarge page-animate-input page-hover-blue">
                     
       
                 
               
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
