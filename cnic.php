<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>
      
      <?php
   
       require 'init.php';
       $sql = "SELECT * from verify ORDER BY v_id DESC";
       $res=mysqli_query($con,$sql);
          while($row=mysqli_fetch_assoc($res)){
               $img1=$row['cnicfront'];
               $img2=$row['cnicback'];
               $img3=$row['certificate'];   
                   }?>

         <div class="col4" >
             <a href="productdetail.php?userID= <?php echo $row['p_id']; ?>" >
                 <img src="<?php echo $img1; ?>" style="width: 200px;height: 200px;">
                  <img src="<?php echo $img2; ?>" style="width: 200px;height: 200px;">
                   <img src="<?php echo $img3; ?>" style="width: 200px;height: 200px;">
                 
                
          
             
         </div>
                 
                </div>

</body>
</html>

