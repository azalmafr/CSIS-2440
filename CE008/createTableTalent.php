<?php
//$use_schema = "USE Library;";
$tbl = "Talent";
$query = "CREATE TABLE $tbl ("
."First VARCHAR(15),"
."Last VARCHAR(25),"
."idTalent VARCHAR(15),"
."Image LONGBLOB,"
."Bio VARCHAR(400)"
.") ;";

include 'queryResult.php';

echo "successfully created table $tbl<br>";
?>