<?php
 include("connection.php");
	  $y=$_POST["h2"];
	  $s="delete from reg_up where mail='$y'";
			$yy=mysqli_query($con,$s);
			echo "$s";
?>

