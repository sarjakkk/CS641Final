<!DOCTYPE html>
<html>
<head>
	<title> view </title>
	<style type="text/css">
		
	body{
		background-color: #d2d6d6;
	}

	.first{
		background-color:#aeb0b0 ;
	}

	.wel{
		color: black;
		font-family: 'Lobster', cursive;
		text-align: center;
		font-size: 50px;

	}

	.table{
		margin-top: 100px;
		text-align: center;
	}
	</style>
</head>
<body>
	<div class="main">
		<div class="first">
			<div class="wel"> This is the list of students......... </div>
			<div class="line"> </div>
		</div>	<br><br>


	
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


echo " ";

	$q1 = "Select * FROM staff ;";
	$result1 = mysqli_query($con , $q1);
	echo "<table border='2'>";

	echo "<tr>".'<th>'.'First name'.'</th>';
	echo '<th>'.'Last name'.'</th>';
	echo '<th>'.'Birth date'.'</th>';
	echo '<th>'.'Age'.'</th>';
	echo '<th>'.'Contact number'.'</th>';
	echo '<th>'.'Email id'.'</th>';
	echo '<th>'.'qualification'.'</th>';
	echo '<th>'.'Field'.'</th>';
	echo '<th>'.'subject'.'</th>';
	echo '<th>'.'Address'.'</th>';
	echo '<th>'.'Password'.'</th>'.'</tr>';
 		
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
		}
?>



	</div>
</body>
</html>






