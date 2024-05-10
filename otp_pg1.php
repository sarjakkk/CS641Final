<?php

$con=mysqli_connect('localhost','root','','project');
    
    if ($con)
    {
        echo " ";
    } else 
    {
        echo "connection failed";
	}



$mail=$_REQUEST['mail'];
$message=rand(10000,99999);
?>
<script type="text/javascript">

function validateform()
{
	var x = document.getElementById("abc").value;
	var y = document.getElementById("xyz").value;
	if(x!=y)
	{
	document.getElementById("message").innerHTML="!! Please enter correct OTP.";
	return false;
	}
}

</script>
<html>
<head>
<title> forgot password </title>
	<style type="text/css">
	
	body{
		background-color: #d2d6d6;
	}

	.auth{
		background-color:#aeb0b0 ;
	}

	.auth1{
		color: black;
		font-family: 'Lobster', cursive;
		text-align: center;
		font-size: 50px;

	}

	.text{
		background-color:#aeb0b0 ;
		margin-top: 10px;
	}

	.text1{
		color: black;
		font-family: 'Lobster', cursive;
		text-align: center;
		font-size: 20px;
	}

	.text2{
		color: black;
		font-family: 'Lobster', cursive;
		text-align: center;
		font-size: 20px;
		margin-top: 30px;
	}

	input[type=number], input[type=submit] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid black; 
        box-sizing: border-box; 
    }

    .con{ 
        padding: 25px; 
        background-color: #b3b1b2;
        margin-top: 50px;
        height: 150px;
        width: 300px;
        border-color: black;
        border-style: solid;
        margin-left: 450px;

    } 

    .line{
    	border-style: solid;
    	border-color: black;
    	margin-top: 40px;
    	border-width: 0.5px;
    }

	

	</style>	
</head>
<body>
<div class="main">
	<div class="min">
		<div class="min2">
			<div class="auth">
				<div class="auth1">Authentication</div>
			</div>
			<div class="text">
				<div class="text1">For your security, we need to authenticate your request. We've sent an OTP..</div>
				<div class="line"></div>
				<?php echo "$mail"?>
				<div class="text2"> Please enter it below to complete verification.</div>
			</div>
		

		</div>
		<form class="con" action="newpwd1.php" onsubmit="return validateform()" >
			<input type="hidden" name="mail" value="<?php echo $mail;?>" />
			<input type="hidden" id="abc"  value="<?php echo $message;?>" />
			<input class="inpt" required="" type="number" id="xyz" / placeholder="Enter OTP">
			<div class="simply-countdown-losange" id="simply-countdown-losange"></div>
			<a href="otp_pg.php?mail=<?php echo "$mail";?>"> Resend OTP</a><div class="mes">
			<?php
			echo "$message";
			?>
		</div>
			<p id="message" style="color: red"></p>
			<input class="sub" type="submit" value="NEXT" />

		</form>
	</div>
</div>
</body>
</html>