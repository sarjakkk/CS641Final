<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
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

	input[type=email], input[type=password] { 
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

    .msg{
    	border-color: black;
    	border-style: double;
    	margin-top: 30px;
    	border-width: 5px;
    	margin-left: 100px;
    	width: 330px;
    	padding: 5px;
    	font-size: 15px;
    }



</style>
	
</head>
<body>
	<div class="main">
		<div class="first">
			<div class="wel"> Welcome to the admin page </div>
		</div>
        <form>
		  <div class="msg"> If you are admin ,<br> Enter fix email and password which is provided by university </div>
        </form>
		<div class="con">
    		<form action="admin_signin.php">
        		Email :  <input type="email" name="mail" placeholder="Enter email" required>  
                <?php
                if(isset($_GET['mail']))
                {
                    echo "Email wrong";
                }
                ?><br>
                Password :  <input type="password" placeholder="Enter Password" name="pwd" required>
                <?php
                if(isset($_GET['password']))
                {
                    echo "Password wrong";
                }
                ?>
                <button type="submit"> DONE </button> 
    	    </form>
        </div>

    </div>
</body>
</html>