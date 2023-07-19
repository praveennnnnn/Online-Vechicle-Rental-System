<?php
 if (isset($_GET['search'])) {
 	$search=$_GET['search'];
 }else{
 	header('location:products.php');
 }
?>


<!DOCTYPE html>
<html>

   <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width , initial-scale=1.0">
         <title><?php echo $search; ?> Search Products - RentingInn </title>

         <link rel="stylesheet" type="text/css" href="css/style.css">

         <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     </head>

<body>
       
       <div class="header" > <!-- header class div starts---->
         <div class="container">  <!--contanier class div starts-->
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
                              if(isset($_SESSION['user_id']))
                             {?>
                            <li><a href="login.php"> <?php echo $_SESSION['name'];?> </a></li>
                            <?php } 
                            else {
                                ?>
                             <li><a href="login.php">Login </a></li>
                             <?php } ?>
			             </ul>

		             </nav>
		               
                       
                       <a href="cart.html"> <img src="images/cart.png" width="30px" height="30px"> </a>
                       <img src="images/menu-icon.png"  height="30px" class="menu-icon" onclick="menutoggle()"> 
		     
		     </div>

         
                        
                 <div class="row">
                  <div class="col22">            
                 <form action="search.php" method="GET">
                     <input type="text" name="search" placeholder=" Search Product by Name" autocomplete="off" required style="width: 500px;height: 40px;text-align: center;font-size: 20px; border-radius: 30px;border-color: #ff1a1a; background: transparent;"  >

                     <button type="submit"  style="width: 50px;height: 40px;text-align: center;border-radius:30px; background: transparent; font-size: 30px;border: none; color: #ff1a1a;"></button> 
                 </form>
                 </div>

            <div class="col22">
                 <form action="searchloc.php" method="GET">
                     <input type="text" name="locsearch" placeholder=" Search Product by City" autocomplete="off" required style="width: 500px;height: 40px;text-align: center;font-size: 20px; border-radius: 30px;border-color: #ff1a1a; background: transparent;"  >

                     <button type="submit"  style="width: 50px;height: 40px;text-align: center;border-radius: 30px; background: transparent; font-size: 30px;border: none; color: #ff1a1a;"><i class="fa fa-search" ></i></button> 
                 </form>      
             </div>
         </div>


                 <div class="row">   <!---products row start-->
                    <?php
                     require 'init.php';
                     
                     $sql= "SELECT * FROM products  WHERE p_name  LIkE '%$search%' "; 
                     $res=mysqli_query($con,$sql);
                     while ($row=mysqli_fetch_assoc($res)) {
                    $f_img=("pimages/").$row['p_img'];
                    ?>
                     <div class="col4" >
             <a href="productdetail.php?userID= <?php echo $row['p_id']; ?>" >
                 <img  style="width: 250px;height: 250px;" src="<?php echo $f_img; ?>" >
                 <h2 style="color: #000000;"> <?php echo $row['p_name']; ?></h2>
                 <h3 style="color: #000000;"> Price: </h3> <h4><?php echo $row['p_price']; ?> </h4><br>
                 <button type="submit" name="add" class="btn"  style="margin-top: 0px;"><a style="color: #ffff;" href="productdetail.php?userID= <?php echo $row['p_id']; ?>">  Product Details <i class="fa fa-info-circle" ></i>
                 </a>
             </a>
         </div>
                     <?php  
                             }
                     ?>
          </div><!--products row ends here------>

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

             
                 
                      
    
            
