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
    <style>
      th{margin-left: 25px;}
      tr{max-width: 1500px;}
      table{ width: 1800px;}
    </style>

</head>
<body style="text-align: center; margin-left: 25px;">
<div class="navbar" style="height: 70px;">  <!--navbar class div starts-->
             
         <div class="logo">
               <a href="index.php"> <img src="images/weblogoooo.png" style="width: 150px;"> </a>
             </div>
                 
                 <nav>
                   <ul id="menuitems" >
                     <li> <a href="adminpanalhome.php" > Home    </a> </li>
                     <li> <a href="adminregproducts.php"> Registered Products</a> </li>
                     <li> <a href="adminrentingproducts.php"> Registered Products for Rent </a> </li>
                     <li><a href="adminpanal.php?unset=1" class="btn" style="width: 150px; text-align: center;text-decoration: none;position: relative; margin-bottom: 0px;margin-left: 10%;margin-top: 0px;">LogOut</a></li>
                             
                   </ul>

                 </nav>
         </div>
    
      <div class="table">
      <div class="table-con">
      <h1>Registered Users</h1>
        <?php
         if(isset($_GET['deleteuser'])){
            echo $success; 
          } 
        ?>

        <table>
          <tr >
            <th>ID</th>
            
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone #</th>
            <th>CNIC Front Side</th>
            <th>CNIC Front Side</th>
            <th>certificate</th>
            <th>RegisteredAT</th>
            <th>Status</th>
            <th>Delete</th> 
                
          </tr>

             <?PhP
             require'init.php';

             $sql= "SELECT * FROM users ORDER BY user_id DESC";
             $res=mysqli_query($con,$sql);
               
             if(mysqli_num_rows($res)>0){    
               while ($row=mysqli_fetch_assoc($res)) {
                 
                 $id=$row['user_id'];
                 $name=$row['name'];
                 $email_id=$row['email_id'];
                  $password=$row['password'];
                  $phone=$row['phone'];
                  $img1=$row['cnicfront'];
                   $img2=$row['cnicback'];
                   $img3=$row['certificate'];
                  $reg=$row['registered_at'];
                  $status=$row['status'];


                echo" 
                 <tr>
                 <td>$id</td>
                 <td>$name</td>
                 <td>$email_id</td>
                 <td>$password</td>
                 <td>$phone</td>
                 <td>$img1</td>
                 <td>$img2</td>
                 <td>$img3</td>
                 <td>$reg</td>
                 <td>$status</td>
                 
                         
                         <td>
                         <form action='adminreguser.php' method='post'>
                         <button type='submit' class='atag' name= 'deleteuser' value=$id onclick='return checkdelete()' >Delete</button>
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
</div>
    
    <script>
      function checkdelete(){
        return confirm('Are You sure you want to delete this record');
      }
    </script>      
  
  
</body>
</html>