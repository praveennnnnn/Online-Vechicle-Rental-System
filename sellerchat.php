<?php
session_start();
if(!isset($_SESSION['name'])){
    echo " You are loggedOut";
    header('location:login.php');
}

require 'init.php';
$ID=$_GET["userID"];
 

?>
<!DOCTYPE html>
<html>
<head>
     
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width , initial-scale=1.0">

     <title>Product Detail- RentingINN</title>

     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="productdetail.css">
     <link rel="stylesheet" type="text/css" href="adupload.css">
        <link rel="stylesheet" type="text/css" href="index.css">


         <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                     <li> <a href=""> About   </a> </li>
                     <li> <a href="contactus.php"> Contact US </a> </li>
                      <?php 
                             if(isset($_SESSION['name'])){?>
                                 <li><a href="logout.php"> <?php  $_SESSION['name'];?> <i class="fa fa-sign-out" style="color: #ff1a1a;">LogOut</i></a></li>
                            <?php } else {?>
                          <li><a href="login.php">Login </a></li>
                          <?php } ?>

                   </ul>

                 </nav>
         </div>

               <div class="wrapper" style="height:450px;margin-top: 10px;">
                  <div class="title">
                    <h1>Chat with seller</h1>
                  </div>

                          <form action="sellerchat.php" method="Post">
                          <div class="contact-form">
                            <div class="input-fields">
                              <input type="text" class="input" name="na" placeholder="Enter Your Name">
                              <input type="email" class="input" name="email-id" placeholder=" Enter Your email">
                              <input type="text" class="input" placeholder="Enter Your Phone" >
                             </div>
                            <div class="msg">
                              <textarea name="message" placeholder="Message"></textarea>
                            </div>

                          </div>
                            <button type="submit" name="submit" class="btn" style="margin-bottom: 5px;margin-top: 10px;"><h2>Send</h2></button>
                        </form>
    

                 </div>
        

       
 <!--------------Footer-------------------->

         
</body>
</html>