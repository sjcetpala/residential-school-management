<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bright Error Page Widget a Flat Responsive Widget Template::w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bright Error Page Widget a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<!-- Meta tag Keywords -->
<link rel="stylesheet" href="css/attendence.css" type="text/css" media="all" /><!-- Style-CSS -->
<link rel="stylesheet" href="css/attendence1.css"><!--fontawesome-css-->
<!--online fonts-->
<link href="//fonts.googleapis.com/css?family=Forum" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
<!--//online fonts-->
<style>
			.div1{
				
		color:white;
		border-style: solid;
		<!--border-color: red;-->
	    width:90%;
		
		margin:100px 10px 0px 100px;
   	   
	}
	td{
		padding:9px;
		/* padding:10px 0px 10px 10px; */
	}
	
	h3{
		color:white;
		size:180%;
		font-variant: small-caps;
	}
	* {
    box-sizing: border-box;
}

input[type=text],select{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}
input[type=email]{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}

input[type=number]{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}
input[type=date]{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

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
    background-color: #876754;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	width:200px;
}

input[type=submit]:hover {
    background-color: #455654;
}
input[type=reset]:hover {
    background-color: #455654;
}

.
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
.table1{
	
	color:white;
	width:98%;
	padding:20px 0px 0px 60px;
}
	</style>
	</head>
	<body>
	<section class="main-agile">
<div class="error-agile">
		<div class="error-center">
			<h1>Staff Allocation</h1>
		</div>
	<form name="form1" action="staff2.php" method="post" enctype="multipart/form-data">
	
<div class="div1">
		
			
				<table class="table1" cellspacing="9" cellpadding="8">
				
				                    <td>select Staff:</td>
									<td><select name="c1" id='c1'>
									<?php
								
include("connection.php");
$s=mysqli_query($con,"select name from signup where usertype='2'");
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[0]</option>";
		}
			
			?>
			</select>
			
					
					
						<td>select Class:</td>
						<td><select name="c2">
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
							</select>
							
						   <td><input type="submit" name="save" value="Save"/></td>
						   </tr>
						   </table>
				</form>
						  
						   
				
				</body>
				</html>
			