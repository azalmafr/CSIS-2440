<?php // login.php
$host = "localhost";
$user = "root";
$password = "dbpass";

$con = mysqli_connect($host, $user, $password) or die (mysqli_error($con));

echo "successfully connected to $host<br>";

$db = "Library";

$db_selected = mysqli_select_db($con, $db) or die (mysqli_error($con));

echo "successfully connected and using database $db<br>";
?>