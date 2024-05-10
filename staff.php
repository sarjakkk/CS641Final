<html>
<head>

	<!-- <link rel="stylesheet" href="staff.php"> -->                                                   

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
	
	input[type=text], input[type=password],input[type=number], input[type=email],input[type=date],select { 
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
       	background-color: black ; 
       	width: 100%;
        color: white; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
        box-sizing: border-box;
    }	
		
	.con{ 
        padding: 25px; 
        background-color: #b3b1b2;
        margin-top: 50px;
        height: 750px;
        width: 400px;
        border-color: black;
        border-style: solid;
        margin-left: 100px;
	} 

	</style>
</head>
<body>
	<div class="main">
		<div class="first">
			<div class="wel"> This is a regestration page for staff member only......... </div>
			<div class="line"> </div>
		</div>
		<div class="con">
		<form method="post" action="staff_signup.php">
			<table>
				<tr>
					<td>First Name :</td>
					<td><input type="text" name="fname" id="fname" placeholder="Enter the 1st name" required></td>
				</tr>
				<tr>
					<td>Last Name :</td>
					<td><input type="text" name="lname" id="lname" placeholder="Enter the Lastname" required></td>
				</tr>
				<tr>
					<td>Birth date :</td>
					<td><input type="date" name="bdate" id="bdate" placeholder="your Birthdate" required></td>
				</tr>
				<tr>
					<td>Age :</td>
					<td><input type="number" name="age" id="age" placeholder="your age is" required></td>
				</tr>
				<tr>
					<td>Mobile number :</td>
					<td><input type="number" name="mnumber" id="mnumber" placeholder="Mobile number is" required></td>
				</tr>
				<tr>
					<td>Emailid :</td>
					<td><input type="email" name="mail" id="mail" placeholder="your mail is " required></td>
				</tr>
				<tr>
					<td>Qualification :</td>
					<td><input type="text" name="qualification" id="qualification" placeholder="Enter your qualification" required></td>
				</tr>
				<tr>
					<td>Field :</td>
					<td> <select id="field" name="field">
				          <option value="es"> ES </option>
				          <option value="bt"> CS </option>
				          <option value="cs"> BT </option>
				          <option value="mb"> MB </option>


				        </select>
				    </td>
				</tr>
				<tr> 
					<td>Subject :</td>
					<td><input type="text" name="subject" id="subject" placeholder="Enter your Subject"></td>
				<tr>
					<td>Address :</td>
					<td><input type="text" name="address" id="address" placeholder="Enter your Address" required></td>
				</tr>	
				<tr>
					<td>Password :</td>
					<td><input type="password" name="pwd"  placeholder="Enter your password" required></td>
				</tr>	
				<tr>
					<td><button type="submit" name="done" value="Done" > DONE </button></td>
				</tr>  


			</table> 
		</form> 
	</div> 
</div>
</body>
</html>  