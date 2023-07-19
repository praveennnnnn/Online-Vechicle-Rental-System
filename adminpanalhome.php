<?php 
  include('action.php');


   if (isset($_SESSION['admin'])) {
   	$admin=$_SESSION['admin'];
   }else{
   	header('location:adminlogin.php');
   }

   if (isset($_GET['unset'])) {
   	unset($_SESSION['admin']);
   	  header('location:adminlogin.php');
   }else{
   	//
   }
?>

<!DOCTYPE html>
<html>
<head>
   <title> Admi Panal-Home | RentingInn</title>
    <link rel="stylesheet" type="text/css" href="adminpanal.css">
    <link rel="stylesheet" type="text/css" href="index.css">
       
</head>
<body>
    
    <div class="container">
      
      
         <div class="logo">
               <a href="index.php"> <img src="images/weblogoooo.png" style="width: 150px;"> </a>
               <a href="adminpanal.php?unset=1" class="btn" style="width: 150px; text-align: center;text-decoration: none;position: relative; margin-bottom: 0px;margin-left: 90%;">LogOut</a> 
             </div>
             <div class="smal-container">
          <h1 class="head">Welcome To Admin Panal<? echo $username; ?>
          </h1> 
           
      </div>
      <div class="navbar" style="background: radial-gradient(#00e6e6,#563434);margin: 100px;">  <!--navbar class div starts-->
                 <nav style="text-align: center;background: radial-gradient(#00e6e6,#563434);border: none; ">
                   <ul id="menuitems" >
                    <li> <a class="btn" href="adminreguser.php"> Registered Users</a> </li>
                     <li> <a class="btn" href="adminregproducts.php"> Registered Products for Sale </a> </li>
                     <li> <a class="btn" href="adminrentingproducts.php"> Registered Products for Rent </a> </li>
                             
                   </ul>

                 </nav>
         </div>
     
       
    </div>

    
</body>
</html>