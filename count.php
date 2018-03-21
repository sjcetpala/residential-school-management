<html>
<head>
<body>
<?php
$sid=$_POST["c1"];
include("connection.php");
//$x="select count(status) from attendence where status='$sid'";
//$u=mysqli_query($con,$x);
$result=mysqli_query($con,"SELECT count(*) as status from attendence where status='$sid'");
$data=mysqli_fetch_assoc($result);
echo $data['status'];
?>
<form action="#" method="post">
<input type="text" name="txt1" value="<?php echo $data['status'];?>">
</form>"
</body>
</head>
</html>

