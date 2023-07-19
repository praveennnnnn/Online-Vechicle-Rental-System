<?php
session_start();

if(!isset($_SESSION['name'])){
    echo " You are loggedOut";
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" type="text/css" href="adupload.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

         <style>
             .main{width: 80%;}
             .container{width: 1100px; background: linear-gradient(#ffcce6,#00cccc,#ff80bf);margin-left: 70px;margin-top: 10px;padding: 10px;}
             h1{  font-size: 55px;font-weight: 900; color:  #0000;background-color: #0000; text-align: center;
                  margin-bottom: 15px;text-shadow: -3px -3px  1px black,2px 2px 8px  #00cccc;text-decoration-style: dotted;}
             .ab{font-size: 30px; font-weight: bold; margin: 20px; box-shadow: -3px -3px  1px #ff80bf,2px 2px 8px  #00cccc; background:linear-gradient(#ffcce6,#00cccc,#ffcce6,#ffcce6,#ff80bf);}
             
             .col1{  width: 380px;height: 400px; float: left; position:relative; }
             .col2{  max-width: 600px; }
            
             span{margin-left: 25px; color: #000000;}
             h2{font-size: 35px; background: radial-gradient(#ffcce6,#00cccc,#ff80bf);margin: 10px; padding: 10px;}
             .atag{ border: none;color: white;background-color: red;border-radius: 5px;padding: 8px 12px;transition: 0.5s;}
             .atag:hover{ background:radial-gradient(#00e6e6,#563434);}
            .update{border: none;color: #0000;background-color: #4dff4d;border-radius: 5px;padding: 8px 12px;transition: 0.5s; }
            .update:hover{ background:radial-gradient(#00e6e6,#563434);}
         </style>
</head>
<body>

 <div class="navbar" style="height: 70px;">  <!--navbar class div starts-->
             
         <div class="logo">
               <a href="index.php"> <img src="images/weblogoooo.png" style="width: 150px;"> </a>
             </div>
                 
                 <nav>
                         <ul id="menuitems" style="font-size: 20px;" >
                             <li> <a href="index.php" > Home    </a> </li>
                             <li> <a href="products.php"> Products</a> </li>
                             <li> <a href="aboutus.php"> About Us  </a> </li>
                             <li> <a href="contactus.php"> Contact Us</a> </li>
                             <li><a href="recoveremail.php">Change Password</a></li>
                             <?php 
                             if(isset($_SESSION['name'])){?>
                                 <li><a href="logout.php"> <?php  $_SESSION['name'];?> <i class="fa fa-sign-out" style="color: #ff1a1a;">LogOut</i></a></li>
                            <?php } else {?>
                          <li><a href="login.php">Login </a></li>
                          <?php } ?>
                         
                         </ul>
                 </nav>
         </div>

        <div class="main">
            <div class="container">
                <h1 class="form-title">Welcome <?php echo $_SESSION['name'];?></h1>
                <div class="small-container" style=" margin-left: 0px;">
                    
                  

                  <div class="row">
                     <?PhP
             require'init.php';
             $msg= $_SESSION['email_id'];
             $sql= "SELECT * FROM users Where email_id = '$msg' ";
             $res=mysqli_query($con,$sql);
               
             if(mysqli_num_rows($res)>0){    
               while ($row=mysqli_fetch_assoc($res)) {
                 
                 
                  $img1=$row['cnicfront'];
                   $img2=$row['cnicback'];
                   $img3=$row['certificate'];
                    $status=$row['status'];

                  
                  ?>
                      <div class="col2" style="max-height: 900px;">
                         <p class="ab"> Name: <span > <?php echo $row['name'];  ?> </span></p>
                         <p class="ab">Email: <span > <?php echo $row['email_id']; ?> </span></p>
                         <p class="ab">Phone#: <span> <?php echo $row['phone']; ?> </span></p> 
                         <p class="ab">Registered At: <span> <?php echo $row['registered_at']; ?> </span></p> 
                         <p class="ab">Status: <span> <?php echo $status; ?> </span></p>
                      </div>
                       <div class="col1">
                 <img src="<?php echo $img1; ?>" style="width: 350px;height: 380px;">
             </div><div class="col2">
                <p style="font-weight:bold;">CNIC back Side image:</p>
                 <img src="<?php echo $img2; ?>" style="width: 350px;height: 380px;">
                   </div>
                   <div class="col2">
                    <p style="font-weight:bold;">Certificate you have uploaded:</p>
                   <img src="<?php echo $img3; ?>" style="width: 350px;height: 380px;">
                      </div>
                  <?php }} ?>
                  </div>

       <!---------products for rent ------>           
                  <h2>Products You have uploaded for rent will show below:</h2>
                  <div class="row">
                    
                     <?php
                    require 'init.php';
                    $msg= $_SESSION['email_id'];
                 $sql= "SELECT * FROM renting Where email_id = '$msg' ";
                 $res=mysqli_query($con,$sql);
                 while ($row=mysqli_fetch_assoc($res)) { //if to check product availability-add later
                 $f_img=("rentingimg/").$row['img'];
             ?>
                      <div class="col4">
                 <a href="productdetail.php?userID= <?php echo $row['id']; ?>" >
                 <img src="<?php echo $f_img; ?>" style="width: 200px;height: 200px;">
                 <h3 style="color: #000000;"> <?php echo $row['name']; ?></h3></br>
                 <h3 style="color: #000000;"> Price /day: <span style="text-align: left; font-weight: 300px;color: #006600">
                    <?php echo $row['price']; ?></span> </h3><br></a>

                  <h3> Pickup Point:<span style="text-align: left; font-weight: 300px;color: #006600"><?php echo $row['pick_loc']; ?></span>
</h3> <br>

                   <h3> Maximum renitng Days:<span style="text-align: left; font-weight: 300px;color: #006600"><?php echo $row['rentdays']; ?></span> </h3> <br>

                    <h3> Product Description <i class="fa fa-indent" style="color: #ff1a1a"></i></h3><br><p style="text-align: left; font-weight: 300px;color: #006600"><?php echo $row['pdescription']; ?></p><br> 
                       
                            <h5> <i class="fa fa-whatsapp"></i> <?php echo $row['phone']; ?><br>

                 
          
                      </div>
                  <?php } ?>
                  </div>

<!--------- products for sale----->

 <h2>Products You have uploaded for Sale will show below:</h2>
                  <div class="row">
                    
                     <?php
                    require 'init.php';
                    $msg= $_SESSION['email_id'];
                 $sql= "SELECT * FROM products Where email_id = '$msg' ";
                 $res=mysqli_query($con,$sql);
                 while ($row=mysqli_fetch_assoc($res)) { //if to check product availability-add later
                 $f_img=("pimages/").$row['p_img'];
             ?>
                      <div class="col4">
                   <a href="productdetail.php?userID= <?php echo $row['p_id']; ?>" >
                 <img src="<?php echo $f_img; ?>" style="width: 200px;height: 200px;">
                 <h3 style="color: #000000;"> <?php echo $row['p_name']; ?></h3></br>
                 <h3 style="color: #000000;"> Price : <span style="text-align: left; font-weight: 300px;color: #006600"><?php echo $row['p_price']; ?></span> </h3><br></a>

                  <h3> Pickup Point:<span style="text-align: left; font-weight: 300px;color: #006600"><?php echo $row['pick_location']; ?></span>
</h3> <br>

                  

                    <h3> Product Description <i class="fa fa-indent" style="color: #ff1a1a"></i></h3><br><p style="text-align: left; font-weight: 300px;color: #006600"><?php echo $row['p_description']; ?></p><br> 
                       
                            <h5> <i class="fa fa-whatsapp"></i> <?php echo $row['phone']; ?><br>

                 
          
                      </div>
                  <?php } ?>
                  </div>
    <!-------------update data-------->
      
<!-------footer start --------->
                 <div class="row" style="background-color: #000000;">
                     <div class="footer-col2">
                         <a href="index.php"> <img src="images/weblogoooo.png" style="width: 150px;"> </a>
                         <p> Our Main purpose is to sustainably Make your life easier and comfortable. </p>
                     
                        
                        <hr>  <!------horizontal line------>
                      <p class="copyright">Copyright 2021 - RentingInn</p>
                    </div>

                     
                 </div> <!-------row cls div ends--------->
</div>
					 
    </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>




