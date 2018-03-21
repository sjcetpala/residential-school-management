
<?php
include("connection.php");

$x=$_POST["h1"];
echo $x;
      $checkBox = implode(',', $_POST['Days']);
	  echo $checkBox;
//	$checkBox = explode(',', $checkBox);


	//$pro=5;

$comp_proSplit= explode(",", $checkBox);

$cnt=count($comp_proSplit);
$regdate=date("Y")."-".date("m")."-".date("d");
for($i=0;$i<$cnt;$i++)
{
	
mysqli_query($con,"insert into attendence_higher(date,Status,class)values('$regdate', '$comp_proSplit[$i]','$x')");
}
?>	
	
	
	
	/*$cnt=count($checkBox);

for($i=0;$i<$cnt;$i++)
{
$regdate=date("Y")."-".date("m")."-".date("d");
$s= "insert into attendence(date,Status)values('$regdate', '$checkBox[$i]')";*/
