<?php include('emp-up-deletephp.php');
session_start();
if (isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<title>Employee Data</title>
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
    background: url("https://www.hubinternational.com/-/media/1---Old-Root-Media/Employee-Value-Proposition-min.jpg"); 
    background-attachment: fixed;
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
}
</style>

<body class='jumbotron' >
<?php
    include('navigation.php');
    ?>

<!-- Top menu on small screens -->


<!-- Overlay effect when opening sidebar on small screens -->
        <div class="nav">   
                                        
        <div class="page-bar page-hide-small page-hide-medium page-blue-gray page-container " style="position:inherit" >
    <a href="index.php" class="page-bar-item page-large page-button page-white page-margin page-border page-bottombar page-topbar page-leftbar page-rightbar page-hover-text-light-blue   page-hover-white page-hover-border-light-blue page-border-black page-round-xxlarge " ><b><h2>Payroll Management System</h2></b></a>
    <a href="logout.php"  style="float:right" class="page-bar-item page-large page-button page-white page-margin page-border page-bottombar page-topbar page-leftbar page-rightbar page-hover-text-light-blue   page-hover-white page-hover-border-light-blue page-border-black page-round-xxlarge">Log-out</a>
  
  </div>

        <div>
    <button class="page-button page-light-grey page-opacity page-hover-opacity-off page-border page-border-black page-large " style="position:fixed;" onclick="page_open()">&#9776;</button>
    </div>
<!-- !PAGE CONTENT! -->
  <div class="page-main" style="margin-left:90px;margin-right:90px;margin-top: -5px;margin-bottom: 0px">

  <!-- Header -->
<br><br>
   <div class="page-container">
      <h4 class='danger'>Employee Data</h4>
       
       <a href="employee-add.php" class="page-button page-blue page-right">Add employee <span class="page-text-red">+</span></a>
 
       <table>
           <tr><th>Employee id</th>
               <th>Name</th>
               <th>Email</th>
               <th>Salary</th>
               <th>Provident fund</th>
               <th>Loan</th>
               <th>Job title</th>
               <th>Department</th>
               <th colspan="2">Action</th></tr>
           <?php while($row=mysqli_fetch_array($result)) {?>
           <tr>
               <td><?php echo $row['Employee_id']; ?></td>
               <td><?php echo $row['Name']; ?></td>
               <td><?php echo $row['Email']; ?></td>
               <td><?php echo $row['salary']; ?></td>
               <td><?php echo $row['pfund']; ?></td>
               <td><?php echo $row['loan']; ?></td>
               <td><?php echo $row['jobtitle']; ?></td>
               <td><?php echo $row['Depart_id']; ?></td>
               <td><a href="employee-update.php?edit=<?php echo $row['Employee_id']; ?>" class="page-button" style="background-color:teal; color:white" >Edit</a></td>
               <td><a href="emp-up-deletephp.php?del=<?php echo $row['Employee_id']; ?>" class="page-button" style="background-color:red; color:white">Delete</a></td>
               
           </tr>
           <?php } ?>
       </table>
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
<?php
}
else{
  echo "<script type='text/javascript'>alert('Login first');
  window.location='home.php';
  </script>";
}
?>