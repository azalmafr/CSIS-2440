<?php

$host = "localhost";
$user = "root";
$password = "dbpass";

$con = mysqli_connect($host, $user, $password) or die (mysqli_error($con));

echo "successfully connected to $host<br>";
?>