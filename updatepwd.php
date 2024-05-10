<?php

$con=mysqli_connect('localhost','root','','project');
    
    if ($con)
    {
        echo " ";
    } else {
        echo "connection failed";
}

$newpwd=$_REQUEST['np'];
$repwd=$_REQUEST['rp'];
$email=$_REQUEST['mail'];
// $newpwd="454".md5($newpwd)."ty453";

    $sqlupdate = "UPDATE staff SET  password='$newpwd' WHERE mail='$email'";
    // echo "$sqlupdate";
    if(mysqli_query($con,$sqlupdate))
    {
        echo "<script>alert('updated sucessfully')</script>";
        header('Location:staff_signin.php');
    }
    else
    {
        echo "(<script>alert('something wents wrong !!!')</script>";
    }
?>
