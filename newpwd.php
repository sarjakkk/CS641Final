<?php

$con=mysqli_connect('localhost','root','','project');
    
    if ($con)
    {
        echo " ";
    } else {
        echo "connection failed";
}

$mail=$_REQUEST["mail"];
?>
<script type="text/javascript">

function validatepwd(){
	var x = document.getElementById("npw").value;
	var y = document.getElementById("rpw").value;
	if(x!=y){
	document.getElementById("message").innerHTML="password not match";
	return false;
	}
}
</script>
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
        margin-top: 100px;
        height: 300px;
        width: 300px;
        border-color: black;
        border-style: solid;
        margin-left: 100px;

    } 

	input[type=submit], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid black; 
        box-sizing: border-box; 
    }

</style>
<div class="main">
	<div class="min">
		<div class="first">
			<div class="wel"> Reset  your  password...  </div>
		</div>
	</div>
	<div class="con">
		<form action="updatepwd.php" method="post" onsubmit="return validatepwd()">

		<input type="email" hidden="" name="mail" value="<?php echo $mail;?>" />

		<input class="inpt" type="password" id="npw" name="np" required="" placeholder="Enter new password" /><br>
		<input class="inpt" type="password" id="rpw" name="rp" required="" placeholder="Re-Enter password" />
		<p id="message"></p>
		<input class="sub" type="submit" value="SUBMIT" />

		</form>
		</div>
</div>