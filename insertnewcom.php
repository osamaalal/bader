<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{    
     $com_name = $_POST['com_name'];
    $com_giv = $_POST['com_giv'];
    $com_cont = $_POST['com_cont'];
     $com_admin = $_POST['com_admin'];
     $com_email = $_POST['com_email'];

     $sql = "INSERT INTO compne_rec  (com_name,com_giv,com_cont,com_admin,com_email)
     VALUES ('$com_name','$com_giv','$com_cont','$com_admin','$com_email')";
     if (mysqli_query($conn, $sql)) {
        header('location:/n/userpages/user_page.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>