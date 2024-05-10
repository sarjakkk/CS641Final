<?php
$con=mysqli_connect('localhost','root','','emp_registration');
    
    if ($con)
    {
        echo "connection succsess";
    } else {
        echo "connection failed";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4 style="text-align: center;">Update the employee deatails</h4>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <label>E-mail</label>
        <input type="text" name="mail" value="<?php echo $row['email'];?>" ><br><br>
<label> Manger Name</label>
        <select  name="mname">
            <option >select any one</option>
            <option value="m1"  <?php if($row['mname']=='m1'){echo 'selected';} ?>>m1</option>
            <option value="m2" <?php if($row['mname']=='m2'){echo 'selected';}?>>m2</option>
            <option value="m3" <?php if($row['mname']=='m3'){echo 'selected';}?>>m3</option>
        </select><br><br>
        <label>Work Assign </label>
        <select  name="list1">
            <option >select any one</option>
            <option value="develoment"  <?php if($row['worka']=='develoment'){echo 'selected';} ?>>develoment</option>
            <option value="testing" <?php if($row['worka']=='testing'){echo 'selected';}?>>testing</option>
            <option value="analyser" <?php if($row['worka']=='analyser'){echo 'selected';}?>>analyser</option>
            <option value="maintainance" <?php if($row['worka']=='maintainance'){echo 'selected';}?>>maintainance</option>
        </select><br><br>
        <label> Date</label>
        <input type="date" name="joindate" value="<?php echo $row['wdate'];?>"><br><br>
        <label>Description </label>
        <textarea type="text" rows="5" cols="15"name="edesc"><?php echo $row['wdesc'];?></textarea><br><br>
        <!--<input type="text" value="" name=""/>-->
        

        <button type="submit" name="submit">Submit</button>

            
    </form>
    <?php
    if(isset($_REQUEST['submit']))
    {
        $email=$_REQUEST["eemail"];
        $mname=$_REQUEST["m"];
        $work=$_REQUEST["list1"];
        $date=$_REQUEST["joindate"];
        $desc=$_REQUEST["edesc"];
        $up="UPDATE `todoinfo` SET `mname`='$mname',`worka`='$work',`wdesc`='$desc',`wdate`='$date',`email`='$email' WHERE id='$getid'";
        if(mysqli_query($con,$up))
        {
            header('location:listall.php');
        }
        else
        {
            echo "Record is not updated";
        }
    }
    ?>
</body>
</html>

