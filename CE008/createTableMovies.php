<?php
//$use_schema = "USE Library;";
$tbl = "Movies";
$query = "CREATE TABLE $tbl ("
."Title VARCHAR(35),"
."Director VARCHAR(35),"
."Lead VARCHAR(35),"
."Genre VARCHAR(15),"
."Released VARCHAR(10),"
."Rating VARCHAR(10)"
.") ;";

include 'queryResult.php';

echo "successfully created table $tbl<br>";
?>