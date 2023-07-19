<?php
session_start();
include("init.php");
?>

<!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width , initial-scale=1.0">
         <title> Welcome to RentingInn </title>

         <link rel="stylesheet" type="text/css" href="css/style.css">

         <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     </head>


 <body >

     <div class="header" > <!-- header class div starts---->
         <div class="container">  <!--contanier class div starts-->
         <div class="navbar">  <!--navbar class div starts-->
                 
         <div class="logo">
                     <a href="index.php"> <img src="images/weblogoooo.png" width="150px"> </a>
                 </div>
                     
                     <nav>
                         <ul id="menuitems" >
                             <li> <a href="index.php" > Home    </a> </li>
                             <li> <a href="products.php"> Products For Sale</a> </li>
                             <li> <a href="allrentingproducts.php"> Products for Rent</a> </li>
                             <li> <button onclick="window.location.href='selectrole.php';" 
                                style="background: black;color: white;height:25px; width: 100px;"> Post Your Add</button> </li>
                           


                             <li> <a href="aboutus.php"> About US  </a> </li>
                             <li> <a href='contactus.php'> Contact US </a> </li>
                             <?php 
                             if(isset($_SESSION['name'])){?>
                                 <li><a href="welcome.php" style="color:  #80ccff;">Welcome
                            
                                   <?php echo  $_SESSION['name'];?> </a></li>
                            <?php } else {?>
                          <li><a href="login.php">Login </a></li>
                          <?php } ?>
                         </ul>
                     </nav>
                      
                       <ul><li style="margin-bottom: 5px; ;"><a href="adminlogin.php"><img src="images/manager.png" width="30px" height="30px " style="margin-left: 5px; " >Admin </a></li> </ul>
                       <img src="images/menu-icon.png"  height="30px" class="menu-icon" onclick="menutoggle()"> 
             
             </div>

             <div class="row"> <!--class row div starts---->
                 <div class="col2">  <!---first col2 div starts---->
                      <h1> Shopping That  Brings <br/> Joy! </h1> <p style="text-align: center;"> Life is hard enough already. Let us make it a little easier For You 😊.<br/> The best of both worlds &#128527; Store and web. &#128525; <br/>Find it 🧐 love it 😍 rent it/buy it 😎.</p>
                     <a href="products.php" class="btn" > Explore Now &#8594;</a>
                 </div> <!----first-col2 div ends---->

                 <div class="col2"> <!---second col2 div starts--->
                     <img src="images/bgk.jpg">
                 </div> <!-- (second)-Col2 div ends----->

             </div> <!-- class row div ends--->
                    
         </div> <!-- end of contanier div-->
     </div> <!--header class div ends-->

                             

 

         <div class="small-container">
             
                 
                
         <!--------Latest products--------->
                 <h2 class="title"> Latest Products (Sale) </h2>
                 
                 <!--- <div class="row">--->   
            <div class="row">

             <?php
             require 'init.php';
                 $sql= "SELECT * FROM products ORDER BY p_id DESC";
                 $res=mysqli_query($con,$sql);
                 while ($row=mysqli_fetch_assoc($res)) { //if to check product availability-add later
                 $f_img=("pimages/").$row['p_img'];
             ?>
         <div class="col4" >
             <a href="productdetail.php?userID= <?php echo $row['p_id']; ?>" >
                 <img src="<?php echo $f_img; ?>" style="width: 200px;height: 200px;">
                 <h3 style="color: #000000;"> <?php echo $row['p_name']; ?></h3>
                 <h3 style="color: #000000;"> Price: </h3> <h4><?php echo $row['p_price']; ?> </h4><br></a>

                 <button type="submit" name="add" class="btn"  style="margin-top: 0px;"><a style="color: #ffff;" href="productdetail.php?userID= <?php echo $row['p_id']; ?>">  Product Details <i class="fa fa-info-circle" ></i>
                 </a>
             </button>
          
             
         </div>
                 <?php   
                     }
                  ?>
                </div>
         </div>    <!-----small container div ends---------->



 <!-------------------Offers------------------------->
        

         <div class="offer">
             <div class="small-container">
                <div class="row">
                    <div class="col2"> <img src="images/exclusive.jpg" class="offer-img"></div>
                    <div class="col2">
                        <p> Exclusively Available on RentingInn</p>
                        <h1>Oppo Watch 46mm </h1>
                        <small>Keep Up. Keep in Touch.Flexible Dual-Curved Display | Wear OS by Google™ | Up to 21-Day Battery Life Watch VOOC Flash Charging | Workout and Health Tracking.<br></small>

                        <a href="" class="btn"> Buy Now &#8594;</a>
                    </div>
                </div>  <!----row class div ends------>
                 
             </div>  <!-----small container div ends---------->

         </div>   <!--------offer class div ends---------->



 <!-----------------testimonial------------>


         <div class="testimonial">
             <div class="small-container">
                 <div class="row">
                     <div class="col3">
                          
                         <i class="fa fa-quote-left"></i>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                         <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-o"></i>
                         </div>
                         <img src="images/user1.jpg">
                         <h3> Sara william</h3>

                      </div>  <!-------clas col3 div ends----------->

                      <div class="col3">
                          
                         <i class="fa fa-quote-left"></i>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. </p>
                         <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-o"></i>
                         </div>
                         <img src="images/user2.png">
                         <h3> Lucifer smith</h3>

                      </div>  <!-------clas col3 div ends----------->

                      <div class="col3">
                          
                         <i class="fa fa-quote-left"></i>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                         <div class="rating">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-o"></i>
                         </div>
                         <img src="images/user3.png">
                         <h3> Decker james </h3>

                      </div>  <!-------clas col3 div ends----------->
                  
                 </div>  <!-------clas row div ends----------->
             
             </div>  <!-------small contanier div ends----------------->
          
         </div> <!--------testimonial cls div ends--------->



 <!--------------Brands----------------->



         <div class="brand">
             <div class="small-container">
                 <div class="row">
                     <div class="col5"> <img src="images/brndlogo1.png"></div>
                     <div class="col5"> <img src="images/brndlogo2.jpg"></div>
                     <div class="col5"> <img src="images/brndlogo3.png"></div>
                     <div class="col5"> <img src="images/brndlogo4.png"></div>
                     <div class="col5"> <img src="images/brndlogo5.jpg"></div>
                 </div>  <!-------clas row div ends----------->
            
             </div>   <!-------small contanier div ends----------------->

         </div>   <!-------brand cls div ends--------->



 <!--------------Footer-------------------->



         <div class="footer">
             <div class="small-container">
                <div class="row" style="background-color: #000000;">
                     

                     <div class="footer-col2">
                         <img src="images/weblogoooo.png">
                         <p> Our Main purpose is to sustainably Make your life easier and comfortable. </p>
                     
                        
                        <hr>  <!------horizontal line------>
                      <p class="copyright">Copyright 2021 - RentingInn</p>
                    </div>

                     
                 
    
             </div> <!-------small-container cls div ends--------->

         </div> <!-------footer cls div ends--------->
</div>



 <!---------js for toggle menu------------->

     <script>
         var menuitems = document.getElementById("menuitems");

          menuitems.style.maxHeight = "0px";

          function menutoggle(){
             if (menuitems.style.maxHeight == "0px")
                 {
                    menuitems.style.maxHeight ="200px"
                 }
                 else
                 {
                    menuitems.style.maxHeight ="0px"
                 }
          }


     </script>

 </body>
 </html>