<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About US-RentingINN</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" type="text/css" href="adupload.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

         <style>
             .main{width: 80%;}
             .container{width: 1100px; background: linear-gradient(#ffcce6,#00cccc,#ff80bf);margin-left: 70px;margin-top: 10px;padding: 10px;}
             h1{  font-size: 55px;font-weight: 900; color:  #0000;background-color: #0000; text-align: center;
                  margin-bottom: 15px;text-shadow: -3px -3px  1px black,2px 2px 8px  #00cccc;text-decoration-style: dotted;}
             .ab{font-size: 30px; font-weight: bold; margin: 20px; box-shadow: -3px -3px  1px #ff80bf,2px 2px 8px  #00cccc; background:linear-gradient(#ffcce6,#00cccc,#ffcce6,#ffcce6,#ff80bf);}
             
             .col1{  width: 380px;height: 400px; float: left; position:relative; }

             .col2{  max-width: 600px; }
            
             span{margin-left: 25px; color: #000000;}
             h2{font-size: 35px; background: radial-gradient(#ffcce6,#00cccc,#ff80bf);margin: 10px; padding: 10px;text-align: center;}
             .atag{ border: none;color: white;background-color: red;border-radius: 5px;padding: 8px 12px;transition: 0.5s;}
             .atag:hover{ background:radial-gradient(#00e6e6,#563434);}
            .update{border: none;color: #0000;background-color: #4dff4d;border-radius: 5px;padding: 8px 12px;transition: 0.5s; }
            .update:hover{ background:radial-gradient(#00e6e6,#563434);}
         </style>
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

        <div class="main">
            <div class="container">
                <h1 class="form-title">RentingINN</h1>
                <div class="small-container" style=" margin-left: 0px;">
                    <div class="row">
                        
                        <h3 style="font-weight: lighter;">
                            Rentinginn is a web application system. The Rentinginn is a platform where a person can offer any kind of gadgets on rent over a reasonable price while another person (rentee) can directly approach him to rent his desirable product. So, by using this web application a person (Renter) offers his expensive gadgets on rent and can earn revenue from it, on the other hand, a person who cannot afford to buy products can rent his desirable product for a specific period on a specific price.<br>
                            It’s a P2P business model, owners can list their products and customers can either buy or rent them.
<span><h2>Purpose</h2></span>
                        This web application provides a platform for everyone to be able to rent different things on a single place and rentee can access detailed information about the gadgets available for rent.
  <span><h2>Main Objectives</h2></span>
                      Main objectives of our website are:
                    Provide platform for owner of products.
                    Provide platform for customer (rentee). 
                    Provide a user-friendly interface.
                    To produce a web-based system that allow customer to register and reserve products.
                    The main reason for the bloom of a rental business is that you can earn more profit without investment.
                        </h3>
                    </div>
                       
                  </div>
                  <div>
                    <h2>Website Map (Guide)</h2>
                     <img src="images/about.jpg" style="width: 500px;height: 480px;margin-left: 28%;margin-bottom: 20px;margin-top: 20px;">

                  </div>

       
<!-------footer start --------->
                 <div class="row" style="background-color: #000000;">
                     <div class="footer-col2">
                         <a href="index.php"> <img src="images/weblogoooo.png" style="width: 150px;"> </a>
                         <p> Our Main purpose is to sustainably Make your life easier and comfortable. </p>
                     
                        
                        <hr>  <!------horizontal line------>
                      <p class="copyright">Copyright 2021 - RentingInn</p>
                    </div>

                     
                 </div> <!-------row cls div ends--------->
</div>
					 
    </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>




