<?php
session_start();

session_destroy();
echo "<script>alert('successfully loged out');window.location.href='student_signin.php';</script>";

?>