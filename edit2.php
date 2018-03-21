<?php
session_start();
include("connection.php");

					$uid=$_SESSION['mail'];
					
					$sql = "select * from reg_up where mail='$uid'";
					
					$s= mysqli_query($con, $sql);
					//$result=mysqli_fetch_assoc($r);
echo "<table border ='2' cellspacing=12 width=30% height=40% align='center' style=margin:90px; bgcolor=#FFFFFF>
<tr><th colspan=12><font size=15 color=black >Prifile Edit</font></th></tr>
<tr><th>Name</th><th>class</th><th>dob</th><th>gender</th><th>religion</th><th>caste</th><th>mail</th><th>mob</th><th>language</th><th>insti</th><th>mark</th><th>adress</th><th>line</th><th>city</th><th>zip</th><th>title</th><th>guardian</th><th>relation</th><th>father</th><th>mother</th></tr>";
  while($row=$s->fetch_assoc())
  {
  echo"<tr><td>".$row["name"]."</td><td>".$row["class"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["religion"]."</td><td>".$row["caste"]."</td><td>".$row["mail"]."</td><td>".$row["mob"]."</td><td>".$row["language"]."</td><td>".$row["insti"]."</td><td>".$row["mark"]."</td><td>".$row["adress"]."</td><td>".$row["line"]."</td><td>".$row["city"]."</td><td>".$row["zip"]."</td><td>".$row["title"]."</td><td>".$row["guardian"]."</td><td>".$row["relation"]."</td><td>".$row["father"]."</td><td>".$row["mother"]."</td><td><a href='update2.php?x=".$row["name"]."'>Edit</a></td></tr>";	 
   }
  echo"</table>"
  ?>
</body>
</html>