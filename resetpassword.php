<?php
session_start();
  include_once 'init.php';
if(isset($_POST['updatepass']))
{	 
	if (isset($_GET['token'])) {
		$token = $_GET['token'];
	 
	 $newpassword = md5($_POST['password']);
	 $cpassword = md5($_POST['cpassword']);


		if ($newpassword === $cpassword) {
				 $updatequery = " UPDATE users set password='$newpassword' where token='$token' ";

	
	$iquery=mysqli_query($con, $updatequery);
	 
		
		      if ($iquery) {

				 header('location:login.php');
					}else{
						$_SESSION['passmsg']= "Your Password is not updated";
						header('location:resetpassword.php');
					} 
		      }else{ 
            echo " <script> alert('Password is not matching') </script> ";
		  }		
	  }else{ echo "no token found";}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recover Password-RentingInn</title>
    <!-- Font Icon -->
         <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    <!-- Main css -->
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" type="text/css" href="trysignup.css">
    <style>
        input{background:radial-gradient(#00e6e6,#71f0e1,#e07781);width: 300px;margin-left: 30px;margin-bottom: 10px;}
        p{color: #000000; padding: 5px; font-size: 20px;}
        
        h2{text-align: center;margin-top: 20px;}
        #signup{width: 200px;margin-left: 20%;}

    </style>
</head>
<body style="background: radial-gradient(#00e6e6,#563434);">
    
             <div class="navbar">  <!--navbar class div starts-->
                 
                 <div class="logo">
                     <a href="index.php"> <img src="images/weblogoooo.png" width="150px"> </a>
                 </div>
                     
                     <nav>
                         <ul id="menuitems" style="font-size: 20px;" >
                             <li> <a href="index.php" > Home    </a> </li>
                             <li> <a href="products.php"> Products</a> </li>
                             <li> <a href="aboutus.php"> About Us  </a> </li>
                             <li> <a href='contactus.php'> Contact US </a> </li>
                             <?php 
                             if(isset($_SESSION['name'])){?>
                                 <li><a href="welcome.php" style="color:  #80ccff;"> <?php echo $_SESSION['name'];?>'s Profile</a></li>
                            <?php } else {?>
                          <li><a href="login.php">Login </a></li>
                          <?php } ?>
                             
                         </ul>

                     </nav>
                       
                       
                       <img src="images/menu-icon.png"  class="menu-icon" onclick="menutoggle()"> <!--adding func-->
             
             </div> <!-- class navbar div ends-->

             
                    
         
    
        <!-- Sign up form -->
        <section class="signup">
            <div class="container" style="background: radial-gradient(#00e6e6,#e07781);height: 420px;width: 500px; margin-top: 20px;">
                
                        <h2 class="form-title">Reset Password</h2>

                       
                        <form method="POST" class="register-form" id="register-form" action="" >
                           
                            <div class="form-group" style="width: 400px;margin: 30px;">
                                
                                <p>Enter Your new Password:</p>
                                <p style="background:radial-gradient( #00cccc,#00cccc,#ff5c33);color: #000000;text-align: center;font-size: 15px;font-weight: bold; padding: 2px;margin: 5px; width: 300px;margin-left: 30px;"> <?php 
                                  
                                 ?></p>
                                <input type="password" name="password" id="pass" placeholder="New Password"  required />

                            <input type="password" name="cpassword" id="re_pass" placeholder="Confirm password"  required />
                                <span id="CheckPasswordMatch" style="color:red;"></span>
                                
                               

                                <input type="submit" name="updatepass" id="signup" class="form-submit" value="Update Password"/>
                               
                             </div>
                             
                            
              
            </form></div>
            </div>
        </section>
        

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
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