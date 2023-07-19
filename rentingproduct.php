<?php
session_start();
   require 'init.php';
   if(!isset($_SESSION['name'])){
    echo " You are loggedOut";
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
         <meta name="viewport" content="width=device-width , initial-scale=1.0">

			<title>Rent a Product - RentingInn </title>
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
                     <li> <a href="contactus.php"> Contact US </a> </li>
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
	    <h1>Upload Product (For Rent)</h1>
	  </div>     
     <form action="rentingproduct.php" method="post" enctype="multipart/form-data">
     	 <div class="contact-form">
	         <div class="input-fields">
		     	<input type="" name="name" placeholder="Enter Product name"required>
		     	<input type="" class="input" name="price" placeholder="Enter Per day rent price"required>
		     	
		     	<input type="text" id="email" name="email_id" value= <?php 
        if(isset($_SESSION['email_id'])){ echo $_SESSION['email_id']; }?> readonly>

		     	<input type="" name="phone" placeholder="phone no">
		     	<input type="file" name="img" required style="background: transparent; color:#05ade6;"required>
		     </div>
		     <div class="msg">
		          <input type="" class="input" name="pick_loc" placeholder="Possible Pickup Points" required>
		          <input type="" class="input" name="rentdays" placeholder="Max days for renting"required>
				   <textarea name="pdescription" placeholder="Write Product Description (Conditon/query)" style="height: 100px;"required></textarea>
	           </div>
	       </div>
	     	<button type="submit" name="upload" class="btn" style="margin-bottom: 5px;margin-top: 10px; width: 80%;margin-left: 70px;">Upload Product</button><br>
	     
     </form>
 </div>

 </body>
</html>

<?php
    if (isset($_POST['upload'])) {
	    	$name=$_POST['name'];
	    	$email=$_SESSION['email_id'];
	    	$phone=$_POST['phone'];
	    	$price=$_POST['price'];
	    	$pickloc=$_POST['pick_loc'];
	    	$pdescription=$_POST['pdescription'];
	    	$rentdays=$_POST['rentdays'];
	    	 $date=date("d,M y H:i:s");

	        
	        $img =rand(10,100000)."-".$_FILES['img']['name'];
	        $loc=  $_FILES['img']['tmp_name'];
	        $folder =("rentingimg/"); 
	        $f_img = strtolower(str_replace(" ", "-", $img)); 

	        if(move_uploaded_file($loc, $folder.$f_img)){

	    	$sql= "INSERT INTO renting(name,email_id,phone,price,img,pick_loc,pdescription,rentdays,registered_at)VALUES('$name','$email','$phone','$price','$f_img','$pickloc','$pdescription','$rentdays','$date')";
	    	$res=mysqli_query($con,$sql);
	    	if($res){
		     $success="<div class='success'><h3>Producted Uploaded</h3></div>";
		     header('location:allrentingproducts.php');
	    }else{
           echo "image didnt move";
	    }
    }
}
 

  

   

?>