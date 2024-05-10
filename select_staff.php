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


$id=$_REQUEST['id'];	
	$q1 = "SELECT * FROM staff WHERE field='$id'";
	$result1 = mysqli_query($con , $q1);
 	while($a=mysqli_fetch_assoc($result1))
		{
			echo "<tr>";
			echo "<td>".$a['fname'].'</td>';
			echo "<td>".$a['lname'].'</td>';
			echo "<td>".$a['bdate'].'</td>';
			echo "<td>".$a['age'].'</td>';
			echo "<td>".$a['mnumber'].'</td>';
			echo "<td>".$a['mail'].'</td>';
			echo "<td>".$a['qualification'].'</td>';
			echo "<td>".$a['field'].'</td>';
			echo "<td>".$a['subject'].'</td>';
			echo "<td>".$a['address'].'</td>';
			echo "<td>".$a['password'].'</td>';
			echo "</tr>";
		}
?>