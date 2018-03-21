<?php
					include("connection.php");
					session_start();
					$email=$_SESSION["id"];
					$s=mysqli_query($con,"select *from reg_table where email='$email'");
					while($row=mysqli_fetch_array($s))
					{
						$name=$row[1];
					}
				 echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>Welcome $name...!</font></marquee>";
			  echo "</div>";	 
	  
					
				?>