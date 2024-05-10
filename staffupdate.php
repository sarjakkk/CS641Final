<?php
$con=mysqli_connect('localhost','root','','project');
    
    if ($con)
    {
        echo " ";
    } else {
        echo "connection failed";
}
    
        
    	$a = $_REQUEST['id'];
		$b = $_REQUEST['fname'];
		$c = $_REQUEST['lname'];
		$d = $_REQUEST['bdate'];
		$e = $_REQUEST['age'];
		$f = $_REQUEST['mnumber'];
		$h = $_REQUEST['qualification'];
		$i = $_REQUEST['field'];
		$j = $_REQUEST['subject'];
		$k = $_REQUEST['address'];
		$l = $_REQUEST['pwd'];



        $up="UPDATE staff SET fname='$b',lname='$c',bdate='$d',age='$e',mnumber='$f',qualification='$h',field='$i',subject='$j',address='$k',password='$l' WHERE id='$a'";
        
        // echo "$up";
        if(mysqli_query($con,$up))
        {
        //     header('location:staff(main).php');
        //     echo "<script>alert( 'udated')</script>";
            echo "<script>alert('update successfully');window.location.href='staff(main).php';</script> ";
        }
        else
        {
            echo "Record is not updated";

        }
    
?>