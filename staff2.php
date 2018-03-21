<?php
$class=$_POST["c2"];
$sid=$_POST["c1"];
include("connection.php");
$p="INSERT INTO `staff`( `Name`, `Class`)VALUES ('$sid','$class')";
mysqli_query($con,$p);
?>