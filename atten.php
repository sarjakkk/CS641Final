<!DOCTYPE html>

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
else{
       echo " ";
}
?>
<html>
<head>
	<title>attendance</title>
	<style type="text/css">
	
	body{
		background-color: #d2d6d6;
	}	


	.top{
		background-color: grey;
		height: 30px;
	}

	.right {
		margin-left:1100px;
		height: 30px;

	}

	.back{
		height: 30px;
	}
	button { 
       	background-color: white ; 
       	width: 30%;
        color: black; 
        margin-left: 100px; 
        margin-top: 3px;
        text-align: center;
        border-radius: 10%;
    }	

    table{
    	margin-top: 50px;
    	width: 1000px;
    }

    .name{
    	text-align: center;
    }



</style>
</head>
<body>
<div class="main">
	<div class="top">
		<div class="right">
			<div class="btn">
				<form action="staff(main).php" class="back">
					<button type="submit"  name="done"  value="done" >  BACK </button>
				</form>
			</div>
		</div>
	</div>

	<div class="mid">
		<div class="tbl" >
			
			
				<form>
				<label>Select a Field : </label>
				<select name="field" id="field" onchange="selfield()">
					<option name="sel" value="cs">CS</option>
					<option name="sel" value="mb">MB</option>
					<option name="sel" value="bt">BT</option>
					<option name="sel" value="es">ES</option>
				</select>
				<label>Select a semester : </label>
				<select name="semester" id="semester" onchange="selfield()">
					<option name="sem" value="1">1</option>
					<option name="sem" value="2">2</option>
					<option name="sem" value="3">3</option>
					<option name="sem" value="4">4</option>
					<option name="sem" value="5">5</option>
					<option name="sem" value="6">6</option>
				</select>
				</form>
				<br><br>
				<form action="atten_php.php" method="get">
			
			<table border="1">
				<thead>
					<th>id</th>
					<th>Name</th>
					<th>Attendance</th>
				</thead>
				<tbody id="ans"></tbody>
				
					
				
		</table>
			<input type="submit" name="" value="submit">
		</form>
		</div>

</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script type="text/javascript">
	function selfield(){
		var x= document.getElementById("field").value;
		var y= document.getElementById("semester").value;
		$.ajax({
			url:"select_student_atten.php",
			type: "POST",
			data:{
				id:x,
				sem:y
			},
			success:function(data)
			{
				$("#ans").html(data);
			}
		})
		}

	// function selsemester(){
	// 	var y= document.getElementById("semester").value;
	// 	$.ajax({
	// 		url:"select_student_atten.php",
	// 		type: "POST",
	// 		data:{
	// 			sem:y
	// 		},
	// 		success:function(data)
	// 		{
	// 			$("#ans").html(data);
	// 		}
	// 	})
		// }
		
</script>
</body>
</html>