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
	<title> Admin Panal- RentingInn</title>
		<link rel="stylesheet" type="text/css" href="adminpanal.css">
    <link rel="stylesheet" type="text/css" href="index.css">

</head>
<body style="text-align: center; ">


     <div class="navbar" style="height: 70px;">  <!--navbar class div starts-->
             
         <div class="logo">
               <a href="index.php"> <img src="images/weblogoooo.png" style="width: 150px;"> </a>
             </div>
                 
                 <nav>
                   <ul id="menuitems" >
                     <li> <a href="adminpanalhome.php" > Home    </a> </li>
                     <li> <a href="adminreguser.php"> Registered Users  </a> </li>
                     <li> <a href="adminrentingproducts.php"> Registered Products for Rent </a> </li>
                     <li><a href="adminpanal.php?unset=1" class="btn" style="width: 150px; text-align: center;text-decoration: none;position: relative; margin-bottom: 0px;margin-left: 10%;margin-top: 0px;">LogOut</a></li>
                             
                   </ul>

                 </nav>
         </div>
      
    
      <div class="table">
   	  <div class="table-con">
         
   	  	<h1>Registered Products On Website</h1>
        <?php
         if(isset($_GET['deleteproduct'])){
            echo $success; 
          } 
        ?>

   	  	<table>
   	  		<tr>
   	  			<th>Product ID</th>
   	  			<th>Product_Image</th>
   	  			<th>Product Name</th>
   	  			<th>Email</th>
            <th>Phone</th>
            <th>Pick Location</th>
            <th>RegisteredAT</th>
            <th>Delete</th>
                
                
                
   	  		</tr>

             <?PhP
             require'init.php';

             $sql= "SELECT * FROM products ORDER BY p_id DESC";
             $res=mysqli_query($con,$sql);

             if(mysqli_num_rows($res)>0){    
			 while ($row=mysqli_fetch_assoc($res)) {
                 $id=$row['p_id'];
                 $f_img=("pimages/").$row['p_img'];
                 $name=$row['p_name'];
                 $email=$row['email_id'];
                 $phone=$row['phone'];
                 $plocation=$row['pick_location'];
                 $reg=$row['registered_at'];
                 

                echo" 
		             <tr>
		   	  			 <td>$id</td>
		   	  			 <td><img src='$f_img' ></td>
		   	  			 <td>$name</td>
		   	  			 <td>$email</td>
                 <td>$phone</td>
                 <td>$plocation</td>
		   	  			 <td>$reg</td>
		   	  			
                         <td>
                         <form action='adminregproducts.php' method='post'>
                         <button type='submit' class='atag' name= 'deleteproduct' value=$id>Delete</button>
                         </form>
                         </td>
                        
		   	  		 </tr>
		   	  		 ";
             }}

             else{
             	echo"
             	   <tr>
   	  			         <td>NO DATA</td>
   	  			         <td>NO DATA</td>
   	  			         <td>NO DATA</td>
   	  			         <td>NO DATA</td>
   	  			         <td>NO DATA</td>
                     <td>NO DATA</td>
   	  		      </tr>
   	  		      ";

             }

             ?>

   	  		
   	  		
   	  	</table>
   </div>

    <?php
         if(isset($_GET['update-data'])){
            echo $success; 
          } 
        ?>
            
   
              
</div>
   	  		
  
  
</body>
</html>