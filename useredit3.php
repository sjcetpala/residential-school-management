<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>effective application form a Flat Responsive Widget Template :: w3layouts</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="effective application form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } 
function changeData()
		{
			document.getElementById("name").disabled=false;
			document.getElementById("class").disabled=false;
			document.getElementById("mail").disabled=false;
			document.getElementById("mob").disabled=false;
			document.getElementById("insti").disabled=false;
			document.getElementById("guardian").disabled=false;
			document.getElementById("adress").disabled=false;
			document.getElementById("line").disabled=false;
			document.getElementById("city").disabled=false;
			document.getElementById("zip").disabled=false;
				document.getElementById("option").disabled=false;
			document.getElementById("submit").style.display="block";
			document.getElementById("cancel").style.display="block";
		}
</script>
<!-- Meta tag Keywords -->
<link href="css/styleedit.css" rel="stylesheet" type="text/css" media="all"/><!--style_sheet-->
<link href="//fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"><!--online_fonts-->
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet"><!--online_fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><!--online_fonts-->
<style>
}
input[type=submit] {
    background-color: #876754;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	width:200px;
}
input[type=reset] {
    background-color: #ff4f81;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	width:200px;
}
input[type=button] {
    background-color: #ff4f81;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: right;
	width:150px;
	align:left;
}

input[type=submit]:hover {
    background-color: #455654;
}
input[type=reset]:hover {
    background-color: #455654;
}
input[type=button]:hover {
    background-color: #455654;
}
</style>
</head>
<body>
<h1>us<span>er</span><span>de</span>tai<span>ls - </span>edi<span>it</span></h1>
<div class="w3ls-main">
<div class="w3ls-form">
<?php
		           $uid=$_SESSION['mail'];
					
					$sql = "select * from reg_higher where mail='$uid'";
					
					$r= mysqli_query($con,$sql);
					$result=mysqli_fetch_assoc($r);
					?>
					<table>
<form action="#" method="post">
<ul class="fields"><tr><td>
	<div class="inputf_left" background="black">
							<input type="label" value="id>
					
						<div class="inputf_right">
							<input type="text" name="id" id="id" value="<?php echo $result['id']?>" required disabled/>
						</div>
						<div class="inputf_left">
						<input type="label" value="name">
						</div>
						<div class="inputf_right">
							<input type="text" name="name" id="name" value="<?php echo $result['name']?>" required disabled/>
						</div>
						</div>
						
						<div class="main-flex-w3ls-sectns">
						<div class="inputf_left">
						<input type="label" value="class">
						</div>
						<div class="inputf_right">
							<input type="text" name="class" id="class" value="<?php echo $result['class']?>" required disabled/>
						</div>
						<div class="inputf_left">
							<input type="label" value="dob">
						</div>
						<div class="inputf_right">
							<input type="text" name="dob" id="dob" value="<?php echo $result['dob']?>" required disabled/> 
						</div>
						</div>
					
						<div class="main-flex-w3ls-sectns">
						<div class="inputf_left">
							<input type="label" value="gender">
						</div>
						<div class="inputf_right">
						<input type="text" name="gender" id="gender" value="<?php echo $result['gender']?>" required disabled/>
						</div>
						<div class="inputf_left">
							<input type="label" value="religion">
						</div>
						<div class="inputf_right">
						<input type="text" name="religion" id="religion" value="<?php echo $result['religion']?>" required disabled/>
						</div>
						<div class="inputf_left">
							<input type="label" value="caste">
						</div>
						<div class="inputf_right">
						<input type="text" name="caste" id="caste" value="<?php echo $result['caste']?>" required disabled/>
						</div>
						<div class="inputf_left">
							<input type="label" value="mail">
						</div>
						<div class="inputf_right">
						<input type="text" name="mail" id="mail" value="<?php echo $result['mail']?>" required disabled/>
						</div>	
						<div class="inputf_left">
						<input type="label" value="mob">
						</div>
						<div class="inputf_right">
							<input type="text" name="mob" id="mob" value="<?php echo $result['mob']?>" required disabled/>
						<div class="inputf_left">
							<input type="label" value="instituition">
						</div>
						<div class="inputf_right">
						<input type="text" name="insti" id="insti" value="<?php echo $result['insti']?>" required disabled/></td><td></td>
						</div><div>
						<td><div class="inputf_left">
							<input type="label" value="guardian">
						</div>
						<div class="inputf_right">
						<input type="text" name="guardian" id="guardian" value="<?php echo $result['guardian']?>" required disabled/>
						</div>
						<div class="inputf_left">
							<input type="label" value="father">
						</div>
						<div class="inputf_right">
						<input type="text" name="father" id="father" value="<?php echo $result['father']?>" required disabled/>
						</div>
						<div class="inputf_left">
							<input type="label" value="mother">
						</div>
						<div class="inputf_right">
						<input type="text" name="mother" id="mother" value="<?php echo $result['mother']?>" required disabled/>
						</div>
						<div class="inputf_left">
							<input type="label" value="mark">
						</div>
						<div class="inputf_right">
						<input type="text" name="mark" id="mark" value="<?php echo $result['mark']?>" required disabled/>
						</div>
						</div>
					
						<div class="main-flex-w3ls-sectns">
						
						<div class="inputf_left">
							<input type="label" value="adress">
						</div>
						<div class="inputf_right">
						<input type="text" name="adress" id="adress" value="<?php echo $result['adress']?>" required disabled/>
						</div>
						</div>
					
						<div class="main-flex-w3ls-sectns">
						<div class="inputf_left">
								<input type="label" value="line">
						</div>
						<div class="inputf_right">
					<input type="text" name="line" id="line" value="<?php echo $result['line']?>" required disabled/> 
						</div>
				
					<div class="inputf_left">
								<input type="label" value="city">
						</div>
						<div class="inputf_right">
					<input type="text" name="city" id="city" value="<?php echo $result['city']?>" required disabled/>
						</div>
						</div>
						
						<div class="inputf_left">
								<input type="label" value="zip">
						</div>
						<div class="inputf_right">
					<input type="text" name="zip" id="zip" value="<?php echo $result['zip']?>" required disabled/>
						</div>
						<div class="inputf_left">
							<input type="label" value="roomstatus">
						</div>
						<div class="inputf_right">
						<input type="text" name="Room_status" id="Room_status" value="<?php echo $result['Room_status']?>" required disabled/>
						</div>
						<div class="inputf_left">
							<input type="label" value="option">
						</div>
						<div class="inputf_right">
						<input type="text" name="option" id="option" value="<?php echo $result['options']?>" required disabled/></td>
						</tr>
						
							<div class="clear"></div>
			<tr><td><input type="submit" value="Submit" name="submit" id="submit" style="display:none;"></td>
			<td><input type="reset" value="Clear Form" id="cancel" style="display:none;"></td>
			<div>
			<td><input type="button" value="Edit" onclick="changeData()"></td></tr>
						</div>
			<div class="clear"></div>
</form>
</div>
</div>
<?php
     if (isset ($_POST["submit"]))
	{
		include("connection.php");
		$name=$_POST["name"];
		$class=$_POST["class"];
		$mail=$_POST["mail"];
		$mob=$_POST["mob"];
		$insti=$_POST["insti"];
		$guardian=$_POST["guardian"];
		$adress=$_POST["adress"];
		$line=$_POST["line"];
		$city=$_POST["city"];
		$zip=$_POST["zip"];
		$option=$_POST["option"];
		
	$s= "update reg_higher set `name`='$name', `class`='$class',`mail`='$mail',`mob`='$mob',`insti`='$insti',`guardian`='$guardian',`adress`='$adress',`line`='$line',`city`='$city',`zip`='$zip',`options`='$option' where mail='$uid'";
			mysqli_query($con,$s);
			
			//$si= "INSERT INTO `result`(`cid`, `taluk`,cname) VALUES ('$id','$taluk','$name')";
			//mysqli_query($con,$si);
			
			echo $s;
			echo "success";
			
	}
?>

</body>
</html>