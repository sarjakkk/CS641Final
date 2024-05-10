<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">

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

	.con{ 
        padding: 25px; 
        background-color: #b3b1b2;
        margin-top: 50px;
        height: 300px;
        width: 300px;
        border-color: black;
        border-style: solid;
        margin-left: 100px;

    } 

	input[type=Email], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid black; 
        box-sizing: border-box; 
    }
 	button:hover { 
        opacity: 0.7; 
    } 
    button { 
       	background-color:  #ffffe6; 
       	width: 100%;
        color: black; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 

         } 	
    .user{
    	border-color: black;
    	border-style: solid;
    	border-width: 0.5px;
    	padding: 10px;


    }
    .user1{
		border-color: black;
		border-style: solid;
		border-width: 0.5px;
		padding: 10px;
		margin-top: 10px;
	}


	</style>
</head>
<body>

	<div class="main">
		<div class="first">
			<div class="wel"> Welcome to the student page </div>
		</div>
        <form action="signin(student).php">
		<div class="con">
		Email :  <input type="Email" name="mail" placeholder="Enter your  email" required>  
		<?php
		if(isset($_GET['mail']))
		{
			echo "Email wrong";
		}
		?><br>
        Password :  <input type="password" placeholder="Enter Password" name="pwd" required>
        <?php
		if(isset($_GET['pwd']))
		{
			echo "Password wrong";
		}
		?>
        <button type="submit"> Signin </button> 
   		 
		</form>

		<!-- <div class="user"> 

		New user?
			
		<span style="margin-left: 10px;"><a class="signup" href="student.php"> SIGN UP </a></span>
		</div> -->
		<div class="user1"> 
			
		<span style="margin-left: 10px;"><a class="forgot" href="forgotpass1(student).php"> Forgot  password? </a></span>
		</div>

</body>
</html>