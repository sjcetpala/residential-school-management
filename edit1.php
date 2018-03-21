<style>
input[type=submit] {
    background-color: #876754;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	width:260px;
}
</style>
</head>
<?php
session_start();
include("connection.php");

					$uid=$_SESSION['mail'];
					
					$sql = "select * from primaryy where mail='$uid'";
					
					$res= mysqli_query($con, $sql);
					//$result=mysqli_fetch_assoc($r);
echo "<table border ='1' cellspacing=1 width=70% height=70% align='center' style=margin:90px; bgcolor=#FFFFFF>
<tr><th colspan=12><font size=15 color=black >Prifile Edit</font></th></tr>
<tr><th>Name</th><th>class</th><th>dob</th><th>gender</th><th>religion</th><th>caste</th><th>mail</th><th>mob</th><th>insti</th><th>guardian</th><th>father</th><th>mother</th><th>adress</th><th>line</th><th>city</th><th>zip</th><th>room_status</th><th>Edit</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo"<tr><td>".$row["name"]."</td><td>".$row["class"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["religion"]."</td><td>".$row["caste"]."</td><td>".$row["mail"]."</td><td>".$row["mob"]."</td><td>".$row["insti"]."</td><td>".$row["guardian"]."</td><td>".$row["father"]."</td><td>".$row["mother"]."</td><td>".$row["adress"]."</td><td>".$row["line"]."</td><td>".$row["city"]."</td><td>".$row["zip"]."</td><td>".$row["Room_status"]."</td><td><form method='post' action='update.php'><input type='submit' name='Delete' value='Delete'></form></tr>";	  	 
   }
  echo"</table>"
  ?>
</body>
</html>