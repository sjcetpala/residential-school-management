
<?php
session_start();
include ("connection.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
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
input[type=button] {
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
	width:76%;
	padding:20px 0px 0px 60px;
}
	</style>	

</head>

<body>
<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		function changeData()
		{
			
			document.getElementById("save").style.display="block";
			document.getElementById("cancel").style.display="block";
			document.getElementById("time").style.display="block";
		}
	</script>
					<?php
					$cls=$_POST["c2"];
					echo $cls;
					$s="SELECT name,class,subject1,subject2,subject3,(( subject1 + subject2 + subject3)/(95*3) * 100) AS percentage FROM `invoice` where class='$cls'";
                    $res=mysqli_query($con,$s);
					while($result=mysqli_fetch_assoc($res))
					{
					?>
					
					<form action="extraclass2.php" method="post">
					<table>
					<div>
					<tr>
					<td>
					
					    <input type="label" value="Name">
						
					    <input type="text" name="name"  value="<?php echo $result['name']?>"></td>
						<td>
						<input type="label" value="Class">
							<input type="text" name="class"  value="<?php echo $result['class']?>"></td>
						
							<td>
							<input type="label" value="Subject1">
							<input type="text" name="subject1"  value="<?php echo $result['subject1']?>"></td>
						
							<td><input type="label" value="Subject2">
							<input type="text" name="subject2"  value="<?php echo $result['subject2']?>"></td>
						<td>
						<input type="label" value="Subject3">
							<input type="text" name="subject3"  value="<?php echo $result['subject3']?>"></td>
						<td>
						<input type="label" value="Percentage">
							<input type="text" name="percentage"  value="<?php echo $result['percentage']?>"></td>
							</div>
							<td>
							</tr>
							</table>
							<table>
							<div>
							<td><input type="button" value="Allot" onclick="changeData()"></td>
					        <td><input type="submit" value="Save" id="save" style="display:none;"></td>
							<td><input type="reset" value="Cancel" id="cancel" style="display:none;"></td>
							<td><input id="time" name="timee" type="time" style="display:none;"></td>
							</div>
							</table>
						    </form>
					        <?php
							}
					        ?>
					
						
					</body>
					</html>