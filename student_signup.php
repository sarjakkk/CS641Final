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
// $a = $_REQUEST['id'];
$b = $_REQUEST['fname'];
$c = $_REQUEST['lname'];
$d = $_REQUEST['bdate'];
$e = $_REQUEST['age'];
$f = $_REQUEST['mnumber'];
$g = $_REQUEST['mail'];
$h = $_REQUEST['field'];
$i = $_REQUEST['semester'];
$j = $_REQUEST['address'];
$k = $_REQUEST['pwd'];




$query = "INSERT INTO student( fname,lname,bdate,age, mnumber, mail, field,semester,address, password) VALUES ('$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
echo $query;

$ans = mysqli_query($con,$query);
// if(!$ans)
// {
// 	echo '<br>'."error";
// }

if (!$ans) { echo '<br>'."error";
	# code...
} else {
	 echo "<script>alert('insert successfully');window.location.href='staff(main).php';</script> ";
                  

}
?>