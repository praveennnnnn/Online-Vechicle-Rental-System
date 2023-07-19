
<?php

   include('action.php');
  if(isset($_SESSION['admin'])) {
    header('location:adminpanal.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
	<title>Admin Login - RentingInn</title>
          <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	       <link rel="stylesheet" type="text/css" href="index.css">

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
                       
                             
                   </ul>

                 </nav>
         </div>   
        
    

    <div class="wrapper" style="margin-top: 30px; height: 400px;">
  <div class="title">
    <h1>ADMIN LOGIN</h1>
  </div>
  <div class="contact-form">
    
      <form action="adminpanalhome.php" method="post" enctype="multipart/form-data">
      <input type="email" name="email" placeholder="Enter Your Email" required><br>
      <input type="password" name="pass"placeholder="Enter Your Password" required><br>
     <button type="submit" name="pannal-login" class="btn" ><h2>Login</h2></button>
   </form>
</div>
  </div>

</body>
</html>