<?php
$con=mysqli_connect("localhost","root","","rsm_db");
	$x=$_GET['x'];
	$sql="delete from reg_up where name='$x';";
	mysqli_query($con,$sql);
	echo $sql;
	?>