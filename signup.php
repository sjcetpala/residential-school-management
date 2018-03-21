<?php
		include("connection.php");
		$name=$_POST["name"];
		$email=$_POST["email"];
		$pass=$_POST["password"];
		$cpass=$_POST["cpassword"];
		$utype="0";
		$s= "insert into signup values('$name','$email','$pass','$cpass','$utype')";
			mysqli_query($con,$s);
			
			//echo $s;
			//echo "success";
			header('location:index.php');
			
	
?>