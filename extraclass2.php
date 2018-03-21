<?php
 include("connection.php");
	  $v=$_POST["name"];
	  $x=$_POST["class"];
	  $q=$_POST["timee"];
	  $s="INSERT INTO `extraclass`(`name`, `class`,`time`) VALUES ('$v','$x','$q')";
			$yy=mysqli_query($con,$s);
			echo "$s";
?>

