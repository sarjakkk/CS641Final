<!DOCTYPE html>
<html>
<head>
	<title> online student attedance management system </title>
	<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

	<style>

	body{

			background-color: #d9d9d9;
		}

	.title{
		font-family: 'Nerko One', cursive;
		font-size: 100px;
		text-align: center;
	}

	.line{
		border-style: solid;
		border-color: black;
		border-width: 0.2px;
		margin-top: 10px;
	}

	.line1{
		border-style: solid;
		border-color: black;
		border-width: 0.2px;
		margin-top: 50px;
	}

	.text{
		margin-top: 50px;
		background-color: #808080;

	}

	.text{
		border-color: black;
		border-style: solid;
		height: 30px;
		border-width: 2px;
		size: 5px;
	}

	.t1{
		padding-left: 370px;
		float: left;
		font-family: 'Crimson Text', serif;
		font-size: 20px;
		height: 2px;
		width:2px;
		color: #4d4d4d;
		text-decoration: none;

	}

	.t1:hover{
		color: black;
	
	}


	.img{
		float: right;	
		margin-top: 70px;
		border-width: 0.1px;
		border-color: black;
		border-style: solid;
		border-radius: 100px;
	}

	.i1{
		position: relative;
		float: right;
	}

	.imgtxt{
		margin-top: 350px;
		margin-left: -10px;
		border-color: #black;
		border-style: solid;
		border-radius: 100%;
		background-color: #737373;
		position: absolute;
		padding : 0px 10px 30px 30px;
		color: black;
		font-size: 20px;
		float: left;
	}

	.imgtxt1{
		position: absolute;
		margin-top: 450px;
		margin-left: -10px;
		border-color:black;
		border-style: solid;
		border-radius: 100%;
		background-color : #8c8c8c;
		padding: 10px 10px 30px 30px;
		color: black;
		font-size: 18px;
	}

	




	</style>
</head>
<body>

<div class="main">
	<div class="title">
	 	Online attendance portal 
	</div>

	<div class="line"> </div>

	<div class="middle">
		<div class="text">
		<!-- <a class="t1" href="admin.php"> ADMIN </a> -->
		<a class="t1" href="staff_signin.php"> STAFF </a>
		<a class="t1" href="student_signin.php"> STUDENT </a>
		</div>

	</div>

	<div class="line1"></div>

	<div class="image">
		<div class="i1"> <img class="img"  src="student.jfif">   
			<div class="imgtxt"><br> This is an online <br> attendance managemant <br>portal...</div>
			<div class="imgtxt1"><br> We are here <br> to manage your <br> daily reports                   
		 </div>
		 
	</div>

</div>

</body>
</html>