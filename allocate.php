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
<html>
<head>
<title>Food Order Form a Responsive Widget Template :: w3layouts</title>
<link href="css/style0.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food Order Form Responsive, Login form web template, Sign up Web Templates,Profile widgets,Flat icon hover effects,Flat Registration Forms  Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!-- //end-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,600italic,700,300italic' rel='stylesheet' type='text/css'>
</head>
<body>
     <h1>Room availabilty form</h1>
		<div class="message warning">
			<div class="inset agile">
							<div class="sap_tabs w3ls-tabs">
							<h2>Alloting rooms</h2>
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
					<table>
					<tr><td>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>primary</span></li> </td>
						<td><li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><label>/</label><span>u.primary</span></li></td>
						<td><li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><label>/</label><span>secondary</span></li></td></tr>
						</table>
					</ul>	
					<div class="clear"> </div>
					<div class="alert-close"> </div> 
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-agileits-top"> 
								<form action="allocate1.php" method="post">
									<p>id</p>
									<select name="c1" id='c1'>
<?php
include("connection.php");
$s=mysqli_query($con,"select id from primaryy where Room_status='Nulll'");
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[0]</option>";
		}
			
			?>
			</select>
			<p>RoomNo</p>
									<select name="c2" id='c2'>
<?php
include("connection.php");
$s=mysqli_query($con,"select RoomNo from room where category='primary' and status<3");
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[0]</option>";
		}
			
			?>
			</select>

			<div> 
			<input type="submit" value="Allocate">
			</div>
		
		
		                              
								</form>  
							</div>
							 
						</div> 

						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="login-agileits-top"> 
								<form action="allocate2.php" method="post">
									<p>id</p>
									<select name="c1" id='c1'>
<?php
include("connection.php");
$s=mysqli_query($con,"select id from reg_up where Room_status='Nulll'");
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[0]</option>";
		}
			
			?>
			</select>
					<p>RoomNo</p>
									<select name="c2" id='c2'>
									
<?php
include("connection.php");
$s=mysqli_query($con,"select RoomNo from room where category='uprimary' and status<3");
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[0]</option>";
		}
			
			?>
			</select>
			<div> 
			<input type="submit" value="Allocate">
			</div>
		
			
		
		
		                              
								</form>  
							</div>  
							
							</div>
							
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="login-agileits-top"> 
								<form action="allocate3.php" method="post">
									<p>id</p>
									<select name="c1" id='c1'>
<?php
include("connection.php");
$s=mysqli_query($con,"select id from reg_higher where Room_status='Nulll'");
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[0]</option>";
		}
			
			?>
			</select>
					<p>RoomNo</p>
									<select name="c2" id='c2'>
									
<?php
include("connection.php");
$s=mysqli_query($con,"select RoomNo from room where category='higher' and status<3");
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[0]</option>";
		}
			
			?>
			</select>
			<div> 
			<input type="submit" value="Allocate">
			</div>
		
			
		
		
		                              
								</form>  
							</div>  
							
							</div>
						</div>
					</div>							
				</div>	 
	</div>	
	<div class="right-section-w3ls"></div>
			<div class="clear"> </div>

				</div>					
		</div>

	<div class="clear"> </div>
     <div class="copy-right w3l-agile">
		<p> © 2017 Food Order Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
<script type="text/javascript" src="js/jquery-2.1.4.min0.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script src="js/easyResponsiveTabs0.js" type="text/javascript"></script>
<!-- ResponsiveTabs js -->
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<!-- //ResponsiveTabs js -->					
</body>
</html>