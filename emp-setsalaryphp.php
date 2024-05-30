<?php
    include('configall.php');
   

$salary=$_POST["salary"];
$jobtitle=$_POST["jobtitle"];
$sql="UPDATE `employee` SET `salary` = '$salary' WHERE `jobtitle` ='$jobtitle';";
    $test=mysqli_query($connection,$sql);
if($test)
{
    echo '<script> setTimeout(function() { window.location = "employee.php"; }, 2000); </script>';
    
}
else{
    echo "<script type='text/javascript'>alert('Failed to update salary');
    window.location='employee.php';
    </script>";;
}





?>