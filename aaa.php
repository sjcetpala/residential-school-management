<?php
session_start();
include("connection.php");
                     $uid=$_SESSION['mail'];
					 //echo $uid;
					
					$sql = "select id from primaryy where mail='$uid'";
				
					//echo $sql;
					$si= mysqli_query($con, $sql);
					if(mysqli_num_rows($si)>0)
					{
						
						$val=mysqli_fetch_assoc($si);
					
				
$s="SELECT name,class,subject1,subject2,subject3,exam,(( subject1 + subject2 + subject3)/(95*3) * 100) AS percentage FROM `invoice` where sid='$val[id]'";
$x= mysqli_query($con, $s);
//echo $s;
//echo "<form action='test2.php' method='post'><input type='hidden' name='h1' value='$cls'>
echo"<table border ='1' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor='white'>
<tr><th colspan=10><font size=15 color=black >Exam  Result</font></th></tr>
<tr><th>name</th><th>class</th><th>subject1</th><th>subject2</th><th>subject3</th></th><th>Exam</th><th>percentage</th></tr>";
$rownumber=1;
  while($row=$x->fetch_row())
  {
	  echo"<tr><td>$row[0]</td>
	  <td>$row[1]</td>
	  <td>$row[2]</td>
	  <td>$row[3]</td>
	  <td>$row[4]</td>
	  <td>$row[5]</td>
	  <td>$row[6]</td>
	 </tr>";
	 
  }  

 echo"</table>";
					}		
  ?>