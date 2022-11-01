  <html>


<?php
                     
      @include 'conn.php';
    @include 'session.php';

                     
                          
$current = $_SESSION ['user_name'];
$sql = "SELECT * from sign WHERE user_name = '$current'";
                              
$getres = mysqli_query($conn,$sql);
if ($getres){
if(mysqli_num_rows($getres)>0){
while($row = mysqli_fetch_array($getres)){
//print_r($row['user_name']);
    ?>
                        <label >Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $row['user_name'];?>">
                            
         <?php                         
}}}
                          ?>
           

                
             </html>
              
                 
             
               
             <a href="admin_ad.php?edit=<?php echo $row['id_folnt']; ?>" class="option-btn"><i class="fas fa-edit"></i> تعديل الاعلان </a>

  