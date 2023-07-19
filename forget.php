<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forget Password</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" type="text/css" href="trysignup.css">
</head>
<body>

    <div class="header" > <!-- header class div starts---->
         <div class="container1">  <!--contanier class div starts-->
             <div class="navbar">  <!--navbar class div starts-->
                 
                 <div class="logo">
                     <a href="RentingInn.php"> <img src="images/weblogoooo.png" width="150px"> </a>
                 </div>
                     
                     <nav>
                         <ul id="menuitems" >
                             <li> <a href="RentingInn.php" > Home    </a> </li>
                             <li> <a href="products.php"> Products</a> </li>
                             <li> <a href=""> About   </a> </li>
                             <li> <a href=""> Contact </a> </li>
                             <li> <a href="login.php"> Login/SignUp </a> </li>
                         </ul>

                     </nav>
                       
                       <ul><li><a href="logout.php"> Logout</a></li> </ul>
                       <a href="cart.php"> <img src="images/cart.png" width="30px" height="30px"> </a>
                       <img src="images/menu-icon.png"  class="menu-icon" onclick="menutoggle()"> <!--adding func-->
             
             </div> <!-- class navbar div ends-->

             
                    
         </div> <!-- end of contanier div-->
     </div> <!--header class div ends-->

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h1 class="form-title">Forget Password</h1>
                    
                        <form method="POST" class="register-form" id="register-form" action="forget_a.php">
                           
                           
                            <div class="form-group">
                                <label for="email_id"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email_id" id="email_id" placeholder="Email Id" required / >
                                
                            </div>
                            
                              <div class="form-group form-button">
                                <input type="submit" name="forget_submit" id="signup" class="form-submit" value="Submit"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                   </div>
                </div>
            </div>
        </section>
        </div>

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