<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["name"]);
header("Location:index.php");
header("Location:login.php");


?>