<?php
include_once 'conn.php';


if(isset($_POST['submit']))
{    
     $samer = $_POST['samre'];
    $number = $_POST['number'];
     $salry = $_POST['salry'];
     $hours = $_POST['hours'];
    $info = $_POST['info'];
    $requests = $_POST['requests'];
     $sql = "INSERT INTO locking_for_folnter  (samre,number,salry,hours,info,requests)
     VALUES ('$samer','$number','$salry','$hours','$info','$requests')";
     if (mysqli_query($conn, $sql)) {
       header('location:/n/compages/admin_page.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>