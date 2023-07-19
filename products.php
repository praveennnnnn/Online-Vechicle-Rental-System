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
         <title> Products - RentingInn </title>

         <link rel="stylesheet" type="text/css" href="css/style.css">

         <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     </head>


 <body >
         <div class="header" > <!-- header class div starts---->
         <div class="container"> <!--contanier class div starts-->
             <div class="navbar">  <!--navbar class div starts-->
                 
             <div class="logo">
			         <a href="index.php"> <img src="images/weblogoooo.png" width="150px"> </a>
		         </div>
		             
		             <nav>
			             <ul id="menuitems" style="font-size: 20px;">
				             <li> <a href="index.php" > Home    </a> </li>
				             
                             <li> <a href="allrentingproducts.php"> Products for Rent</a> </li>
                             <li> <button onclick="window.location.href='selectrole.php';" 
                                style="background: black;color: white;height:25px; width: 100px;"> Post Your Add</button> </li>
				             <li> <a href="aboutus.php"> About US  </a> </li>
                             <li> <a href='contactus.php'> Contact US </a> </li>
                             <?php 
                             if(isset($_SESSION['name'])){?>
                                 <li><a href="welcome.php" style="color:  #80ccff;"> <?php echo $_SESSION['name'];?>'s Profile</a></li>
                            <?php } else {?>
                          <li><a href="login.php">Login </a></li>
                          <?php } ?>
			             </ul>

		             </nav>
		               
                       
                       <img src="images/menu-icon.png"  height="30px" class="menu-icon" onclick="menutoggle()">
		     
		     </div></div>
<div class="small-container">
         <div class="row row-2">
            <div class="col22">
               <h3 style="font-size: 20px; color: #ff1a1a;">Products For Sale </h3>   
            </div>
                  <div class="col22">            
                 <form action="search.php" method="GET">
                     <input type="text" name="search" placeholder=" Search Product by Name" autocomplete="off" required style="width: 300px;height: 40px;text-align: center;font-size: 20px; border-radius: 30px;border-color: #ff1a1a; background: transparent;"  >

                     <button type="submit"  style="width: 50px;height: 40px;text-align: center;border-radius:30px; background: transparent; font-size: 30px;border: none; color: #ff1a1a;"></button> 
                 </form>
                 </div>

            <div class="col22">
                 <form action="searchloc.php" method="GET">
                     <input type="text" name="locsearch" placeholder=" Search by City Name " autocomplete="off" required style="width: 400px;height: 40px;text-align: center;font-size: 20px; border-radius: 30px;border-color: #ff1a1a; background: transparent;"  >

                     <button type="submit"  style="width: 50px;height: 40px;text-align: center;border-radius: 30px; background: transparent; font-size: 30px;border: none; color: #ff1a1a;"><i class="fa fa-search" ></i></button> 
                 </form>      
             </div>
         </div> <!------search bars end----->

     

     <div class="small-container">
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
          <!--</div>products row ends here------>

                 <div class="page-btn">
                     <span>1</span>
                     <span>2</span>
                     <span>3</span>
                     <span>4</span>
                     <span>&#8594;</span>
                 </div>

         </div>    <!-----small container div ends---------->



 <!--------------Footer-------------------->



         <div class="footer">
             <div class="small-container">
                 <div class="row">
                     <div class="footer-col1">
                         <h3> Download Our App </h3>
                         <p>Download App for Android and ios mobile Phone</p>
                         <div class="applogo"> <img src="images/googleplay.png"><img src="images/appstore.png"></div>
                     </div>

                     <div class="footer-col2">
                         <img src="images/weblogoooo.png">
                         <p> Our Main purpose is to sustainably Make your life easier and comfortable. </p>
                     </div>

                     <div class="footer-col3">
                         <h3> Useful Links </h3>
                         <ul>
                             <li> Coupons </li>
                             <li> Blog Posts </li>
                             <li> Return Policy </li>
                             <li> Join Affiliate </li>
                         </ul>
                     </div>

                     <div class="footer-col4">
                         <h3> Follow Us </h3>
                         <ul>
                             <li> Facebook </li>
                             <li> Twitter </li>
                             <li> Instagram </li>
                             <li> Youtube </li>
                         </ul>
                     </div>

                 </div> <!-------row cls div ends--------->
                      <hr>  <!------horizontal line------>
                      <p class="copyright">Copyright 2021 - RentingInn</p>
    
             </div> <!-------small-container cls div ends--------->

         </div> <!-------footer cls div ends--------->

</div></div></div>


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