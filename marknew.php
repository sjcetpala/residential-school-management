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
	width:78%;
	padding:20px 0px 0px 60px;
}
	</style>
	</head>
	<body>
	<section class="main-agile">
<div class="error-agile">
		<div class="error-center">
			<h1>Student Mark</h1>
		</div>
	<form name="form1" action="#" method="post" enctype="multipart/form-data">
	
<div class="div1">
		
			
				<table class="table1" cellspacing="6" cellpadding="6">
					<tr>
						
						<td>select Class:
						<select name="c1">
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
							</td>
                       
						   <td><input type="submit" name="save" value="Save"></td>
						  
						   
						   <?php
						   include("connection.php");
$sid=$_POST["c1"];
$s=mysqli_query($con,"select name from primaryy where class=$sid ");
echo "<table border ='0' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><th colspan=12><font size=15 color=white >Student Mark</font></th></tr>
<tr><th>Name</th><th>Mark</th></tr>";
  while($row=$s->fetch_assoc())
  {
  echo"<tr><td>".$row["name"]."</td><td><input type='text' name='txt1'></td></tr>";	 
   }
  echo"</table>";
 
  ?>
	</body>
</html>
							
					
						<!--<td></td><td></td>
						<td>Permanent Address:</td>
						<td><textarea rows="4" name="txtaddress" cols="50"></textarea></td>
					</tr>
					<tr>
						<td>Class of Vehicle:</td>
						<td><select name="class">
							<option>Two wheeler</option>
							<option>Four wheeler</option>
							<option>Three wheeler</option></td>
							<td></td>
						<td colspan="2">Sex:</td>
						<td><input type="radio" name="sex" value="m" checked/>Male<input type="radio" name="sex" value="f"/>Female</td>
					</tr>
					<tr>
						<td>Dealer:</td>
						<td><input type="text" name="txtdealer"/></td>
						<td></td><td></td>
						<td>Date of Birth:</td>
						<td><input type="date" name="dob" placeholder="dd/mm/yyyy"/></td>
					</tr>
					<tr>
						<td>Vehicle name:</td>
						<td><input type="text" name="txtvname"/></td>
						<td></td><td></td>
						<td>Age:</td>
						<td><input type="text" name="txtage"/>ys</td>
					</tr>
					<tr>
						<td>Manufactured date:</td>
						<td><input type="date" name="mdate"/></td>
						<td></td><td></td>
						<td>Adhaar No::</td>
						<td><input type="text" name="txtadhaar"/></td>
					</tr>
					<tr>
						<td>HP:</td>
						<td><input type="text" name="txthp"/></td>
						<td></td><td></td>
						<td>ID proof:</td>
						<td><input type="file" name="file"></td>
					</tr>
					<tr>
						<td>Chassis No:</td>
						<td><input type="text" name="txtchassisno"/></td>
						<td></td><td></td>
						<td>Passport Size Photo:</td>
						<td><input type="file" name="fileimg"/></td>
					</tr>
					<tr>
						<td>Engine No:</td>
						<td><input type="text" name="txtengineno"/></td>
					</tr>
					<tr>
						<td>Fuel:</td>
						<td><input type="text" name="txtfuel"/></td>
					</tr>
					<tr>
						<td>Color:</td>
						<td><input type="text" name="txtcolor"/></td>
					</tr>
					<tr>
						<td>Length:</td>
						<td><input type="text" name="txtlength"/></td>
						<td></td><td></td>
						<td><input type="submit" name="save" value="Save"/></td>
						<td><input type="reset" name="reset" value="Reset"/></td>
					</tr>
					<tr>
						<td>Width:</td>
						<td><input type="text" name="txtwidth"/></td>
					</tr>
					<tr>
						<td>Height:</td>
						<td><input type="text" name="txtheight"/></td>
					</tr>
					<tr>
						<td>Tyre size:</td>
						<td><input type="text" name="txttyresize"/></td>
					</tr>-->
				