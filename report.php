<?php  
session_start();
require 'init.php';  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Report User - RentingINN</title>
	<meta charset="utf-8">
         <meta name="viewport" content="width=device-width , initial-scale=1.0">

	<title>Seller Registration - RentingInn </title>
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
                   <ul id="menuitems" >
                     <li> <a href="index.php" > Home    </a> </li>
                     <li> <a href="products.php"> Products</a> </li>
                     <li> <a href=""> About   </a> </li>
                      <?php
                              
                             if(isset($_SESSION['name'])){?>
                                 <li><a href="welcome.php"> <?php  $_SESSION['name'];?> <i class="fa fa-sign-out" style="color: #ff1a1a;">LogOut</i></a></li>
                            <?php } else {?>
                          <li><a href="login.php">Login </a></li>
                          <?php } ?>
                             
                   </ul>

                 </nav>
         </div>
  <form action="report.php" method="post">
		<div class="wrapper" style="height: 400px;max-width: 550px; ">
		  <div class="title">
		    <h1>Report User</h1>
		  </div>
		  <div class="contact-form">
		    <div class="input-fields">
				<input type="text"class="input" id="email" name="email_id" value= <?php 
        				if(isset($_SESSION['email_id'])){ echo $_SESSION['email_id']; }?> readonly> 
        		      <input type="text" class="input" name="spam_email" placeholder="Enter reported/spam Email Address" required>

		    </div>
		    <div class="msg">
		      <textarea name="message" placeholder="Type Your Message Here Or Paste fake product pages link here" required style="height:200px;"></textarea>
		    </div>

		  </div>
		    <button type="submit" name="report" class="btn" style="margin-bottom:5px;margin-top: 10px;margin-left: 10%;"><h2>Send</h2></button>
		</div>
  </form>

</body>
</html>

<?php
   if(isset($_POST['report'])){

   	$email_id=$_SESSION['email_id'];
   	$spam_email=$_POST['spam_email'];
   	$message=$_POST['message'];

 	$sql= " INSERT into report (email_id,spam_email,message) VALUES ('$email_id','$spam_email','$message') ";
 	$iquery=mysqli_query($con, $sql);

 	if($iquery){
     echo " <script> alert('Report send successfully')</script>"; 
   }else{
   	echo"something went wrong";
   }

   }

?>