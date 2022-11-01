<?php
include_once 'conn.php';
if(isset($_POST['submitt']))
{    
     $n_job = $_POST['n_job'];
    $T_job = $_POST['T_job'];
    $f_info = $_POST['f_info'];
     $i_job = $_POST['i_job'];
     $e_job = $_POST['emp_email'];

    
     $sql = "INSERT INTO employee  
     (emp_name,emp_sec,emp_mob,emp_idn,emp_email) VALUES ('$n_job', '$T_job','$f_info','$i_job','$e_job')";
     if (mysqli_query($conn, $sql)) {
        header('location:/n/userpages/user_page.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>