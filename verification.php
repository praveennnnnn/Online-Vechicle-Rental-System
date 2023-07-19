<?php
    require 'init.php';
   if (isset($_POST['verify'])) {

    $email=$_POST['mail'];
     
    $file1=$_FILES['cnicfront']['name'];
    $file_tmp1=$_FILES['cnicfront']['tmp_name'];
    $folder1="usercnic/".$file1;
    move_uploaded_file($file_tmp1,$folder1);

    $file2=$_FILES['cnicback']['name'];
    $file_tmp2=$_FILES['cnicback']['tmp_name'];
    $folder2="usercnic/".$file2;
    move_uploaded_file($file_tmp2,$folder2);

    $file3=$_FILES['certificate']['name'];
    $file_tmp3=$_FILES['certificate']['tmp_name'];
    $folder3="usercnic/".$file3;
    move_uploaded_file($file_tmp3,$folder3);

   
      
       $query= "INSERT into verify (mail,cnicfront,cnicback,certificate)  VALUES ('$email','$folder1','$folder2','$folder3')";
        if(mysqli_query($con,$query)) {
          $_SESSION['mail']= $row['mail'];
      echo "<font size='+2'>item inserted successfully</font>";
      header('location:signup.php');
   
    }
      else
     {
     echo "item is not inserted";
    }
      
}
      
  ?>
<script >
  alert("Before registration on RentingInn-You need to Verify Yourself first");
</script>
<!DOCTYPE html>
<html>
<head>
	<title> User Verification - RentingInn</title>
</head>
<meta charset="utf-8">
         <meta name="viewport" content="width=device-width , initial-scale=1.0">

	<title>Seller Registration - RentingInn </title>
	<link rel="stylesheet" type="text/css" href="adupload.css">
	<link rel="stylesheet" type="text/css" href="index.css">
  <link rel="preconnect" href="https://fonts.gstatic.com"> <!---font link starts---->
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"><!--fontlinkend-->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

         <style>
           p{color: #ff1212;font-weight: 400px;}
          input{text-align: center;}
          .btn{margin-left: 20%;width: 250px;}
         </style>

<body>
     
       <div class="navbar" style="height: 70px;">  <!--navbar class div starts-->
             
         <div class="logo">
               <a href="index.php"> <img src="images/weblogoooo.png" style="width: 150px;"> </a>
             </div>
                 
                 <nav>
                   <ul id="menuitems" >
                     <li> <a href="index.php" > Home    </a> </li>
                     <li> <a href="products.php"> Products</a> </li>
                     <li> <a href=""> About   </a> </li>
                             
                   </ul>

                 </nav>
         </div>

<form action="verification.php" method="POST" enctype="multipart/form-data">
<div class="wrapper " style="max-width:460px;height: 450px;margin-top: 30px;padding: 30px;">
  <div class="title">
    <h2>User Verification</h2>
  </div>
 
  <div class="contact-form">
    <div class="input-fields" style="width: 400px;" >
      
      <p >Enter Your Email </p>
      <input type="email" name="mail" class="input" placeholder="Enter Your Email">
     <p >Upload Picture of CNIC (Front Side):</p>
      <input type="file" name="cnicfront" class="input" placeholder="Enter Cnic Picture (Front Side)">
      <p >Upload Picture of CNIC (Back Side Side):</p>
      <input type="file" name="cnicback" class="input" placeholder="Enter Cnic Picture (Front Side)">
      <p >Upload Any Of Your Educational certificate(10th +):</p>
      <input type="file" name="certificate" class="input" placeholder="Any educational certificate">
    </div>
    

  </div>
    <button type="submit" name="verify" class="btn" style="margin-bottom: 5px;margin-top: 10px;"><h2>Verify</h2></button>
</div>
</form>


</body>
</html>