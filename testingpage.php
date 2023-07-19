<?php
   session_start();

   if (isset($_SESSION['username'])) {
   	$user=$_SESSION['username'];
   }else{
   	header('location:renterlogin.php');
   }
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <h1>Welcome on Testing Page</h1>
</body>
</html>