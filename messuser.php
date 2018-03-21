<?php
session_start();
include("connection.php");
?>
<html>

<head>
	<title>Stretch an Education Category Bootstrap responsive WebTemplate | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Stretch a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
</head>

<body>
	<!--Header-->
	<div class="top-bar_sub_w3layouts_agile">
		<h6>MAKE CREATIVITY A HABIT </h6>
		<div class="search">
			<!--<h5><a class="sign" href="#" data-toggle="modal" data-target="#myModal2">Student Login</a></h5>-->
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
				<!-- cd-header-buttons -->
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="header" id="home">

		<!--/top-bar-->
		<div class="top-bar">
			<div class="header-nav-agileits">

				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
						<h1><a class="navbar-brand" href="index.html">Stretch <span>Online Education</span></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="top_nav">
								<li><a href="index.html">Home</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Students<span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="view_primary.php">Primary</a></li>
										<li><a href="view_up.php">Upper primary</a></li>
										<li><a href="view_higher.php">higher secondary</a></li>
									</ul>
								</li>
								<li><a href="allocate.php">Room Allocation</a></li>
								<li><a href="staff.php">Staff Allocation</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Mess Bill<span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="mess1.php">Primary</a></li>
										<li><a href="mess1_up.php">Upper primary</a></li>
										<li><a href="mess1_higher.php">higher secondary</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Extra Class<span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="ccc2.php">Primary</a></li>
										<li><a href="mess1_up.php">Upper primary</a></li>
										<li><a href="mess1_higher.php">higher secondary</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</nav>

			</div>
		</div>

<?php
//session_start();
//include("connection.php");
                     $uid=$_SESSION['mail'];
					 //echo $uid;
					
					$sql = "select id from primaryy where mail='$uid'";
				
					$si= mysqli_query($con, $sql);
					if(mysqli_num_rows($si)>0)
					{
						
						$val=mysqli_fetch_assoc($si);
					
				
$s="SELECt count(*),`Status`,(datediff('2018-03-14','2018-03-13') - count(status))*150 bill from attendence group by `status` HAVING `status`='$val[id]'";
$x= mysqli_query($con, $s);
//echo $s;
//echo "<form action='test2.php' method='post'><input type='hidden' name='h1' value='$cls'>
echo"<table border ='1' cellspacing=3 width=80% height=80% align='center' style=margin:90px; bgcolor='white'>
<tr><th colspan=10><font size=15 color=black >Mess Bill</font></th></tr>
<tr><td>count1</td><td>Status</td><td>bill</td></tr>";
$rownumber=1;
  while($row=$x->fetch_row())
  {
	  echo"<tr><td>$row[0]</td>
	  <td>$row[1]</td>
	  <td>$row[2]</td>
	 </tr>";
	 
  }  

 echo"</table>";
					}		
  ?>
  
  
  <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!--//search-bar-->
	<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
	<script src="js/easyResponsiveTabs.js"></script>
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
		$(document).ready(function () {

			//Vertical Tab
			$('#parentVerticalTab').easyResponsiveTabs({
				type: 'vertical', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo2');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>
	<!--/script-->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>