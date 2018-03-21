<?php
session_start();
	include("connection.php");
         $s1=$_POST["email"];
		$s2=$_POST["opassword"];
	    $s3=$_POST["npassword"];
	    $s4=$_POST["cpassword"];
		
			  //include("connection.php");
			  $result = mysqli_query($con,"SELECT pass FROM signup WHERE email='$s1'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
       // else if($s2!= mysql_result($result, 0))
        //{
        //echo "You entered an incorrect password";
       // }
        if($s3=$s4)
        $sql=mysqli_query($con,"UPDATE signup SET pass='$s3' where  email='$s1'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
		header('location:user_page.php');
		 echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>succesfully changed...!</font></marquee>";
			  echo "</div>";
        }
       else
        {
       echo "Passwords do not match";
       }
      ?>