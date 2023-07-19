<?php
session_start();
include_once 'init.php';
if(isset($_POST['change_pass']))
{	 
	$user_id=$_SESSION['user_id'];
	$old_pass = md5($_POST['old_pass']);
	$new_pass = md5($_POST['new_pass']);
	$pass=mysqli_query($con,"select password from users where user_id=$user_id and password='$old_pass'");
	echo "select password from users where user_id=$user_id and password='$new_pass'";
	$row_pass = mysqli_fetch_array($pass);
	if (mysqli_num_rows($pass)>0)
	{
		if($old_pass==$row_pass['password']){
			$sql = "UPDATE users set password='$new_pass' where user_id=$user_id";
			if (mysqli_query($con, $sql)) {
				header("Location: change_password.php?status=200");
				exit();
			}
		}
	}
	else{
		header("Location: change_password.php?status=201");
		exit();
	}
	mysqli_close($con);
}
?>