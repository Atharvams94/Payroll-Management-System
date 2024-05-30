<?php
    include('configall.php');
   
$empid=$_POST["empid"];
   $name=$_POST["name"];
   $dob=$_POST["dob"];
$gender=$_POST["gender"];
$sdate=$_POST["sdate"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$loan=$_POST["loan"];
$pfund=$_POST["pfund"];
$salary=$_POST["salary"];
$jobtitle=$_POST["jobtitle"];
$address=$_POST["address"];
$depid=$_POST["depid"];
$manid=$_POST["manid"];
$bacc=$_POST["bacc"];
$sqlll="UPDATE `employee` SET `Name` = '$name', `Address` = '$address', `Phone_no` = '$phone', `Email` = '$email', `Start_date` = '$sdate', `d_birth` = '$dob', `gender` = '$gender', `loan` = '$loan', `pfund` = '$pfund', `salary` = '$salary', `jobtitle` = '$jobtitle', `Depart_id` = '$depid', `managesDepart_id` = '$manid', `b_accno` = '$bacc' WHERE `employee`.`Employee_id` = $empid";
    $ff=mysqli_query($connection,$sqlll);


if($ff)
{
    echo "successfully updated info into database";
    
 echo '<script> setTimeout(function() { window.location = "employee.php"; }, 2000); </script>';
}
else{
    echo "<script type='text/javascript'>alert('Invalid parameters');
    window.location='employee-update.php';
    </script>";
}


?>