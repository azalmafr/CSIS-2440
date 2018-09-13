<?php
$db = "Library";

$db_selected = mysqli_select_db($con, $db) or die (mysqli_error($con));

echo "successfully connected and using database $db<br>";
?>