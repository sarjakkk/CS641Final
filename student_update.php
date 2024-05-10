
<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
    
    if ($con)
    {
        echo " ";
    } else {
        echo "connection failed";
}
 $mail=$_SESSION['mail'];
 if(isset($_SESSION['mail']))
 {
 	$sql= "SELECT * from student where mail='$mail'";
 	$result=mysqli_query($con,$sql);
 	if(mysqli_num_rows($result)>0)
 	{
 		while ($row=mysqli_fetch_assoc($result))
 		{
 			?>
 			<div class="main">
		<div class="first">
			<div class="wel"> This page  is  for  update  your  data......... </div>
			<div class="line"> </div>
		</div>
		<div class="con">
		<form method="post" action="studentupdate.php">
			<table>
				<tr>
					<input type="hidden" name="id" value="<?php echo $row['id'];?>">
				<tr>
					<td>First Name :</td>
					<td><input type="text" name="fname" id="fname"  value="<?php echo $row['fname'];?>"   placeholder="Enter the 1st name" required></td>
				</tr>
				<tr>
					<td>Last Name :</td>
					<td><input type="text" name="lname" id="lname" value="<?php echo $row['lname'];?>" placeholder="Enter the Lastname" required></td>
				</tr>
				<tr>
					<td>Birth date :</td>
					<td><input type="date" name="bdate" id="bdate" value="<?php echo $row['bdate'];?>" placeholder="your Birthdate" required></td>
				</tr>
				<tr>
					<td>Age :</td>
					<td><input type="number" name="age" id="age" value="<?php echo $row['age'];?>" placeholder="your age is" required></td>
				</tr>
				<tr>
					<td>Mobile number :</td>
					<td><input type="number" name="mnumber" id="mnumber" value="<?php echo $row['mnumber'];?>" placeholder="Mobile number is" required></td>
				</tr>
				<tr>
					<td>Emailid :</td>
					<td><input type="email" name="mail" id="mail" value="<?php echo $row['mail'];?>" placeholder="your 

						mail is " readonly></td>
				</tr>
				<!-- <tr>
					<td>Qualification :</td>
					<td><input type="text" name="qualification" id="qualification" value="<?php echo $row['qualification'];?>" placeholder="Enter your qualification" required></td>
				</tr>
 -->				<tr>
					<td>Field :</td>
					<td> <select id="field" name="field" value="<?php echo $row['field'];?>">
				          <option value="es"> ES </option>
				          <option value="bt"> CS </option>
				          <option value="cs"> BT </option>
				        </select>
				    </td>
				</tr>
				<!-- <tr> 
					<td>Subject :</td>
					<td><input type="text" name="subject" id="subject" value="<?php echo $row['subject'];?>" placeholder="Enter your Subject" required></td>
				<tr> -->
					<td>Address :</td>
					<td><input type="text" name="address" id="address" value="<?php echo $row['address'];?>" placeholder="Enter your Address" required></td>
				</tr>	
				<tr>
					<td>Password :</td>
					<td><input type="password" name="pwd" value="password" placeholder="Enter your password" required></td>
				</tr>	
				<tr>
					<td><button type="submit" name="done" value="Done" > DONE </button></td>
				</tr>  


			</table> 
		</form> 
	</div> 
</div>   

<?php
 		}
 	}
 	else{
 	
 	}
 }
 else{
 	echo "login first";
 }
?>
<html lang="en">
<head>
    <title>Document</title>
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



    
</body>
</html>

