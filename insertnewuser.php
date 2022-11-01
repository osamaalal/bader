<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{    
     $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
     $user_pass = $_POST['user_pass'];
     
     $sql = "INSERT INTO sign  (user_name,user_email,user_pass)
     VALUES ('$user_name','$user_email','$user_pass')";
     if (mysqli_query($conn, $sql)) {
         header('location:/n/htmlpages/index.html');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>