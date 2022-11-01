<?php
include_once 'conn.php';
require_once 'mail.php';

if(isset($_POST['submit']))
{
        $folnt_email = $_POST['folnt_email'];
 $mail->setFrom('ycat441126131@gmail.com', 'Badir');
    $mail->addAddress($folnt_email);  
 $mail->Subject = 'تم الارسال ';
    $mail->Body    = 'تم تسجيلك بنجاح وسوف يتم مراجعه طلبك<br>شكرا لك';
    $mail->send();


    
     $folnt_name = $_POST['folnt_name'];
    $folnt_age = $_POST['folnt_age'];
     $folnt_info = $_POST['folnt_info'];
     $folnt_hours = $_POST['folnt_hours'];
    $folnt_mob = $_POST['folnt_mob'];
    $folnt_idnumber = $_POST['folnt_idnumber'];

    
     $sql = "INSERT INTO folnter  (folnt_name,folnt_age,folnt_info,folnt_hours,folnt_mob,folnt_idnumber,folnt_email)
     VALUES ('$folnt_name','$folnt_age','$folnt_info','$folnt_hours','$folnt_mob','$folnt_idnumber','$folnt_email')";
     if (mysqli_query($conn, $sql)) {
        header('location:/n/userpages/user_page.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}




?>

                    
