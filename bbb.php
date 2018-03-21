<?php
include("connection.php");
$s="SELECT name,class,subject1,subject2,subject3,(( subject1 + subject2 + subject3)/(95*3) * 100) AS percentage FROM `invoice`";
$res=mysqli_query($con,$s);
//echo "<form action='test2.php' method='post'><input type='hidden' name='h1' value='$cls'>
echo"<table border ='1' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor='white'>
<tr><th colspan=10><font size=15 color=black >Mess</font></th></tr>
<tr><th>name</th><th>class</th><th>subject1</th><th>subject2</th><th>subject3</th></th><th>percentage</th></tr>";
 while($row=mysqli_fetch_array($res))
	   {
		   $s=$row[5];
			$namee=$row["name"];
            //$password=$row["password"];
	   echo"<tr><td>" .$row["name"]. "</td><td>" .$row["class"]. "</td><td>" .$row["subject1"]. "</td><td>" .$row["subject2"]. "</td><td>" .$row["subject3"]. "</td><td>$row[5]</td><td> <td><a href='update.php?x=".$row["0"]."'>Allot</a></td></tr>";	  
	    }
	   echo"</table>"
	   ?>
	   
