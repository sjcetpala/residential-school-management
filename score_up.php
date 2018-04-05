<?php
session_start();
include ("connection.php");
if(isset($_POST["btnExamSave"]))
	$_SESSION['exam']=$_POST["c1"];
	echo $_SESSION['exam'];
?>
<form method="post">
	<table>
		<tr>
			select Class:
				<select name="c2">
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
                    <option>9</option>
                    <option>10</option>					
				</select>					
			<td>
				<input type="submit" name="view" value="Saveeeeee"/>
			</td>						   
		</tr>	
		<tr>
			<td>
	
<?php
	if(isset($_POST["view"]))
	{
		$cls=$_POST["c2"];
		echo "class is $cls";
		$sname=mysqli_query($con,"select * from reg_up where class='$cls'");
		$qq="select * from reg_up where class='$cls'";
		echo $qq;
		
		while($nm=mysqli_fetch_assoc($sname))
			{	
?>
				<br/>
				<input type="hidden" value="<?php echo $cls;?>" name="cls[]">
                <input type="text" value="<?php echo $nm['name']?>" name="txt1[]">
				<input type="text" value="<?php echo $nm['id']?>" name="id[]">
				<input type="hidden" value="<?php echo $_SESSION['exam'];?>" name="exam[]">
                <input type="text" name="subject1[]" />
                <input type="text" name="subject2[]" />
                <input type="text" name="subject3[]" /> 
				<input type="text" name="subject4[]" /> 
				<input type="text" name="subject5[]" /> 
				<input type="text" name="subject6[]" /> 
				<br/> 		
<?php
 }
 }
?>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" id="save" name="save" value="Save" />
			</td>
		</tr> 
	</table>	
<?php
if(isset($_POST['save']))
{
	
$a=mysqli_query($con,"select count(upper_primary) from subject_count");
$b=mysqli_fetch_assoc($a);
$itemCount=$b['count(upper_primary)'];
echo $itemCount;
//$itemCount = count($_POST["subject1"]);
$itemValues=0;
$query = "INSERT INTO invoice(sid,name,subject1,subject2,subject3,subject4,subject5,subject6,class,exam) VALUES ";
$queryValue = "";
for($i=0;$i<$itemCount;$i++) 
{	
    if( !empty($_POST["id"][$i]) || !empty($_POST["txt1"][$i]) || !empty($_POST["subject1"][$i]) || !empty($_POST["subject2"][$i]) || !empty($_POST["subject3"][$i]) || !empty($_POST["subject4"][$i]) || !empty($_POST["subject5"][$i]) || !empty($_POST["subject6"][$i]) || !empty($_POST["cls"][$i]) || !  empty($_POST["exam"][$i])) 
	{
        $itemValues++;
        if($queryValue!="") 
		{
            $queryValue .= ",";
        }

        $queryValue .= "( '" . $_POST["id"][$i] . "','" . $_POST["txt1"][$i] . "','" . $_POST["subject1"][$i] . "', '" . $_POST["subject2"][$i] . "', '" . $_POST["subject3"][$i] . "','" . $_POST["subject4"][$i] . "','" . $_POST["subject5"][$i] . "','" . $_POST["subject6"][$i] . "', '" . $_POST["cls"][$i] . "', '" . $_POST["exam"][$i] . "' )";
    }
$sql = $query.$queryValue;
if($itemValues!=0) 
	{
	echo $sql;
    $result = mysqli_query($con,$sql);
	$queryValue = "";
    if(!empty($result)) 
		$message = "Added Successfully.";
	
	}
}
}
?>
</form>
<SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
<script>
    function addMore() {
        $("").load("input.php", function() {
            $("#product").append($(this).html());
        });
    }
    function deleteRow() {
        $('DIV.product-item').each(function(index, item){
            jQuery(':checkbox', this).each(function () {
                if ($(this).is(':checked')) {
                    $(item).remove();
                }
            });
        });
    }
</script>


