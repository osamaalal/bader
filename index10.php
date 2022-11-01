
<?php
@include 'session.php';


?>

<!DOCTYPE html>
<html lang= "en">
<head>
     <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width,minimun-scale=1,maximum-scale,initial-scale=1">
         <title> badir </title>

 
     <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="style22.css" rel="stylesheet">
</head>
<body>
    

    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
     <div class = "brand" >
          <span class = "lab la-affiliatetheme " ></span >
          <h2 > Badir </h2>

        </div>
     <div class="sidemenu">
         <div class="side-user">
             <div class="side-img" style="background-image: url(/n/img/dd.png)"></div>
         <div class="user">
             <small>Welcome <?php echo $_SESSION['user_name']; ?> 
 </small >
             </div>
             </div>

             <ul>
             <li>
                 
                 <a href="index10.php" class="active">
                    <span class="las la-stream"></span>
                     <span>الاحصائيات</span> 
                 </a>
                 </li>
               
                  <li>
                 <a href="/n/admins/admin_prof.php">
                    <span class="las la-users"></span>
                    <span>المستخدمين</span>

                 </a>
                 </li>
                 
                 
                 
                  <li>
                 <a href="/n/compages/jobpages.php">
                    <span class="las la-user-tie"></span>
                    <span>طلبات المشرفين</span>

                 </a>
                 </li>
                                      <li>
                 <a href="/n/admins/compnerec.php">
                    <span class="las la-users-cog"></span>
                    <span>طلبات الشركات</span>

                 </a>
                 </li>
   
                
                        <li>
               
              
                     <li>
                 <a href="/n/admins/admin_ad.php">
                    <span class="las la-tasks"></span>
                    <span>الاعلانات التطوعية</span>

                 </a>
                 </li>
                     <li>
                 <a href="/n/admins/admin_com.php">
                    <span class="las la-building"></span>
                    <span>الشركات </span>

                 </a>
                 </li>
                 <li>
                   <a href="logout.php">
                    <span class="las la-sign-out-alt"></span>
                    <span>تسجيل خروج</span>

                 </a>
                 </li>
                 
                  
                
             </ul>
             </div>
    </div>              
<div class="main-content">
    <header>
    <label for="menu-toggle" class="menu-toggler">
        <span class="las la-bars "></span>
        </label>
        <div class="search">
            <span class="las la-search"></span>
            <input type="search" placeholder="Enter here">
        </div>
    <div class="head-icons">
        <span class="las la-bell"></span>
         <span class="las la-bookmark"></span>
        <span class="las la-comment"></span>

        
        
        </div>
    </header>
     <?php
                
                  @include 'conn.php';
         
            $query = "SELECT id FROM sign order by id ";
            $query_run = mysqli_query($conn,$query);
                  
                  $row = mysqli_num_rows($query_run);
                      
                      
                      
            $query1 = "SELECT id_folnt FROM locking_for_folnter order by id_folnt ";
            $query_run1 = mysqli_query($conn,$query1);
                  
                  $row1 = mysqli_num_rows($query_run1);
            
         ?>
    <main>
    <div class="cards">
        <div class="card">
        <div class="card-icon follow">
        <span class="las la-users"></span>
            </div>
            <div class="card-info">
            <h2><?php echo $row ; ?></h2>
                <small>اصحاب بادر</small>
            </div>
            <div class="card-images">
            <div style="background-image: url(img/dd.png)"></div>
             <div style="background-image: url(img/dd.png)"></div>
             <div style="background-image: url(img/dd.png)"></div>
            <div style="background-image: url(img/dd.png)"></div>
            <div style="background-image: url(img/dd.png)"></div>
            </div>            
            </div>
  <div class="card">
        <div class="card-icon likes">
        <span class="las la-heart"></span>
            </div>
            <div class="card-info">
            <h2><?php echo $row1 ; ?></h2>
                <small>التطوعات النشطة  </small>
            </div>
            <div class="card-images">
            <div style="background-image: url(img/dd.png)"></div>
             <div style="background-image: url(img/dd.png)"></div>
             <div style="background-image: url(img/dd.png)"></div>
            <div style="background-image: url(img/dd.png)"></div>
            <div style="background-image: url(img/dd.png)"></div>
            </div>            
            </div>
        <div class="card">
        <div class="card-icon comment">
        <span class="las la-comment"></span>
            </div>
            <div class="card-info">
            <h2>5/4</h2>
                <small>التقييم  </small>
            </div>
            <div class="card-images">
            <div style="background-image: url(img/dd.png)"></div>
             <div style="background-image: url(img/dd.png)"></div>
             <div style="background-image: url(img/dd.png)"></div>
            <div style="background-image: url(img/dd.png)"></div>
            <div style="background-image: url(img/dd.png)"></div>
            </div>            
            </div>
        
        </div>
    <div class="chart-grid">
        <div class="chart-follow">
            <div class="chart-head">
                <h3>followrs</h3>
                <span class="las la-cog"></span>
            </div>
        <div id="myfirstchart" style="height: 350px;"></div>
        </div>
        <div class="chart-sales">
                    <div class="chart-head">
    
             <h3>Badir</h3>
              <span class="las la-ellipsis-h"></span>

        </div>
        <div id="donut-example" style="height: 350px;"></div>
        </div>
        </div>
    </main>
</div>
<script>
    
    
    
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="/n/js/main3.js"></script>
</body>
</html>