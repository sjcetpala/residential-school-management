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
			<h1 align="center">Extra Class Alotting</h1>
		</div>

<form name="form1" action="allot.php" method="post" enctype="multipart/form-data">
	
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