<?php
/***
 * use_schema.php - for setting the schema/database to use for tables
 */
echo "<br>" . "use_schema.php" . "<br>";
$query = "USE $db;";

include 'queryResult.php';          /* include file to process $query statement */

echo "using database $db <br>";       /* message displayed if $query statement successful, otherwise error message returned from $query */
?>