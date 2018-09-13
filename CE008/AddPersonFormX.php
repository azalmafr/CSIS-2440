<html>
<head>
<meta charset="UTF-8">
<title>Add a Person</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<!-- 
<link rel="stylesheet" type="text/css" href="Taylor_view.css" media="all">
-->
</head>
<body>
<?php
$message = "";
require_once 'DataBaseConnection.php';
if (isset ( $_POST ['fname'] )) {
	$first = $_POST ['fname'];
	$second = $_POST ['lname'];
	$theID = $_POST ['idTalent'];
	$link = $_POST ['link'];
	$bio = $_POST ['bio'];
	// $insert = "INSERT INTO `Library`.`Talent` (`First`, `Last`, `idTalent`, `Bio`, `Image`) VALUES ('$first', '$second', '$theID', '$bio', '$link')";
	$insert = "INSERT INTO `Library`.`Talent` VALUES ('$first', '$second', '$theID', '$link', '$bio')";
	// Now we load the result of the query into a variable to make sure we succeeded.
	$success = mysqli_query ( $con, $insert );
	if ($success == FALSE) {
		$failmess = "Whole query " . $insert . "<br>";
		echo $failmess;
		die ( 'Invalid query: ' . mysqli_error ( $con ) );
	} else {
		$message = "insert complete";
	}
}
?>
<div id="form_container">
		<form action="AddPersonFormX.php" method="post">
			<label style="padding-right: 5px">First Name: </label> 
			<input name="fname" type="text"></br> 
			<label style="padding-right: 6px">Last Name: </label> 
			<input name="lname" type="text"></br> 
			<label style="padding-right: 30px" value="Talent">Talent:</label> 
			<select name="idTalent">
				<option value="Actor">Actor</option>
				<option value="Actress">Actress</option>
				<option value="Director">Director</option>
			</select> <br> 
			<label style="padding-right: 5px">Image link: </label>
			<input name="link" type="text"></br> 
			<label style="padding-right: 48px">Bio: </label>
			<textarea name="bio" type="text"></textarea>
			</br> <br> 
			<input type="submit" name="addPerson" value="Add Person"><br>
			<p>
				<a href="AddMovieFormX.php" target="_self">Return to AddMovieForm</a>
			</p>
		</form>
<?php
echo $message;
?>
</div>
</body>
</html>