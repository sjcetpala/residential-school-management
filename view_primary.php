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
	width:260px;
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
	width:80%;
	padding:20px 0px 0px 60px;
}
</style>
	</head>
	<body>
	<section class="main-agile">
<div class="error-agile">
		<div class="error-center">
			<h1 align="center">Student  Profile View</h1>
		</div>

<form name="form1" action="#" method="post" enctype="multipart/form-data">
	
<div class="div1">
		
			
				<table class="table1" cellspacing="9" cellpadding="8">
					
					<tr>
						<td>Selecet Class<td>
						<td><select name="c2">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option></td>
							</select>
							
						   <td><input type="submit" name="save" value="Save"/></td>
						   </tr>
						    </table>
				</form>
						  
						  

<?php
if (isset ($_POST["save"]))
{
$cls=$_POST["c2"];
include("connection.php");
$s="select * from primaryy where class='$cls'";
$res=mysqli_query($con,$s);
echo "<table border ='1' cellspacing=2 width=80% height=80% align='center' style=margin:90px; bgcolor=white>
<tr><th colspan=12><font size=15 color=black >Student List</font></th></tr>
<tr><th>Name</th><th>class</th><th>dob</th><th>gender</th><th>religion</th><th>caste</th><th>mail</th><th>mob</th><th>insti</th><th>guardian</th><th>father</th><th>mother</th><th>adress</th><th>line</th><th>city</th><th>zip</th><th>Room status</th><th>Reject</tr>";
  while($row=mysqli_fetch_array($res))
  {
	  $x=$row["mail"];
	  echo $x;
  echo"<tr><td>".$row["name"]."</td><td>".$row["class"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["religion"]."</td><td>".$row["caste"]."</td><td>".$row["mail"]."</td><td>".$row["mob"]."</td><td>".$row["insti"]."</td><td>".$row["guardian"]."</td><td>".$row["father"]."</td><td>".$row["mother"]."</td><td>".$row["adress"]."</td><td>".$row["line"]."</td><td>".$row["city"]."</td><td>".$row["zip"]."</td><td>".$row["Room_status"]."</td><td><form method='post' action='deletee.php'><input type='hidden' name='h2' value='$x'><input type='submit' name='Delete' value='Delete'></form></tr>";	  
   }
  echo"</table>";
}

?>
header("Location: admin_page2.php");
	</body>
</html>