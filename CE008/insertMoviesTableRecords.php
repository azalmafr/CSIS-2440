<?php
$newAuth = array(
    array('Jaws', 'Steven Spielberg', 'Roy Scheider', 'Suspense', '1975-06-20', '5'),
	array('Bullitt', 'Peter Yates', 'Steve McQueen', 'Action', '1968-10-17', '5'),
	array('Gran Torino', 'Clint Eastwood', 'Clint Eastwood', 'Drama', '2008-12-09', '3'),
	array('Million Dollar Baby', 'Clint Eastwood', 'Clint Eastwood', 'Drama', '2004-12-15', '4'),
	array('The French Connection', 'William Friedkin', 'Gene Hackman', 'Drama', '1971-10-09', '3'),
	array('Casablanca', 'Michael Curtiz', 'Humphrey Bogart', 'Romance', '1943-01-23', '5')
);
//print_r($newAuth);
echo "<hr><br><h2>Records inserted</h2><hr>";
foreach ($newAuth as $insertArray) {

    $query = "INSERT INTO `Library`.`Movies` (`Title`, `Director`, `Lead`, `Genre`, `Released`, `Rating`) "
            . "VALUES ('$insertArray[0]', '$insertArray[1]', '$insertArray[2]', '$insertArray[3]', '$insertArray[4]', '$insertArray[5]');";
    include 'queryResult.php';

    echo "$insertArray[0] was added<br>";
    
}
?>
