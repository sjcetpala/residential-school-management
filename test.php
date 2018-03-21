<?php
//include("connection.php");
//$cls=$_POST["c2"];
//$s=mysqli_query($con,"select name from primaryy where class='$cls'");
//echo "<table border ='1' cellspacing=3 width=40% height=80% align='center' style=margin:90px; bgcolor='pink'>
//<tr><th colspan=10><font size=15 color=black >Student List-Primary</font></th></tr>
//<tr><td>Name</td><td>Status</td></tr>";
//  while($row=$s->fetch_assoc())
  {
 // echo"<tr><td><input type='text' name='text1' value=".$row["name"]."></td><td><input type='checkbox' name='box' value='student'>yes<input type='checkbox' name='box' value='student'>No</tr><tr>";
  }  
 //  echo"<tr><td align='center'><form action='#' method='post'>
  // <input type='submit' name='save' value='Save'></td></tr>
  // </form>
  // </table>";

 
 //if (isset ($_POST["save"]))
	//{
		include("connection.php");
		//$cls=$_POST["c2"];\
		
	//	$name=$_POST["txtname"];
	$checkBox = implode(',', $_POST['Days']);

		//$status=$_POST["check"];
echo $checkBox;
	//	$regdate=date("Y")."-".date("m")."-".date("d");
		//$s= "insert into attendence(date,Name,Status) values('$regdate','$name','$status)";
		//mysqli_query($con,$s);
		//echo $s;
	
	?>