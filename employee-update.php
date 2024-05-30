<?php
include('emp-up-deletephp.php');

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    //echo $id;
    $rec = mysqli_query($connection, "SELECT * FROM employee WHERE Employee_id=$id;");
    $record=mysqli_fetch_array($rec);
    
$name=$record['Name'];
$dob=$record['d_birth'];
$gender=$record['gender'];
$sdate=$record['Start_date'];
$email=$record['Email'];
$phone=$record['Phone_no'];
$loan=$record['loan'];
$pfund=$record['pfund'];
$salary=$record['salary'];
$jobtitle=$record['jobtitle'];
$address=$record['Address'];
$depid=$record['Depart_id'];
$manid=$record['managesDepart_id'];
$bacc=$record['b_accno'];
    
}



?>
<!DOCTYPE html>
<html lang="en">
<title>Department</title>
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
      
      
      <form class="page-container" action="em-updatephp.php" method="post">
          
                 <p>
                      <input class="page-input page-light-grey page-animate-input" type="hidden" name="empid" value="<?php echo $id;?>"></p>
                 <p>
                     <label class='danger'>Name</label>
                        <input class="page-input page-light-grey page-animate-input" type="text" name="name" value="<?php echo $name;?>">
                </p>
                <p>
                        <label class='danger'>Date of Birth</label>
                        <input class="page-input page-light-grey page-animate-input" type="date" name="dob" value="<?php echo $dob;?>">
                </p><br>
                <p>
                        <label class='danger'>Gender</label><br>
                        <input type="radio" class='danger' name="gender" value="male" checked> Male<br>
                        <input type="radio" class='danger' name="gender" value="female"> Female<br>
                        <input type="radio" class='danger' name="gender" value="other"> Other<br>
                        
                </p>
                <p>
                        <label class='danger'>Joining date</label>
                        <input class="page-input page-light-grey page-animate-input" type="date" name="sdate" value="<?php echo $sdate;?>">
                </p>
              
                 <p>
                     <label class='danger'>Email</label>
                        <input class="page-input page-light-grey page-animate-input" type="email" name="email" value="<?php echo $email;?>"></p>
                 <p>
                     <label class='danger'>Phone</label>
                      <input class="page-input page-light-grey page-animate-input" type="text" name="phone" value="<?php echo $phone;?>"></p>
              <p>
                     <label class='danger'>Loan</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="loan" value="<?php echo $loan;?>"></p>
              <p>
                     <label class='danger'>Provident fund
                                       </label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="pfund" value="<?php echo $pfund;?>"></p>
               <p>
                     <label class='danger'>Salary
                                       </label>
                       <input class="page-input page-light-grey page-animate-input" type="number" name="salary" value="<?php echo $salary;?>"></p>
          <p><label class='danger'>Bank Account No</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="bacc" value="<?php echo $bacc;?>"></p>
          <br>
                      <label class='danger'>Jobtitle</label>
                 <select class="page-input page-light-grey page-animate-input" name="jobtitle" value="<?php echo $jobtitle;?>">
                  <option value="executive">Executive</option>
                   <option value="manager">Manager</option>
                   <option value="director">Director</option>
                    <option value="accountant">Accountant</option>
                      <option value="chief">Chief</option>
              </select>
                 <p>
                     <label class='danger'>Address</label>
                        <input class="page-input page-light-grey page-animate-input" type="text" name="address" value="<?php echo $address;?>">
                </p>
                 
                    <p><label class='danger'>Employee Department</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="depid" value="<?php echo $depid;?>"></p>
           <p><label class='danger'>Manager id</label>
                      <input class="page-input page-light-grey page-animate-input" type="number" name="manid" value="<?php echo $manid;?>"></p>
                 
                 
                     <input type="submit" value="Update" class="page-input page-green page-round-xxlarge page-animate-input page-hover-blue">
                     
       
                 
               
            </form>
      
      
      
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

</body>
</html>
