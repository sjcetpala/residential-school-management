<?php
 include("connection.php");
	  $y=$_POST["h2"];
	  $s="delete from primaryy where mail='$y'";
			$yy=mysqli_query($con,$s);
			echo "$s";
?>

