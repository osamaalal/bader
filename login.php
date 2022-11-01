<?php

@include 'conn.php';

session_start();

if(isset($_POST['submit'])){

   $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
   $user_pass= mysqli_real_escape_string($conn,$_POST['user_pass']);
 

    
    
       $user_type = $_POST['user_type'];

   $select = " SELECT * FROM sign WHERE user_name = '$user_name' && user_pass = '$user_pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['user_name'];
         header('location:/n/compages/admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['user_name'];
         header('location:/n/userpages/user_page.php');

      }elseif($row['user_type'] == 'mang'){

         $_SESSION['user_name'] = $row['user_name'];
         header('location:/n/htmlpages/index10.php');
     
   }else{
      $error[] = 'incorrect email or password!';
   }
   };
};
    
?>