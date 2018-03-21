
<?php

include('connection.php');

if(isset($_POST['save']))

{

$itemCount = count($_POST["item_name"]);

$itemValues=0;


$query = "INSERT INTO invoice (name,description,quantity) VALUES ";

$queryValue = "";

for($i=0;$i<$itemCount;$i++) {



    if(!empty($_POST["item_name"][$i]) || !empty($_POST["item_price"][$i]) || !empty($_POST["quantity"][$i])) {

        $itemValues++;

        if($queryValue!="") {

            $queryValue .= ",";

        }

        $queryValue .= "('" . $_POST["item_name"][$i] . "', '" . $_POST["item_price"][$i] . "', '" . $_POST["quantity"][$i] . "')";

    }

}

$sql = $query.$queryValue;

if($itemValues!=0) {
echo $sql;
 //   $result = mysql_query($sql);

    if(!empty($result)) $message = "Added Successfully.";



}



}

?>





<form name="frmProduct" method="post" action="">







    <input type="button" name="add_item" value="Add More" onClick="addMore();" />
    <input type="button" name="del_item" value="Delete" onClick="deleteRow();" />



        <input type="submit" id="save" name="save" value="Save" />
<?php
 for($i=0;$i<5;$i++)
 {
?>
<br/>
<input type="checkbox" name="item_index[]" /> 
                <input type="text" name="item_name[]" />
                <input type="text" name="item_price[]" />
                <input type="text" name="quantity[]" /> <br/>
				
<?php
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


