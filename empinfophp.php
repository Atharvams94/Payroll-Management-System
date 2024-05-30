<?php

  include('configall.php');
  

   $empid=$_POST["empid"];
   $name=$_POST["name"];
   $dob=$_POST["dob"];
$gender=$_POST["gender"];
$sdate=$_POST["sdate"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$loan=0;
$pfund=0;
$salary=$_POST["salary"];
$jobtitle=$_POST["jobtitle"];
$address=$_POST["address"];

$depid=$_POST["depid"];
$manid=$depid;
$bacc=$_POST["bacc"];
$sql="Insert into employee (Employee_id,Name,Address,Phone_no,Email,Start_date,d_birth,gender,loan,pfund,salary,jobtitle,Depart_id,managesDepart_id,b_accno)values('$empid','$name','$address','$phone','$email','$sdate','$dob','$gender','$loan','$pfund','$salary','$jobtitle','$depid','$manid','$bacc');";

if($connection->query($sql)===TRUE)
{
    echo "successfully inserted into database";
    echo '<script> setTimeout(function() { window.location = "employee.php"; }, 2000); </script>';
}
else{
    echo "<script type='text/javascript'>alert('Invalid parameters');
    window.location='employee-add.php';
    </script>";
}




?>