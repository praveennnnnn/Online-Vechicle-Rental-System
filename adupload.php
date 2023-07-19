<?php

include('action.php');
if(!isset($_SESSION['name'])){
    echo " You are loggedOut";
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Upload Products - RentingInn</title>

         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width , initial-scale=1.0">
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
                     <li> <a href="aboutus.php"> About US  </a> </li>
                     <li> <a href="contactus.php"> Contact Us </a> </li>

                      <?php 
                           
                             if(isset($_SESSION['name'])){?>
                                 <li><a href="welcome.php" style="color:  #80ccff;"> <?php echo $_SESSION['name'];?>'s Profile</a></li>
                            <?php } else {?>
                          <li><a href="login.php">Login </a></li>
                          <?php } ?>
                    

                   </ul>

                 </nav>
         </div>

    
<div class="wrapper1" style="height: 480px;width: 800px; margin-top: 35px; ">
  <div class="title">
    <h1>Upload Product (For Sale)</h1>
  </div>
  <form action="adupload.php" method="POST" enctype="multipart/form-data">
  	
  <div class="contact-form">
    <div class="input-fields">
	      <input type="text" class="input" name="p_name" placeholder="Enter Product Name" required="">
	      <input type="text" class="input" name="p_price" placeholder="Enter Product Price" required="">
        
        
        <input type="text" id="email" name="email_id" value= <?php 
        if(isset($_SESSION['email_id'])){ echo $_SESSION['email_id']; }?> readonly> 

	      <input type="text" class="input" name="phone" placeholder="Enter your Phone Number">
        <input type="file" name="img" required style="background: transparent; color:#05ade6;"required>

    </div>
		    <div class="msg">
          <input type="text" class="input" name="pick_location" placeholder="Possible Pickup Points" required>
		      <textarea name="p_description" placeholder="Write Product Description (Conditon/query)"required></textarea>
		    </div>
  </div>

    <button type="submit" name="p_upload" class="btn" style="margin-bottom: 5px;margin-top: 10px; width: 80%;margin-left: 70px;"><h2>Upload</h2></button>
</form>
</div>


</body>
</html>