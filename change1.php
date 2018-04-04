<?php
session_start();
include("connection.php");
/*$_SESSION["billFrom"]=$_POST["datee"];
 $date=$_POST["datee"];
$_SESSION["billTo"]=$_POST["date2"];
 $date1=$_POST["date2"];
//echo $date1;*/

?>
 <form method="post">
<table>
<tr>
<td>select Class:</td>
						<td><select name="c2" id="c2">
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
							</select></td></tr>
							
							<td><select name="c1" id="c1">
							<option>1st Terminal</option>
							<option>2nd Terminal</option>
							<option>3rd Terminal</option>
							</tr>
							
							<tr>
							<td><input type="submit" name="save" value="Save"/></td></tr>
							
							<?php
	if(isset($_POST["save"]))
	{
                $cls=$_POST["c2"];
				echo "<script>document.getElementById('c2').value=$cls;</script>";
$exm=$_POST["c1"];
echo $cls;
echo $exm;
include("connection.php");
$qry="SELECT sid,subject1 from invoice where subject1 <='30' AND class='$cls'";
$s=mysqli_query($con,$qry);
echo"<table border ='1' cellspacing=3 width=70% height=80% align='center' style=margin:90px; bgcolor='white'>
<tr><th colspan=10><font size=15 color=black >extra class</font></th></tr>
<tr><td>sid</td><td>subject1</td><td>class</td></tr>";
$counter=0;
								if(mysqli_num_rows($s)>0){
											
									while($row=$s->fetch_assoc())
									{									
									?>
									<tr>
										<td> <?php echo $row["sid"]; ?>
											<input type ='hidden' value=' <?php echo $row["sid"]; ?>' />
										</td>
										<td> <?php echo $row["subject1"]; ?>
											<input type ='hidden' value=' <?php echo $row["subject1"] ?> '/>
										</td>
											<input type ='hidden' value=' <?php echo $cls ?> '/>
										</td>
										</tr>";
										<?php 
									$counter++;
									
									$cnt=$row['sid'];
									$sub=$row['subject1'];
									$clss=$cls;
									$att="insert into extra(`sid`,`subject`,`class`) values ('$cnt','$sub','$clss')";
										$x=mysqli_query($con,$att);
									}
									}
	                                }
									
									?> 
									</table>
									
									<tr>
									<td>
									<td><input type="submit" name="save2" value="Save2"/></td></tr>
<?php
	if(isset($_POST["save2"]))
	{
		$cls=$_POST["c2"];
		echo"<script>document.getElementById('c2').value=$cls;</script>";

$exm=$_POST["c1"];
echo $cls;

$qry="SELECT sid,subject2 from invoice where subject1 <='30' AND class='$cls'";
$s=mysqli_query($con,$qry);
echo"<table border ='1' cellspacing=3 width=70% height=80% align='center' style=margin:90px; bgcolor='white'>
<tr><th colspan=10><font size=15 color=black >extra class</font></th></tr>
<tr><td>sid</td><td>subject1</td></tr>";
$counter=0;
								if(mysqli_num_rows($s)>0){
											
									while($row=$s->fetch_assoc())
									{									
									?>
									<tr>
										<td> <?php echo $row["sid"]; ?>
											<input type ='hidden' value=' <?php echo $row["sid"]; ?>' />
										</td>
										<td> <?php echo $row["subject2"]; ?>
											<input type ='hidden' value=' <?php echo $row["subject2"] ?> '/>
										</td>
										</tr>
										<?php
									}
									}
	                                }
									?> 
									</table>
									  </form>
	
									