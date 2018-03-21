<?php
include("connection.php");
$date=$_POST["datee"];
$date1=$_POST["date2"];
$s=mysqli_query($con,"SELECt count(*),`Status`,(datediff('2018-03-14','2018-03-13') - count(status))*150 bill from attendence group by `status`");
//echo "<form action='test2.php' method='post'><input type='hidden' name='h1' value='$cls'>
echo"<table border ='1' cellspacing=3 width=70% height=80% align='center' style=margin:90px; bgcolor='white'>
<tr><th colspan=10><font size=15 color=black >Mess Bill</font></th></tr>
<tr><td>count1</td><td>Status</td><td>bill</td></tr>";
$rownumber=1;
  while($row=$s->fetch_row())
  {
	  echo"<tr><td>$row[0]</td>
	  <td>$row[1]</td>
	   <td>$row[2]</td></tr>";
	 
  }  
  
      echo"</table>";

  ?>