<?php
  include('configall.php');
       
       $sql="SELECT Employee_id,Name,Email,salary,loan,jobtitle,Depart_id,pfund FROM `employee`;";
       $result=mysqli_query($connection,$sql);


 

if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sqll="DELETE FROM employee WHERE Employee_id=$id;";
	$check=mysqli_query($connection, $sqll);
	if($check)
    {echo"Done dana Done";}
    else{
        echo "<script type='text/javascript'>alert('Invalid parameters');
        window.location='employee.php';
        </script>";
    }
    echo '<script> setTimeout(function() { window.location = "employee.php"; }, 2000); </script>';
	
}

  


?>