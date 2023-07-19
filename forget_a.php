<?php
include_once 'init.php';
if(isset ($_POST['forget_submit'])){

	
    
    $email_id=$_POST['email_id'];
	$subject ="Forgot Password !";
	$to=$email_id;
	$rs=mysqli_query($con,"select * from users where email_id='$email_id'");
	$row=mysqli_fetch_array($rs);
	if(mysqli_num_rows($rs)>0){
	    $password=$row['password'];
	    $message="Your forgot password is: $password";
	        PhpMail($to,$message,$subject);
			echo "<script>alert('Mail Sent Successfully ! Check The mail');</script>";
	}
	else{
		echo "<script>alert('Invalid email ! Check your email again!');</script>";
	}

}
?>