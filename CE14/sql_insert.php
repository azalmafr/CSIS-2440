<?php

$query = \file_get_contents('createTable.sql');

include 'queryResult.php';          /* include file to process $query statement */

echo "<hr><br><h2>Table created</h2><hr>";       /* display heading */

$query = \file_get_contents('insertTable.sql');

include 'queryResult.php';          /* include file to process $query statement */

echo "<hr><br><h2>Records inserted</h2><hr>";       /* display heading */