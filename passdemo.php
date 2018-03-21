<?php
		$s1=$_POST["opassword"];
	    $s2=$_POST["npassword"];
	    $s3=$_POST["cpassword"];
		$s4=$_POST["email"];
			  include("connection.php");
			  $s=mysqli_query($con,"SELECT * FROM signup WHERE email='$s4'");
			 
			  while ($row = mysqli_fetch_assoc($s)) {


        $check_password = $row['pass'];
		$check_email = $row['email'];
    }
    if ( $s1 == $check_password && $s4==$check_email) 
     
			  {
			 // $s="UPDATE signup SET pass='$s2' where  email='$s4'";
			  //mysqli_query($con,$s);
			  if($s2==$s3)
			  {	
              $s="UPDATE signup SET pass='$s2' where  email='$s4'";
			  mysqli_query($con,$s);		  
			  echo "yourr password have  succesfully changed";
			  header('location:user_page.php');
			  }
			  }
			else
			  {
			  echo "Invalid email or password";
			  }
?>