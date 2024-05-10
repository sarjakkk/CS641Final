<?php

$host = 'localhost';
$username = 'root';
$pwd = '';
$database = 'project';

$con = mysqli_connect($host,$username,$pwd,$database);

if(!$con)
{
	echo "ERROR: something wrong in connection ,please check your details!";
}


echo "--------------------------------------------------------------";
$i = $_REQUEST['id'];
$a = $_REQUEST['fname'];
$b = $_REQUEST['lname'];
$c = $_REQUEST['bdate'];
$d = $_REQUEST['age'];
$e = $_REQUEST['mnumber'];
$f = $_REQUEST['mail'];
$g = $_REQUEST['address'];

$query = "INSERT INTO `admin`  VALUES ('".$i."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."');";


$ans = mysqli_query($con,$query);
if(!$ans)
{
	echo '<br>'."error";
}
else
{
	echo "<script>alert('data inserted!')</script>";
}

?>

