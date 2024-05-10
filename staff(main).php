<!DOCTYPE html>
<html>
<head>
	<title> Main  page  for  staff....   </title>
	<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">

	<style type="text/css">
	
	body{
		background-color: #d2d6d6;
	}	

	.first{
		font-family: 'Nerko One', cursive;
		font-size: 100px;
		text-align: center;

	}

	.line{
		border-color: black;
		border-style: double;
		margin-top: 10px;
		border-right: 0px;
		border-left: 0px;
		border-bottom:  0px;
		border-width: 3px;
	}

	.button{
		color: black;
		background-color: #a6a6a6;
		margin-top: 10px;
		text-align: center;
		text-decoration: none;
		padding: 10px;

	}

	button{
		padding: 7px;
		margin-left: 10px;
	}

	button:hover{
		opacity: 0.5;
		border-style: double;
	}





	</style>
</head>
<body>
<div class="main">
	<div class="first">  About  your  data    </div>
	<div class="line">  </div>
	<div class="button">  
		<form action="staff_update.php"> Click  here  for update  your  data
			<button type="submit" name="done" value="Done" > UPDATE </button>
		</form>
	</div>
	<div class="button">
		<form action="student.php"> Click  here  for add new student
			<button type="submit" name="done" value="Done" > ADD STUDENT </button>
		</form>
	</div>
	
	<div class="button">
		<form action="view.php"> Click  here  for student list
			<button type="submit" name="done" value="Done" > VIEW </button>
		</form>
	</div>
	<div class="button">
		<form action="atten.php"> Click  here  for student list
			<button type="submit" name="done" value="Done" > TAKE  ATTENDANCE </button>
		</form>
	</div>
	<div class="button">
		<form action="logout(staff).php"> Click  here  for logout
			<button type="submit" name="done" value="Done" > LOGOUT </button>
		</form>
	</div>

	
</div>
</body>
</html>