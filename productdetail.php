<?php
session_start();
include("database.php");
extract($_POST);
?>
<!DOCTYPE html>
<html>
<head>
     
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width , initial-scale=1.0">

     <title>Product Detail- RentingINN</title>

     <link rel="stylesheet" type="text/css" href="css/style.css">
         <link rel="stylesheet" type="text/css" href="productdetail.css">


         <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
      <div class="header" > <!-- header class div starts---->
     <div class="container">
     <div class="navbar">  <!--navbar class div starts-->
                 
             <div class="logo">
                     <a href="index.php"> <img src="images/weblogoooo.png" width="150px"> </a>
                 </div>
                     
                     <nav>
                         <ul id="menuitems" >
                             <li> <a href="index.php" > Home    </a> </li>
                             <li> <a href="products.php"> Products</a> </li>
                             <li> <button onclick="window.location.href='adupload.php';" 
                                style="background: black;color: white;height:25px; width: 100px;"> Post Your Add</button> </li>
                             <li> <a href=""> About   </a> </li>
                             <li> <a href='contactus.php'> Contact  </a> </li>
                             <?php
                              
                             if(isset($_SESSION['name'])){?>
                                 <li><a href="welcome.php"> <?php  $_SESSION['name'];?> <i class="fa fa-sign-out" style="color: #ff1a1a;">LogOut</i></a></li>
                            <?php } else {?>
                          <li><a href="login.php">Login </a></li>
                          <?php } ?>
                         </ul>

                     </nav>
                       
                       
                       <a href="cart.html"> <img src="images/cart.png" width="30px" height="30px"> </a>
                       <img src="images/menu-icon.png"  height="30px" class="menu-icon" onclick="menutoggle()">
             
             </div>
         </div>
        </div>

        <div class="small-container">
            <div class="row">
                    <?php
                     require 'init.php';
                     $ID=$_GET["userID"];
                     $sql= "SELECT * FROM products WHERE p_id ='$ID'";
                     $res=mysqli_query($con,$sql);
                     while ($row=mysqli_fetch_assoc($res)) {
                    $f_img=("pimages/").$row['p_img'];
                    ?>
                     <div class="col2" style="margin-bottom: 20px;" >
                        <img src="<?php echo $f_img; ?>">
                         <p style="border: solid red; width: 390px;margin-top: 10px;padding: 10px;"> If you want to report this User - Copy this Email and send us Or If you want to report this specific product: Copy this page linke and paste in message.<br> <button type="submit" name="add" class="btn" style="margin-top: 2px;margin-left: 40%;"><a href="report.php" style="color:#ffffff"> Report User </a></button> </p>
                     </div>
                    <div class="col2" >
                             <h1> <?php echo $row['p_name']; ?></h1>
                             <h3> Price: </h3> <h4><?php echo $row['p_price']; ?> </h4><br>
                             <h3> Pickup Point: </h3><h4> <?php echo $row['pick_location']; ?></h4> <br>
                             <h3> Product Description <i class="fa fa-indent" ></i></h3><br><p><?php echo $row['p_description']; ?></p><br> 
                              <h3> Chat with the owner (Copy the link below) </h3>
                             <h4> <i class="fa fa-whatsapp"></i> <?php echo $row['phone']; ?>
                             <span style="margin-left: 40%;"><br> <i class="fa fa-envelope" style="margin-right:10px;margin-left: 30%;"></i><?php echo $row['email_id']; ?> </span></h4>
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                             
                             

                        </div>
                     <?php  
                             }
                     ?>
                    
                </div>
            </div>
            
        </div>

 <!--------------Footer-------------------->

         <div class="row" style="background-color: #000000;">
                     

                     <div class="footer-col2">
                         <img src="images/weblogoooo.png">
                         <p> Our Main purpose is to sustainably Make your life easier and comfortable. </p>
                     
                        
                        <hr>  <!------horizontal line------>
                      <p class="copyright">Copyright 2021 - RentingInn</p>
                    </div>

                     
                 </div> <!-------row cls div ends--------->
</body>
</html>