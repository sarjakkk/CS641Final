<?php
$con = mysqli_connect("localhost","root","","project") or die(mysql_error());
echo "Connected Succesfully.<br>";
session_start();

$mail=$_REQUEST['mail'];
$pwd=$_REQUEST['pwd'];

// $pwd="123".md5($pwd)."pd123";

$sql="select * from  staff where mail='$mail'";

// echo "$sql";

$result=mysqli_query($con,$sql);
echo mysqli_num_rows($result);
if(mysqli_num_rows($result)>0)
{
	while($abc=mysqli_fetch_assoc($result))
	{
		if($abc['password'] == $pwd && $abc['mail']==$mail)
		{

			// $_SESSION['fname']=$abc['fname'];
			$_SESSION['mail']=$abc['mail'];
			echo "<script>alert('Logged in Succesfully')</script>";
			header('Location:staff(main).php');
		}
		else
		{
			header('Location:staff_signin.php?pwd=wrong');
			echo "Password wrong";
		}
	}

}
else
{
	header('Location:staff_signin.php?mail=wrong');
	echo "Email wrong";
}
?>