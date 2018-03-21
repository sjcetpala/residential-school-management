<?php
$roomno=$_POST["c2"];
$sid=$_POST["c1"];
include("connection.php");
$s="UPDATE room set status=status +1 where RoomNo='$roomno'";
mysqli_query($con,$s);
$p="INSERT INTO `room_view`( `sid`, `Room_no`)VALUES ('$sid','$roomno')";
mysqli_query($con,$p);
$x="UPDATE primaryy set Room_status='alloted' where id='$sid'";
mysqli_query($con,$x);
?>