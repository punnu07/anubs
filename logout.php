<?php
session_start();
unset($_POST['username']);
unset($_POST['password']);
$_SESSION["success"]="no";
unset($_SESSION["success"]);
header("Location:index.php");

?>
