<?php
echo "hello<br>";
$return = mysqli_query($con, $query) or die (mysqli_error($db));
echo $return;
echo "goodbye<br>";
?>