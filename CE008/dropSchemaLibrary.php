<?php
$db = "Library";
$query = "DROP DATABASE $db;";

include 'queryResult.php';
	
echo "successfully dropped database $db<br>";
?>