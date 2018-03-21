<?php
//$sid=$_POST["c1"]
include("connection.php");
$r="SELECt count(*) FROM attendence WHERE date BETWEEN '2018-01-10' AND '2018-01-01'";
mysqli_query($con,$r);
echo $r;
?>
