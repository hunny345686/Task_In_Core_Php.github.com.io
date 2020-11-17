<?php
$con = mysqli_connect("localhost","root","","task");
// if($con == true)
// {
//     echo "connect";

// }
// else{
//     echo "error";
// }

if(isset($_POST['tech']))
{
    $username= $_POST['userName'];
    $qualification = $_POST['qualification'];

    $tech = implode(",",$_POST['tech']);
    $compName = implode(",",$_POST['compName']);
    $joining_date = implode(",",$_POST['joining_date']);
    $compCity = implode(",",$_POST['compCity']);

    // insert data in table

  $query = "INSERT INTO `php_task`(`username`, `qualification`, `know_tech`, `compname`, `joining_date`, `compcity`) VALUES ('$username','$qualification','$tech','$compName','$joining_date',' $compCity')";

  $res = mysqli_query($con, $query);

  if($res == true){
       echo "<script>alert('New record created successfully');window.location.href='display.php';</script>";
      
  }else{
      echo "<script>alert('Try Again');</script>";
     
  }

    
}
?>