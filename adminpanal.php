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
<body style="text-align: center; margin-left: 25px;">
<div class="navbar" style="height: 70px;">  <!--navbar class div starts-->
             
         <div class="logo">
               <a href="index.php"> <img src="images/weblogoooo.png" style="width: 150px;"> </a>
             </div>
                 
                 <nav>
                   <ul id="menuitems" >
                     <li> <a href="adminpanalhome.php" > Home    </a> </li>
                     <li> <a href="adminreguser.php"> Registered Users  </a> </li>
                     <li> <a href="adminregproducts.php"> Registered Products</a> </li>
                     <li> <a href="adminrentingproducts.php"> Registered Products for Rent </a> </li>
                     <li><a href="adminpanal.php?unset=1" class="btn" style="width: 150px; text-align: center;text-decoration: none;position: relative; margin-bottom: 0px;margin-left: 10%;margin-top: 0px;">LogOut</a></li>
                             
                   </ul>

                 </nav>
         </div>
    
      <div class="table">
   	  <div class="table-con">
   	  <h1>Verified Users</h1>
        <?php
         if(isset($_GET['delete'])){
            echo $success; 
          } 
        ?>

   	  	<table>
   	  		<tr>
   	  			<th>ID</th>
   	  			<th>Images</th>
   	  			<th>Name</th>
   	  			<th>Email</th>
   	  			<th>RegisteredAT</th>
                <th>UpdatedAT</th>
                <th>Delete</th>
                <th>Update</th>
                
   	  		</tr>

             <?PhP
             require'init.php';

             $sql= "SELECT * FROM user ORDER BY id DESC";
             $res=mysqli_query($con,$sql);

             if(mysqli_num_rows($res)>0){    
			 while ($row=mysqli_fetch_assoc($res)) {
                 $id=$row['id'];
                 $img=("uploads/").$row['img'];
                 $name=$row['name'];
                 $email=$row['email'];
                 $reg=$row['registered_at'];
                 $up=$row['updated_at'];

                echo" 
		             <tr>
		   	  			 <td>$id</td>
		   	  			 <td><img src='$img' ></td>
		   	  			 <td>$name</td>
		   	  			 <td>$email</td>
		   	  			 <td>$reg</td>
		   	  			 <td>$up</td>
                         <td>
                         <form action='adminpanal.php' method='post'>
                         <button type='submit' class='atag' name= 'delete' value=$id>Delete</button>
                         </form>
                         </td>
                         <td>
                         <form action='adminpanal.php' method='post'>
                         <button type='submit' class='update' name= 'update' value=$id>Update</button>
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
             <?PhP
               if(isset($_POST['update'])){
               	   require'init.php';
               	   $id=$_POST['update'];

             $sql= "SELECT * FROM user Where id = '$id'";
             $res=mysqli_query($con,$sql);

             if(mysqli_num_rows($res)>0){    
			 while ($row=mysqli_fetch_assoc($res)) {
                 $id=$row['id'];
                 $img=("uploads/").$row['img'];
                 $name=$row['name'];
                 $email=$row['email'];
                 $pass=$row['password'];

                echo"  
		             <div class=wrapper style='margin-top:2px'>
			     		 <div class='title'>
						     <h1>Update</h1>
						 <div class='contact-form'>
							 <form action='adminpanal.php' method='post' enctype='multipart/form-data'>
								  	  <input class='hidden' type='text' name='id' value=$id placeholder='Enter Product Name' required><br>
								      <input type='text' name='name' value=$name placeholder='Enter Product Name' required><br>
								      <input type='email' name='email' value=$email placeholder='Enter Product Discription' required><br>
								      <input type='password' name='pass' value=$pass placeholder='Enter Product Price' required><br>
								      <input type='file' name='img' required>
								      <button type='submit' name='update-data' class='btn'><h2>Update Data</h2></button>
							 </form>
						 </div>
					     </div>
		  			 </div>
							
		   	  		 ";
             }}

             else{
             	echo"
             	   <h1> No DATA </h1>
   	  		      ";

             }
               }


             ?>
              
</div>
   	  		
  
  
</body>
</html>