<?php
include_once 'init.php';
if(isset($_POST['save']))
{	 
	 $name = test_input($_POST['name']);
	 $email_id = test_input($_POST['email_id']);
	 $phone=test_input($_POST['phone']);
	 $password = md5($_POST['password']);
	 $cpassword = md5($_POST['cpassword']);
	 $date=date("Y/m/d");
     $token=bin2hex(random_bytes(15));

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

	$duplicate=mysqli_query($con,"select * from users where email_id='$email_id' or phone='$phone'");
	if (mysqli_num_rows($duplicate)>0)
	{
		header("Location: signup.php?status=201");
		exit();
	}else{
		if ($password === $cpassword) {
			
	$sql = "INSERT INTO users (name,email_id,phone,password,cpassword,registered_at,token,status,cnicfront,cnicback,certificate)
	VALUES ('$name','$email_id','$phone','$password','$cpassword','$date','$token','inactive','$folder1','$folder2','$folder3')";
	$iquery=mysqli_query($con, $sql);
	 
		//header("Location: login.php?status=200");
		      if ($iquery) {
					$subject = "Email Activation";
					$body = "Hi, $username. Click here to activate your account on RentingINN website.http://localhost/Rupdated/activate.php?token=$token";

					$headers = "From: batch2dummymail@gmail.com";

					if (mail($email_id, $subject, $body, $headers)) {
					    echo " Check Your Mail to activate your account $email_id";
					    header('Location:login.php');
					} else {
					    echo "Email sending failed...";
					}
		      }}else { echo "password didnt match";}
		  }
	
	 mysqli_close($con);
}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
?>