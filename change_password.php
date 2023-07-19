<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change password</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="newstyle.css">
    <link rel="stylesheet" type="text/css" href="trysignup.css">
    
</head>
<body style="background: background: radial-gradient(#00e6e6,#563434);margin-bottom: 5px;">

         <div class="navbar">  <!--navbar class div starts-->
                 
         <div class="logo">
                     <a href="index.php"> <img src="images/weblogoooo.png" width="150px"> </a>
                 </div>
                     
                     <nav>
                         <ul id="menuitems" >
                             <li> <a href="index.php" > Home    </a> </li>
                             <li> <a href="products.php"> Products</a> </li>
                             <li> <button onclick="window.location.href='http://localhost/upproduct/adupload.php';" 
                                style="background: black;color: white;height:25px; width: 100px;"> Post Your Add</button> </li>
                             <li> <a href=""> About   </a> </li>
                             <li> <a href='http://localhost/upproduct/contactus.php'> Contact  </a> </li>
                             <?php 
                             if(isset($_SESSION['user_id'])){?>
                                 <li><a href="change_password.php"> <?php echo $_SESSION['name'];?> </a></li>
                            <?php } else {?>
                          <li><a href="login.php">Login </a></li>
                          <?php } ?>
                         </ul>

                     </nav>
                      
                       <a href="cart.html"> <img src="images/cart.png" width="30px" height="30px " style="margin-left: 5px; margin-right: 8px;" > </a>
                       <ul><li><a href="http://localhost/upproduct/adminlogin.php"> Admin LogIn</a></li> </ul>
                       <img src="images/menu-icon.png"  height="30px" class="menu-icon" onclick="menutoggle()"> 
             
             </div>        

    <div class="main" style="background:radial-gradient(#00e6e6,#563434)";>
     <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container" style="background:radial-gradient(#00e6e6,#563434);margin-top: 0px;">
                <div class="signin-content">
                   
                    
                    <div class="signin-form">
                        <h1 class="form-title">Welcome <?php echo $_SESSION['name'];?></h1>
                        
                        <h1>Change Password</h1>
                        <?php
                    if(count($_GET)>0){
                        if($_GET['status']==200){
                            echo "<span style='color:green;text-align:center;'><h1>Password changed successfully </h1>!</span>";
                        }
                        if($_GET['status']==201){
                            echo "<span style='color:red;text-align:center;'>Invalid Old password  !</span>";
                        }
                    }
                    ?>
                        <form method="POST" class="register-form" id="register-form" action="change_password_a.php">
                           
                            
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="old_pass" id="old_pass" placeholder="Enter Old password"  required />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="new_pass" id="new_pass" placeholder="Enter new password"  required />
                                <span id="CheckPasswordMatch" style="color:red;"></span>
                            </div>
                            <span><i class="zmdi zmdi-eye" id="show_password"></i>Show Password</span>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="change_pass" id="signup" class="form-submit" value="Change Password"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>