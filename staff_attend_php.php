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
$sql="SELECT * FROM staff where field= '$field' ";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$field=$_REQUEST['field'];
		$id=$row['id'];
		$name=$row['fname'];
		// $b = date('d-m-Y');
		$atten=$_GET[$id];
		// echo $cv;
		$query = "INSERT INTO atten_staff (name, attendance,field) VALUES ('$name','$atten','$field')";
		if(mysqli_query($con,$query))
		{
			// echo "success";
			// echo $query;
			echo "<script>alert('successfully recorded');window.location.href='admin(main).php';</script>";

		}
		else
		{
			// echo $query;
			// echo "gdhgdhdgfhdgfhdg";
			echo "something went wrong";

		}
	}
}



