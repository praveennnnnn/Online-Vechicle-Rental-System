
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Rentee-RentingInn</title>
    <!-- Font Icon -->
         <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    <!-- Main css -->
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" type="text/css" href="trysignup.css">
    <style>
        input{background:radial-gradient(#00e6e6,#71f0e1,#e07781);width: 300px;margin-left: 20px ; margin-bottom: 10px;}
        p{color: #000000; padding: 5px; font-weight: bold;}
        .form-group input{margin-bottom: 20px;}

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
                             <li> <a href="aboutus.php"> About US  </a> </li>
                             <li> <a href='contactus.php'> Contact US </a> </li>
                             
                         </ul>

                     </nav>
                       
                       
                       <a href="cart.php"> <img src="images/cart.png" width="30px" height="30px"> </a>
                       <img src="images/menu-icon.png"  class="menu-icon" onclick="menutoggle()"> <!--adding func-->
             
             </div> <!-- class navbar div ends-->

             
                    
         
    
        <!-- Sign up form -->
        <section class="signup">
            <div class="container" style="background: radial-gradient(#00e6e6,#e07781);height: 460px; margin-top: 10px;">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <?php
                    if(count($_GET)>0){
                        echo "<span style='color:green;text-align:center;'>Mobile Number or Email Id already exsit</span>";
                    }
                    ?>
                        <form method="POST" class="register-form" id="register-form" action="process.php" enctype="multipart/form-data">
                           
                            <div class="form-group">
                                
                                <input  type="text" name="name" id="name" placeholder="Enter Your Name" required />
                                
                                <input type="email" name="email_id" id="email_id" placeholder="Enter Your Email " required  / >
                                <span id="error_name" style="color:red;"></span>
                                
                                <input  name="phone" type="tel" minlength="10" maxlength="10" id="phone" placeholder="Enter Your Phone #"  required />
                                <span id="error_phone" style="color:red;"></span>
                                
                                <input type="password" name="password" id="pass" placeholder="Enter Your Password"  required />

                            <input type="password" name="cpassword" id="re_pass" placeholder="Repeat your password"  required />
                                <span id="CheckPasswordMatch" style="color:red;"></span>

                                <input type="submit" name="save" id="signup" class="form-submit" value="Register"/>
                                <a href="login.php" class="signup-image-link" style="margin-top: 0px;margin-left: 20%;"><h4>I am already member</h4></a>
                             </div>
                             </div>
                             <div class="signup-imagee" style="width: 600px;padding-top: 20px;">
                                 <p >Upload Picture of CNIC (Front Side):</p>
                                  <input type="file" name="cnicfront" class="input" placeholder="Enter Cnic Picture (Front Side)">
                                  <p >Upload Picture of CNIC (Back Side):</p>
                                  <input type="file" name="cnicback" class="input" placeholder="Enter Cnic Picture (Front Side)">
                                  <p >Upload copy of Any  Educational certificate(10th+):</p>
                                  <input type="file" name="certificate" class="input" placeholder="Any educational certificate">
                                  
                            <figure><img src="images/signup-image.jpg" alt="sing up image" style="height: 150px;width: 150px;"></figure>  
                            
                            </div>
              
            </form></div></div></div>
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