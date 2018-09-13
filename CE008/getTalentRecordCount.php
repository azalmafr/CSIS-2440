<?php
echo "<hr><br><h2>Record count</h2><hr>";
$query = "SELECT COUNT(*) FROM Talent;";

include 'queryResult.php';

while ($row = mysqli_fetch_array($return)) {
    echo "Number of records: " . $row[0]."<br>";
}
?>