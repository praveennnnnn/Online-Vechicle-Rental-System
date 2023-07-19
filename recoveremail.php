<?php 
session_start();
  include_once 'init.php';
if(isset($_POST['send']))
{    
    
     $email_id = mysqli_real_escape_string($con,$_POST['email_id']);
     $sql= "select * from users where email_id='$email_id'";
     $query=mysqli_query($con,$sql);
     
   $email_count= mysqli_num_rows($query);
    
       if ($email_count) {
          
                    $userdata=mysqli_fetch_array($query);
                    $username=$userdata['name'];
                    $token = $userdata['token'];


                    $subject = "Password Reset";
                    $body = "Hi, $username. Click here to reser your pasword on RentingINN website.http://localhost/Rupdated/resetpassword.php?token=$token";

                    $headers = "From: batch2dummymail@gmail.com";

                    if (mail($email_id, $subject, $body, $headers)) {
                        $_SESSION['passmsg']= " Check Your Mail to reser your password ";

                        header('Location:login.php');
                       
                    } else {
                        echo "Email sending failed...";
                    }
              }else{
                echo "No email found";
              }
     
     mysqli_close($con);
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
        input{background:radial-gradient(#00e6e6,#71f0e1,#e07781);width: 300px;margin-left: 30px;}
        p{color: #000000; padding: 5px; font-size: 20px;}
        
        h2{text-align: center;margin-top: 20px;}
        #signup{width: 150px;margin-left: 40%;}

    </style>
</head>
<body style="background: radial-gradient(#00e6e6,#563434);">
    
             <div class="navbar">  <!--navbar class div starts-->
                 
                 <div class="logo">
                     <a href="index.php"> <img src="images/weblogoooo.png" width="150px"> </a>
                 </div>
                     
                     <nav>
                         <ul id="menuitems" style="font-size: 20px;">
                             <li> <a href="index.php" > Home    </a> </li>
                             <li> <a href="products.php"> Products</a> </li>
                             <li> <a href="aboutus.php"> About Us  </a> </li>
                             <li> <a href='contactus.php'> Contact  </a> </li>

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
            <div class="container" style="background: radial-gradient(#00e6e6,#e07781);height: 300px;width: 500px; margin-top: 20px;">
                
                        <h2 class="form-title">Recover Your Account</h2>

                       
                        <form method="POST" class="register-form" id="register-form" action="recoveremail.php" >
                           
                            <div class="form-group" style="width: 400px;margin: 30px;">
                                
                                <p>Enter Yor Email address:</p>
                                <input type="email" name="email_id" id="email_id" placeholder="Enter Your Email " required  / >
                                <span id="error_name" style="color:red;"></span>
                                
                               

                                <input type="submit" name="send" id="signup" class="form-submit" value="Send Mail"/>
                               
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

