<?php
  include('configall.php');


   $depid=$_POST["depid"];
   $depname=$_POST["depname"];
   
$sql="INSERT INTO `department` (`Depart_id`, `Depart_name`) VALUES ('$depid', '$depname')";
$test=mysqli_query($connection,$sql);
if($test)
{
    echo "successfully inserted into database";
    echo '<script> setTimeout(function() { window.location = "department.php"; }, 2000); </script>';
}
else{
    echo "<script type='text/javascript'>alert('Invalid parameters');
    window.location='department.php';
    </script>";
}




?>