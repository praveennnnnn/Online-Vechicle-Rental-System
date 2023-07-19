<?php include('action.php');
if (isset($_SESSION['username'])) {
  header('location:http://localhost/Rentinginn/index.php');
}else{
  //
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Seller/Renter Login - RentingInn</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    
    <div class="wrapper">
  <div class="title">
    <h1 style="font-size: 30px;text-align: center;">Seller/Renter LOGIN</h1>
  </div>
  <div class="contact-form">
    
      <form action="testingpage.php" method="post" enctype="multipart/form-data">
      <input type="email" name="email" placeholder="Enter Your Email" required><br>
      <input type="password" name="pass"placeholder="Enter Your Password" required><br>
      <button type="submit" name="login" class="btn" ><h2><a href="http://localhost/Rentinginn/index.php">Login</a></h2></button></br>
      <h3 style="color:  #39b7dd;">Don't have an account? <a href="index.php">SignUp</a></h3>
   </form>
    </div>
    </div>

</body>
</html>