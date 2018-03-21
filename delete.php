​<?php
$con=mysqli_connect("localhost","root","","rsm_db");
	$x=$_GET['x'];
	$sql="delete from primaryy where name='$x';";
	mysqli_query($con,$sql);
	echo $sql;
//header("location:product_pending.php");
	
	//echo "<script>var confirm = confirm(\"Seller has been approved!\");
          //if(confirm){ 
              //window.location='product_pending.php';
           //}
		  // else{
			   //window.location='product_pending.php';
		 //  }
         // </script>";
	
	
?>​