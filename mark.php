
<html>
<body>
<table>
<tr>
<form action="#" method="post">
<td>select Class:</td>
						<td><select name="c1">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							</select
							<div>
										<input type="submit" value="Sign In">
									</div>
<?php
include("connection.php");
$sid=$_POST["c1"];
$s=mysqli_query($con,"select name from primaryy where class=$sid ");
echo "<table border ='0' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><th colspan=12><font size=15 color=white >Student List-Primary</font></th></tr>
<tr><th>Name</th></tr>";
  while($row=$s->fetch_assoc())
  {
  echo"<tr><td>".$row["name"]."</td><td><input type='text' name='txt1'></td></tr>";	 
   }
  echo"</table>"
 
  ?>
  </form>
</body>
</html>