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

	.update,.logout{
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
	<div class="update">  
		<form action="student_update.php"> Click  here  for update  your  data
			<button type="submit" name="done" value="Done" > UPDATE </button>
		</form>
	</div>
	<div class="logout">
		<form action="logout(student).php"> Click  here  for logout
			<button type="submit" name="done" value="Done" > LOGOUT </button>
		</form>
	</div>
	<div class="logout">
		<form action=""> Click  here  for your  timetable
			<button type="submit" name="done" value="cs" onclick="window.open('timetable_cs.php')" > CS </button>
			<button type="submit" name="done" value="mb" onclick="window.open('timetable_mb.php')"> MB </button>
			<button type="submit" name="done" value="bt" onclick="window.open('timetable_bt.php')"> BT </button>
		</form>
	</div>



	
</div>
</body>
</html>