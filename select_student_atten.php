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

	$id=$_REQUEST['id'];
	$sem=$_REQUEST['sem'];
	// echo $sem;
	// echo $id ;die;
		$q1 = "SELECT * FROM student WHERE field= '$id' AND semester='$sem'";
		$result1 = mysqli_query($con , $q1);
		if(mysqli_num_rows($result1)>0){
		// $sta=1;
			// $sta2=100;
		while ($a=mysqli_fetch_assoc($result1)) 
		{
		echo "<tr>";
		echo "<td>".$a['id']."</td>";
		?>
		<td><?php echo $a['fname'] ?></td>
		<td>
		<input type="hidden" name="name" value="<?php echo $a['fname'] ?>">	
		<input type="hidden" name="field" value="<?php echo $a['field'] ?>">
		<input type="hidden" name="semester" value="<?php echo $a['semester'] ?>">
		<input type='radio' name='<?php echo $a['id'] ?>' value='Present'>present
		<input type='radio' name='<?php echo $a['id'] ?>' value='Absent'>absent
		</td>

		<?php echo "</tr>";?>
		<?php
		}
		
	}

?>