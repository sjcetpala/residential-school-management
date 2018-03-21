<?php
session_start();
	include("connection.php");
	$email=$_POST["email"];
	$pass=$_POST["password"];
	$sq="select * from signup where email='$email'and pass='$pass';";
	echo $sq;
	$result=mysqli_query($con,$sq);
     $num_row=mysqli_num_rows($result);
if($num_row==1)
{
	$row=mysqli_fetch_assoc($result);
	$uid=$row["email"];
	$_SESSION['mail'] = $uid;
	//$_SESSION['uname']=$row['uname'];
	if($row['usertype']=='1')
	{
		$_SESSION['email']=$_POST["email"];
		header('location:admin_page.html');
		exit();
	}
	else if($row['usertype']=='2')
	{
		$_SESSION['email']=$_POST["email"];
		
		header('location:demo1.php');
		exit();
	}
	else if($row['usertype']=='0')
	{
		$_SESSION['email']=$_POST["email"];
		//echo $_SESSION['email'];
	header('location:user_page.php');
	exit();
	}
}
	
?>