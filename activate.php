<?php

session_start();
include ('init.php');

if (isset($_GET['token'])) {
	$token=$_GET['token'];

	$updatequery = " UPDATE users set status='active' where token='$token'";

	$query = mysqli_query($con,$updatequery);

    if ($query) {
    	$_SESSION['activated'] = 'Account acctivated successfully';
    		header('location:login.php');
    	
    	}else {
    		echo "<script> alert ('Acctivation failed ') </script";
    		header('location:signup.php');
    	}
    }






?>