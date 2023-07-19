<?php
    session_start();
//connection with Database
    require'init.php';
//signup
   if (isset($_POST['signup'])) {
    
   	$name=$_POST['name'];
   	$email=$_POST['email'];
   	$pass=$_POST['pass'];
    $pass1= md5($pass);
    $date=date("d,M y H:i:s");

   

    $img =rand(10,100000)."-".$_FILES['img']['name'];  #img always taken by _FILES then [img] write name which is uded in form file upload field and after that name of the img when we upload file
     #here in $loc file name saves 
    $loc=  $_FILES['img']['tmp_name']; # loc where to save in php than name of img than temp name of image 
    $folder =("uploads/");   #where we save the file
 
   #to remove spaces in name and convert into lower
    $f_img = strtolower(str_replace(" ", "-", $img));

   
   if(move_uploaded_file($loc, $folder.$f_img)){

   	$sql ="INSERT INTO user(name,email,password,img,registered_at) Values('$name','$email','$pass1','$f_img','$date')";
   $res=mysqli_query($con,$sql);

   if($res){
     $success="<div class='success'><h3>SignUp Successfull</h3></div>";
   }else{
   	echo"not inserted";
   }

}else{
	echo"image did'nt move";
}}
  
  //data delete query 

  if (isset($_POST['delete'])) {

     $del = $_POST['delete'];
     $sql=" DELETE from user WHERE id='$del'";
     $res=mysqli_query($con,$sql);
     if($res){
     $success="<div class='success'><h3>Data Successfully Deleted</h3></div>";
     }else{
      //echo"not deleted";
     }
   }

   //updation query

   if (isset($_POST['update-data'])) {
 
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass1= md5($pass);
    $date=date("d,M y H:i:s");

    $img =rand(10,100000)."-".$_FILES['img']['name'];  #img always taken by _FILES then [img] write name which is uded in form file upload field and after that name of the img when we upload file
     #here in $loc file name saves 
    $loc=  $_FILES['img']['tmp_name']; # loc where to save in php than name of img than temp name of image 
    $folder =("uploads/");   #where we save the file
 
   #to remove spaces in name and convert into lower
    $f_img = strtolower(str_replace(" ", "-", $img));

   
   if(move_uploaded_file($loc, $folder.$f_img)){

    $sql ="UPDATE user SET name='$name',email='$email',password='$pass1',img='$f_img',updated_at='$date' WHERE id='$id' ";
   $res=mysqli_query($con,$sql);

   if($res){
       
         echo   $success= "<div class='success'><h3>Data Successfully Updated</h3></div>";
         
   }else{
    echo"not inserted";
   }

}else{
  echo"image did'nt move";
}}
  

//admin login

if(isset($_POST['pannal-login'])){
      $email=htmlspecialchars(mysqli_real_escape_string($con,$_POST['email']));  //by this it will secure frm html injections
      $pass=htmlspecialchars(mysqli_real_escape_string($con,$_POST['pass'])); 
      
      $username='Haniya';
      $email1=($email);
      $pass1= ($pass);
     
     if ($email1=='b8aefde9f57eb22ed4e682314ac9a941') {
            if ($pass1=='2464b94ceb49c2115c4238f51be98d8b') {
              $_SESSION['admin'] = $username;
             }else{
             echo "?> <script> alert('Password is wrong')</script>  <?php";
             }
     }else{
         echo"Email is wrong";
     }

}

//renter login
if (isset($_POST['login'])) {
      $email=htmlspecialchars(mysqli_real_escape_string($con,$_POST['email']));  //by this it will secure frm html injections
      $pass=htmlspecialchars(mysqli_real_escape_string($con,$_POST['pass']));

      $pass1= md5($pass);

      $sql="SELECT * FROM user WHERE email='$email' AND password='$pass1'";
      $res=mysqli_query($con,$sql);

      if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res)) {
          $_SESSION['username']=$row['name'];
          $_SESSION['email']=$row['email'];
          $_SESSION['img']=("upload/").$row['img'];
        }
      }else{
        echo" Email or Password is wrong";
      }
}

//products

  if (isset($_POST['p_upload'])) {
    
    $name=$_POST['p_name'];
    $price=$_POST['p_price'];
    $email=$_POST['email_id'];
    $phone=$_POST['phone'];
    $date=date("d,M y H:i:s");
     
     $url = strtolower($name);
    $url=str_replace(" ", "-", $url);
    $url=rand(10,100000)."-".$url;
 
    
    $plocation=$_POST['pick_location'];
    $pdescription=$_POST['p_description'];

    if (is_numeric($price)==true) {
     //
    }else{
      echo "Price Must Be Number";
    }

     $img1 =rand(10,100000)."-".$_FILES['img']['name'];  
     #here in $loc file name saves 
    $loc=  $_FILES['img']['tmp_name']; # loc where to save in php than name of img than temp name of image 
    $folder =("pimages/");   #where we save the file
 
   #to remove spaces in name and convert into lower
    $f_img = strtolower(str_replace(" ", "-", $img1));

   
   if(move_uploaded_file($loc, $folder.$f_img)){

    $sql ="INSERT INTO products(p_name,p_price,p_url,phone,email_id,pick_location,p_description,p_img,registered_at) Values('$name','$price','$url','$phone','$email','$plocation','$pdescription','$f_img','$date')";
   $res=mysqli_query($con,$sql);

   if($res){
     $success="<div class='success'><h3>Producted Uploaded</h3></div>";
     header('location:products.php');
   }else{
    echo"not inserted";
   }

}else{
  echo"image did'nt move";
}}
  
    
//delete product query
 
 if (isset($_POST['deleteproduct'])) {

     $del = $_POST['deleteproduct'];
     $sql=" DELETE from products WHERE p_id='$del'";
     $res=mysqli_query($con,$sql);
     if($res){
     $success="<div class='success'><h3>Data Successfully Deleted</h3></div>";
     }else{
      //echo"not deleted";
     }
   }

   
// renting product delete
   if (isset($_POST['deleterent'])) {
    
    $del= $_POST['deleterent'];
    $sql= " DELETE FROM renting WHERE id='$del' ";
    $res= mysqli_query($con,$sql);
    if ($res) {
      $success="div class='sucess'><DATA Successfully Deleted </h3></div>";
    }else{
      echo "not deleted";
    }
   }

   //verified user delete

   if (isset($_POST['deleteuser'])) {
    
    $del= $_POST['deleteuser'];
    $sql= " DELETE FROM users WHERE user_id='$del' ";
    $res= mysqli_query($con,$sql);
    if ($res) {
      echo "<script> alert('DATA Successfully Deleted ') </script>";
    }else{
      echo "not deleted";
    }
   }
?>
