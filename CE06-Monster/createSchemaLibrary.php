<?php
/*
 * createSchemaLibrary.php - used to create schema/database
 */
$query = "CREATE DATABASE $db;";    /* variable $query to hold SQL statement */

include 'queryResult.php';          /* include file to process $query statement */
            
echo "database $db successfully created <br>";       /* message displayed if $query statement successful, otherwise error message returned from $query */
?>