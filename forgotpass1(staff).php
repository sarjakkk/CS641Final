<!DOCTYPE html>
<html>
<head>
	<title> forgot password </title>
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

	.mail{
		background-color:#aeb0b0 ;
		margin-top: 10px;
	}

	.mail1{
		color: black;
		font-family: 'Lobster', cursive;
		text-align: center;
		font-size: 20px;
	}

	input[type=Email], input[type=submit] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid black; 
        box-sizing: border-box; 
    }

    .frm{ 
        padding: 25px; 
        background-color: #b3b1b2;
        margin-top: 50px;
        height: 150px;
        width: 300px;
        border-color: black;
        border-style: solid;
        margin-left: 450px;

    } 

	

	</style>
</head>
<body>
	<div class="main">
		<div class="min">
			<div class="first">
				<div class="wel"> Password  Assistance?? </div>
			</div>
			<div class="mail">
				<div class="mail1"> Enter your email address associated with your account.</div>
			</div>
		</div>
		<div class="frm">
			<form action="otp_pg.php" method="post">
				<input class="inpt" type="email" name="mail" placeholder="Enter your  email" required=""><br>
				<input class="sub" type="submit" value="SUBMIT">
			</form>
		</div>

		
	</div>

</body>
</html>