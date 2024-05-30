<?php
  include('configall.php');
   
if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sqll="DELETE FROM department WHERE Depart_id=$id;";
	$check=mysqli_query($connection, $sqll);
    if($check)
    {
    echo '<script> setTimeout(function() { window.location = "department.php"; }, 2000); </script>';
    }
    else{
        echo "<script type='text/javascript'>alert('Invalid parameters');
        window.location='department.php';
        </script>";
    }
    
	
}

  


?>