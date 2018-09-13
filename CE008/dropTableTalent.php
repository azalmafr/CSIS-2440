<?php
//$use_schema = "USE Library;";
$tbl = "Talent";
$query = "DROP TABLE $tbl;";

include 'queryResult.php';
	
echo "successfully dropped table $tbl<br>";
?>