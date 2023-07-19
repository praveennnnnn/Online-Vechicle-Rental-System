<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Rentee-RentingInn</title>
            <link rel="stylesheet" type="text/css" href="adupload.css">
            <link rel="stylesheet" type="text/css" href="index.css">

    <!-- Font Icon -->
         <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    <!-- Main css -->
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" type="text/css" href="trysignup.css">
</head>
<body style="background: radial-gradient(#00e6e6,#563434);">
    
             <div class="navbar">  <!--navbar class div starts-->
                 
                 <div class="logo">
                     <a href="index.php"> <img src="images/weblogoooo.png" width="150px"> </a>
                 </div>
                     
                     <nav>
                         <ul id="menuitems" >
                             <li> <a href="index.php" > Home    </a> </li>
                             <li> <a href="products.php"> Products</a> </li>
                             <li> <a href=""> About   </a> </li>
                             <li> <a href='contactus.php'> Contact  </a> </li>
                             
                         </ul>

                     </nav>
                       
                       
                       <a href="cart.php"> <img src="images/cart.png" width="30px" height="30px"> </a>
                       <img src="images/menu-icon.png"  class="menu-icon" onclick="menutoggle()"> <!--adding func-->
             
             </div> <!-- class navbar div ends-->

             
                    
         
    
        <!-- Sign up form -->
                 <div class="wrapper1" style="height: 480px;width: 800px; margin-top: 35px; ">
      <div class="title">
        <h1>Upload Product (For Rent)</h1>
      </div>     
     <form action="rentingproduct.php" method="post" enctype="multipart/form-data">
         <div class="contact-form">
             <div class="input-fields">
                <input type="" name="name" placeholder="Enter Product name">
                <input type="" class="input" name="price" placeholder="Enter Product Price">
                <input type="email" name="email" placeholder="enter email">
                <input type="" name="phone" placeholder="phone no">
                <input type="file" name="img" required style="background: transparent; color:#05ade6;">
             </div>
             <div class="msg">
                  <input type="" class="input" name="pick_loc" placeholder="Possible Pickup Points" required>
                  <input type="" class="input" name="rentdays" placeholder="Max days for renting">
                   <textarea name="pdescription" placeholder="Write Product Description (Conditon/query)" style="height: 100px;"></textarea>
               </div>
           </div>
            <button type="submit" name="upload" class="btn" style="margin-bottom: 5px;margin-top: 10px; width: 80%;margin-left: 70px;">Upload Product</button><br>
         
     </form>
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