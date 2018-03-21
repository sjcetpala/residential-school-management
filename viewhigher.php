<?php
include("connection.php");
$s=mysqli_query($con,"select * from reg_higher");
echo "<table border ='0' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><th colspan=12><font size=15 color=white >Student List-Primary</font></th></tr>
<tr><th>Name</th><th>class</th><th>dob</th><th>gender</th><th>religion</th><th>caste</th><th>mail</th><th>mob</th><th>insti</th><th>guardian</th><th>father</th><th>mother</th><th>mark</th><th>adress</th><th>line</th><th>city</th><th>zip</th><th>Room_status</th></tr>";
  while($row=$s->fetch_assoc())
  {
  echo"<tr><td>".$row["name"]."</td><td>".$row["class"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["religion"]."</td><td>".$row["caste"]."</td><td>".$row["mail"]."</td><td>".$row["mob"]."</td><td>".$row["insti"]."</td><td>".$row["guardian"]."</td><td>".$row["father"]."</td><td>".$row["mother"]."</td><td>".$row["mark"]."</td><td>".$row["adress"]."</td><td>".$row["line"]."</td><td>".$row["city"]."</td><td>".$row["zip"]."</td><td>".$row["options"]."</td><td>".$row["Room_status"]."</td><td><a href='deletehigher.php?x=".$row["name"]."'>Delete</a></td></tr>";	 
   }
  echo"</table>"
 ?>
	</body>
</html>