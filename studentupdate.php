<?php
$con=mysqli_connect('localhost','root','','project');
    
    if ($con)
    {
        echo " ";
    } else 
    {
        echo "connection failed";
    }
    
        
    	$a = $_REQUEST['id'];
		$b = $_REQUEST['fname'];
		$c = $_REQUEST['lname'];
		$d = $_REQUEST['bdate'];
		$e = $_REQUEST['age'];
		$f = $_REQUEST['mnumber'];
		$i = $_REQUEST['field'];
		$k = $_REQUEST['address'];
		$l = $_REQUEST['pwd'];



        $up="UPDATE student SET fname='$b',lname='$c',bdate='$d',age='$e',mnumber='$f',field='$i',address='$k',password='$l' WHERE id='$a'";
        
        
        if(mysqli_query($con,$up))
        {
            // 
            echo "<script>alert('update successfully');window.location.href='student(main).php';</script> ";

        }
        else
        {
            echo "Record is not updated";

        }
    
?>