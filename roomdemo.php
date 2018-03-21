<?php
include("connection.php");
$s=mysqli_query($con,"select * from room where category='pimary' and status='Free'");
echo "<table border ='0' cellspacing=1 width=30% height=40% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><th colspan=2><font size=15 color=white >Student List-Primary</font></th></tr>
<tr><td>Name</td><td>RoomNo</td></tr>";
 while($row=mysqli_fetch_array($s))
  {
	  $cid=$row[0];
  echo"<tr><td>$row[1]</td><td>$row[2]</td></tr>";
  }
  echo"</table>"
	 ?>
	</body>
</html>