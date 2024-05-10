<!DOCTYPE html>
<html>
<head>
	<title> view </title>
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

	.table{
		margin-top: 100px;
		text-align: center;
	}
	</style>
</head>
<body>
	<div class="main">
		<div class="first">
			<div class="wel"> This is the list of students......... </div>
			<div class="line"> </div>
		</div>	<br><br>

<form>
	<label>Select field : </label>
	 <select name="field" id="field" onchange="selfield()">
	 	<option name="sel" value="cs">CS</option>
	 	<option name="sel" value="mb">MB</option>
	 	<option name="sel" value="bt">BT</option>
	 	<option name="sel" value="es">ES </option>
	 </select>
</form>
	</div>
</body>
</html>


	<table border='2'>

	<thead>
	<th>First name</th>
	<th>Last name</th>
	<th>Birth date</th>
	<th>Age</th>
	<th>Contact number</th>
	<th>Email id</th>
	<th>semester</th>
	<th>Field</th>
	<th>Address</th>
	<th>Password</th>
	</thead>
	<tbody id="ans"></tbody>
 		


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
	// $(document).ready(function()
	// {
	// 	$('sel').click(function(){
	// 	
	// 	})
	// })
	function selfield()
	{
		var x= document.getElementById("field").value;
		$.ajax({
			url:"select_student.php",
			type: "POST",
			data:{
				id:x
			},
			success:function(data)
			{
				$("#ans").html(data);
			}
		})
	}
</script>

