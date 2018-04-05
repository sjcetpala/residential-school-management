<?php
session_start();
include("connection.php");
$cash3=$_POST['h2'];
$uid=$_SESSION['mail'];
$name=$_POST["name"];
echo $name;
$number=$_POST["number"];
$amount=$_POST["amount"];
$x="select mess from account where mess!='null'";
$y=mysqli_query($con,$x);
$row = mysqli_fetch_array($y);
$pay = $row['mess'];
$final=$pay + $amount;
$m="update account set mess='$final'";
mysqli_query($con,$m);
$sql = "select id from primaryy where mail='$uid'";
$si= mysqli_query($con, $sql);
if(mysqli_num_rows($si)>0)
{
	$val=mysqli_fetch_assoc($si); 
	//echo "<br />". $amount. "<br />".$cash3."<br />"
	//echo $cash3;
   if(trim($amount) == trim($cash3))
		{
		   echo "hello";
		   echo trim($cash3);
		    //echo "hello";
		   $up="update mess set paymentstatus='paid' where status='$val[id]' AND bill=trim($cash3);";
		   $s=mysqli_query($con,$up);
		}
	else
		{
		$upp="update mess set paymentstatus='pending' where status='$val[id]' AND bill=trim($cash3)";
  $ss=mysqli_query($con,$upp);
  $sqq = "select id from primaryy where mail='$uid'";
  $snn= mysqli_query($con, $sqq);
  if(mysqli_num_rows($snn)>0)
	{
  $xx="select bill from mess where status='$val[id]'";
  $pp=mysqli_query($con,$xx);
  $roww = mysqli_fetch_assoc($pp);
  $payy = $roww['bill'];
 $finall=$payy - $amount;

$mm="update mess set bill='$finall' where status='$val[id]' AND bill=trim($cash3)";
mysqli_query($con,$mm);
				 
}
}
}
					
$sq = "select id from primaryy where mail='$uid'";
$sn= mysqli_query($con, $sq);
if(mysqli_num_rows($sn)>0)
{
						
while($row=mysqli_fetch_array($sn))		
{
 $id=$row[0];
$paydate=date("Y")."-".date("m")."-".date("d");
mysqli_query($con,"insert into acnt_status(sid,amount,date)values( '$id','$amount','$paydate')");
}
}
?>