<?php
include("connection.php");
SELECt count(*),`Status`,count(*)*150 bill FROM attendence WHERE date BETWEEN '2018-03-10' AND '2018-03-14' group by `Status`
?>