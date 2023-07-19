<?php
session_start();

if(isset($_SESSION['name'])){
    
    header('location:welcome.php');
}
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
<link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" type="text/css" href="trysignup.css">
</head>
<body style="background: radial-gradient(#00e6e6,#563434)";>

        <?php

                include ('init.php');

                 if (isset($_POST['submit'])) {
                     $email=$_POST['email_id'];
                     $password = $_POST['password'];
                       
                       $pass1 = md5($password);

                     $sql=" SELECT * from users where email_id='$email' AND password='$pass1' ";
                     $query= mysqli_query($con,$sql);

                     $email_count = mysqli_num_rows($query);

                     if ($email_count) {
                          $row= mysqli_fetch_assoc($query);
                        $_SESSION['name']= $row['name'];
                        $_SESSION['email_id']= $row['email_id'];


                            echo "";
                            ?>

                            <script> 
                                location.replace("index.php");
                             </script>

                            <?php
                        }else{
                            echo " <script> alert('Invalid Email or Password ') </script>";
                        }
                     }
                

        ?>






     <div class="header" > <!-- header class div starts---->
         <div class="container1">  <!--contanier class div starts-->
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
                       
                       
                       
             
             </div> <!-- class navbar div ends-->

             
                    
         </div> <!-- end of contanier div-->
     </div> <!--header class div ends-->

    
     <!-- Sing in  Form -->
        <section class="sign-in" >
            <div class="container" style="background: radial-gradient(#00e6e6,#e07781);height: 460px; margin-top: 10px;">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        
                    </div>
                    
                    <div class="signin-form">
                        <h2 class="form-title" style="margin-bottom: 10px;">Login </h2>
                       
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="register-form" id="login-form" >
                            <div class="form-group" >
                                <label for="your_name" style="background:radial-gradient(#00e6e6,#71f0e1,#e07781);"><i class="zmdi zmdi-account material-icons-name"></i></label>
                               
                                <input type="email" name="email_id" id="email_id" placeholder="Email ID" autocomplete="on" required style="background:radial-gradient(#00e6e6,#71f0e1,#e07781);color: black"/>
                            </div>
                            <div class="form-group">
                            <label for="your_pass" style="background:radial-gradient(#00e6e6,#71f0e1,#e07781);"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required style="background:radial-gradient(#00e6e6,#71f0e1,#e07781)";/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in" style="margin-left: 35%;" /><br></div>


                                <div style="margin-left:55%; margin-top: 5px;">
                                 <a href="signup.php" class="signup-image-link" >Create an account</a>
                                <a href="recoveremail.php" class="signup-image-link">Forget Password</a>
                                </div>
                        </form>
                       
                    </div>
                </div>
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