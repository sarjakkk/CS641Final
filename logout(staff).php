<?php
session_start();

session_destroy();
// header('Location:staff_signin.php');

echo "<script>alert('successfully loged out');window.location.href='staff_signin.php';</script>";


?> 	 	
