<?php

// $host = 'localhost';
// $username = 'root';
// $pwd = '';
// $database = 'project';

// $con = mysqli_connect($host,$username,$pwd,$database);
$con = mysqli_connect("localhost","root","","project") or die(mysql_error());
echo "Connected Succesfully.<br>";
if(!$con)
{
	echo "ERROR: something wrong in connection ,please check your details!";
}
else{
       echo "connected";
}

$b = $_REQUEST['fname'];
$c = $_REQUEST['lname'];
$d = $_REQUEST['bdate'];
$e = $_REQUEST['age'];
$f = $_REQUEST['mnumber'];
$g = $_REQUEST['mail'];
$h = $_REQUEST['qualification'];
$i = $_REQUEST['field'];
$j = $_REQUEST['subject'];
$k = $_REQUEST['address'];
$l = $_REQUEST['pwd'];




$query = "INSERT INTO staff( fname,lname,bdate,age, mnumber, mail, qualification,field,subject,address, password) VALUES ('$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
echo $query;

$ans = mysqli_query($con,$query);
// if(!$ans)
// {
//  echo '<br>'."error";
// }

if (!$ans) { echo '<br>'."error";
    # code...
} else {
     echo "<script>alert('insert successfully');window.location.href='admin(main).php';</script> ";
                  

}
?>



?>
 
 