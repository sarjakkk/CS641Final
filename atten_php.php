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
$field=$_REQUEST['field'];
$semester=$_REQUEST['semester'];

echo "$semester";

$sql="SELECT * FROM student where field= '$field' and semester='$semester' ";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$field=$_REQUEST['field'];
		$semester=$_REQUEST['semester'];
		$id=$row['id'];
		$name=$row['fname'];
		$atten=$_GET[$id];
		$query = "INSERT INTO atten (name, attendance,field,semester) VALUES ('$name','$atten','$field','$semester')";
		if(mysqli_query($con,$query))
		{
			
			echo "<script>alert('successfully recorded');window.location.href='staff(main).php';</script>";

		}
		else
		{
			echo "something went wrong";

		}
	}
}



