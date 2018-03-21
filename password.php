		<?php
		$s1=$_POST["opassword"];
	    $s2=$_POST["npassword"];
	    $s3=$_POST["cpassword"];
		$s4=$_POST["email"];
			  include("connection.php");
			  $s=mysqli_query($con,"SELECT pass FROM signup WHERE email='$s4'");
			  if($s==s1)
			  $a=0;
			  while($row=mysqli_fetch_array($s))
			  {
			  $a++;
			  }
			  if($a==0)
			  {
			  echo "invalid old password";
			  }
			  else
			  {
			  $s="UPDATE signup SET pass='$s2' where  email='$s4'";
			  mysqli_query($con,$s);
			  echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>Your Password Changed</font></marquee>";
			  echo "</div>";
			  }
?>