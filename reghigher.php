<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Education Admission Form Responsive Widget Template :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Education Admission Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/style5.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<link rel="stylesheet" href="css/font-awesome5.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web font -->
</head>

<body>
	<!-- main -->
	<div class="main-agileits">
		<h1>Education Admission Form
			<img src="images/logo.png" alt="">
		</h1>
		<div class="register-form">
			<form action="#" method="post">
				<div class="fields-grid">
				<div class="styled-input">
						<!--<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" placeholder="id" name="id" required="">
					</div>-->
				<div class="styled-input">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" placeholder="Name" name="name" required="">
					</div>
					
					<div class="styled-input">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" placeholder="Class  to which admission is sought" name="class" required="">
					</div>
					
					<div class="styled-input">
						<span class="fa fa-calendar" aria-hidden="true"></span>
						<input id="datepicker" placeholder="Birth Date" name="dob" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
						    required="">
					</div>
					<div class="styled-input agile-styled-input-top">
						<span class="fa fa-venus" aria-hidden="true" ></span>
						<label class="header">Gender</label><br>
						 <input type="radio" name="gender" value="male"> Male<br>
                         <input type="radio" name="gender" value="female"> Female<br>
                         <input type="radio" name="gender" value="other"> Other
					</div>
					<div class="styled-input">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" placeholder="religion" name="religion" required="">
					</div>
					
					<!--<div class="styled-input agile-styled-input-top">
						
						
						<table>
						<span class="fa fa-venus" aria-hidden="true" ></span>
						<tr bgcolor="white">
						Options select</tr>
						<tr>
						<td>
						<input type="radio" name="opt1" value="male"> Science<br>
                           <label for="username">English</label><br>
						   <label for="username">Chmestry</label><br>
						   <label for="username">physics</label><br>
						   <label for="username">maths</label><br></td>
						   <td>
						   <input type="radio" name="opt2" value="male"> Commerce<br>
                           <label for="username">Economy</label><br>
						   <label for="username">Accountancy</label><br>
						   <label for="username">Business</label><br>
						   <label for="username">maths</label><br></td>
                           
						   </tr>
						   </table>
					</div>-->
					<div class="styled-input">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" placeholder="Caste" name="caste" required="">
					</div>
					<div class="styled-input">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
						<input type="email" placeholder="Your E-mail" name="email" required="">
					</div>
					<div class="styled-input">
						<span class="fa fa-phone" aria-hidden="true"></span>
						<input type="text" placeholder="Phone Number" name="mob" required="">
					</div>
					<div class="styled-input">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" placeholder="Institution last studied" name="insti" required="">
					</div>
					<div class="styled-input-2">
				<label class="header">Parent legal Guardian Information</label>
					<div class="styled-input">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" placeholder="Guardian Name" name="gname" required="">
					</div>
					<div class="styled-input">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" placeholder="Father name" name="fname" required="">
					</div>
					<div class="styled-input">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" placeholder="Mother Name" name="mname" required="">
					</div>
					</div>
					<div class="styled-input">
						<span class="fa fa-book" aria-hidden="true"></span>
						<input type="text" placeholder="Mark otained in 10th" name="mark" required="">
					</div>
					
					
					<!--<div class="styled-input agile-styled-input-top">
						<span class="fa fa-book" aria-hidden="true"></span>
						<select class="category2" required="">
							<option value="">Select Course</option>
							<option value="">Web Designing</option>
							<option value="">Web Technology </option>
							<option value="">PC Systems </option>
							<option value="">IT Foundations </option>
							<option value="">HR Management </option>
							<option value="">Modeling </option>
							<option value="">Basic Marketing</option>
						</select>
					</div>
					<div class="styled-input">
						<div class="agileits_w3layouts_grid">
							<span class="fa fa-clock-o" aria-hidden="true"></span>
							<select class="category2" name="category1" required="">
								<option value="">Select Course Time</option>
								<option value="">Hours: 8am to 10am</option>
								<option value="">Hours: 10am to 12pm</option>
								<option value="">Hours: 12pm to 4pm</option>
								<option value="">Hours: 4pm to 7pm</option>
								<option value="">Hours: 7pm to 9pm</option>
							</select>
						</div>
					</div>-->
					<div class="styled-input-2">
						<label class="header">Your Address</label>
						<div class="styled-input">
							<input type="text" name="adress" placeholder="Address" title="Please enter your Address" required="">
						</div>
						<div class="styled-input">
							<input type="text" name="line" placeholder="Line" title="Please enter your Line" required="">
						</div>
						<div class="styled-input">
							<input type="text" name="city" placeholder="City" title="Please enter your City" required="">
						</div>
						<div class="styled-input">
							<input type="text" name="zip" placeholder="Zip Code" title="Please enter your Zip code" required="">
						</div>
					</div>-->
					<div class="styled-input-2">
					<label class="header">Option for Subjects</label>
					<table>
						<!--<span class="fa fa-venus" aria-hidden="true" ></span>-->
						
						<tr>
						<td>
						<div class="styled-input">
						<input type="radio" name="options" value="science"> Science<br>
                           <label for="username">English</label><br>
						   <label for="username">Chmestry</label><br>
						   <label for="username">physics</label><br>
						   <label for="username">maths</label><br></td></div>
						  
						   <td>
						    <div class="styled-input">
						   <input type="radio" name="options" value="commerce"> Commerce<br>
                           <label for="username">Economy</label><br>
						   <label for="username">Accountancy</label><br>
						   <label for="username">Business</label><br>
						   <label for="username">maths</label><br></td></div>
						   <td>
						    <div class="styled-input">
						   <input type="radio" name="options" value="humanities"> Humanities<br>
                           <label for="username">Economy</label><br>
						   <label for="username">Accountancy</label><br>
						   <label for="username">Business</label><br>
						   <label for="username">maths</label><br></td></div>
                           
						   </tr>
						   </table>
					</div>
					<div class="clear"> </div>
				</div>
				<input type="submit" value="Submit" name="submit">
			</form>
		</div>
	</div>
    <?php
     if (isset ($_POST["submit"]))
	{
		include("connection.php");
		$name=$_POST["name"];
		$class=$_POST["class"];
		$dob=$_POST["dob"];
		$gender=$_POST["gender"];
		$religion=$_POST["religion"];
		$caste=$_POST["caste"];
		$mail=$_POST["email"];
		$mob=$_POST["mob"];
		$insti=$_POST["insti"];
		$guardian=$_POST["gname"];
		$father=$_POST["fname"];
		$mother=$_POST["mname"];
		$mark=$_POST["mark"];
		$adress=$_POST["adress"];
		$line=$_POST["line"];
		$city=$_POST["city"];
		$zip=$_POST["zip"];
		$opt1=$_POST["options"];
		$room="Nulll";
		
		
	$s= "INSERT INTO `reg_higher`( `name`, `class`, `dob`, `gender`, `religion`, `caste`, `mail`, `mob`, `insti`, `guardian`, `father`, `mother`, `mark`, `adress`, `line`, `city`, `zip`, `options`,`Room_status`) VALUES ('$name','$class','$dob','$gender','$religion','$caste','$mail','$mob','$insti','$guardian','$father','$mother','$mark','$adress','$line','$city','$zip','$opt1','$room')";
			mysqli_query($con,$s);
			
			//$si= "INSERT INTO `result`(`cid`, `taluk`,cname) VALUES ('$id','$taluk','$name')";
			//mysqli_query($con,$si);
			
			echo $s;
			echo "success";
			
	}
?>
	<!-- //main -->
	<!-- copyright -->
	<div class="w3copyright-agile">
		<h2>© 2018 Education Admission Form. All rights reserved | Design by
			<a href="http://w3layouts.com/" target="_blank">W3layouts</a>
		</h2>
	</div>
	<!-- //copyright -->

	<!-- js -->
	<script src="js/jquery-2.1.4.min5.js"></script>

	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui5.css" />
	<script src="js/jquery-ui5.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

</body>

</html>