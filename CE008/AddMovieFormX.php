<html>
<head>
<meta charset="UTF-8">
<title>Add a Movie</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">

<link rel="stylesheet" type="text/css" href="Taylor_view.css" media="all">

</head>
<body>
<?php
require_once 'DataBaseConnection.php';
$select = "SELECT * FROM Library.Talent order by Last, First";
if (isset ( $_POST ['addMovie'] )) {
	$title = $_POST ['mname'];
	$date = $_POST ['year'] . "-" . $_POST ['month'] . "-" . $_POST ['day'];
	$director = $_POST ['Director'];
	$lead = $_POST ['Lead'];
	$genre = $_POST ['Genre'];
	$rating = $_POST ['Rating'];
	//INSERT INTO `Library`.`Movies` (`Title`, `Director`, `Lead`, `Genre`, `Released`, `Rating`) VALUES ('Jaws', '1', '5', 'action', '1975-06-01', '5')
	//$insert = "INSERT INTO `Library`.`Movies` (`Title`, `Director`, `Lead`, `Genre`, `Released`) "
	// . "VALUES ('$title', '$director', '$actor', '$genre', '$date', $rating)";
	$insert = "INSERT INTO `Library`.`Movies` VALUES ('$title', '$director', '$lead', '$genre', '$date', $rating)";
	// echo "Adding movie record<br>";
	// echo $insert;
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
		<p>
		
		
	<form action="AddMovieFormX.php" method="post">
		<label style="padding-right: 40px">Movie Name:</label> 
		<input name="mname" type="text" id="textfield"> <br> 
		<label style="padding-right: 65px">Director:</label> 
		<select name="Director" style="width: 200px">
<?php
$return = mysqli_query ( $con, $select );
if (! $return) { // here we check to see if we got a result set
	$message = "Whole query " . $select;
	echo $message;
	die ( 'Invalid query: ' . mysqli_error ( $con ) );
}
while ( $row = mysqli_fetch_array ( $return ) ) { // here we are loading the results into the variable row one at a time and printing out the row
	$fname = $row ['First']; // you will not we have to use the column names in the database
	$lname = $row ['Last'];
	$director = "$fname $lname";
	$theID = $row ['idTalent'];
	if ($theID == 'Director') {
		echo "<option value = '$director'>$director</option>";
	}
	// echo "<option value = '$theID'>$fname $lname</option>";
}
// echo "<option value = >$fname $lname</option>";
// $director = $fname . " " . $lname;
?>
</select> <a target="_self" href="AddPersonFormX.php"> Director not listed</a><br> 
<label style="padding-right: 3px">Lead Actor/Actress:</label>
<select name="Lead">
<?php
$return = mysqli_query ( $con, $select );
if (! $return) { // here we check to see if we got a result set
	$message = "Whole query " . $select;
	echo $message;
	die ( 'Invalid query: ' . mysqli_error ( $con ) );
}
while ( $row = mysqli_fetch_array ( $return ) ) { // here we are loading the results into the variable row one at a time and printing out the row
	$fname = $row ['First']; // you will not we have to use the collum names in the database
	$lname = $row ['Last'];
	$lead = "$fname $lname";
	$theID = $row ['idTalent'];
	if ($theID == 'Actor') {
		echo "<option value = '$lead'>$lead</option>";
	}
	// echo "<option value = '$theID'>$fname $lname</option>";
}
// echo "<option value = >$fname $lname</option>";
// $actor = $fname . " " . $lname;
?>
</select> <a target="_self" href="AddPersonFormX.php"> Actor/Actress not listed</a><br> 
	<label style="padding-right: 35px">Release Date:</label>
	<input type="text" name="year" placeholder="yyyy" maxlength="4" size="4" style="width: 30px"> - 
	<input type="text" name="month" placeholder="mm" maxlength="2" size="2" style="width: 25px"> - 
	<input type="text" name="day" placeholder="dd" maxlength="2" size="2" style="width: 25px"> <br> 
	<label style="padding-right: 80px" value="Genre">Genre:</label> 
	<select name="Genre">
		<option value="Action">Action</option>
		<option value="Adventure">Adventure</option>
		<option value="Comedy">Comedy</option>
		<option value="Crime">Crime</option>
		<option value="Drama">Drama</option>
		<option value="Fantasy">Fantasy</option>
		<option value="Historical">Historical</option>
		<option value="Horror">Horror</option>
		<option value="Mystery">Mystery</option>
		<option value="Romance">Romance</option>
		<option value="Sci-Fi">Sci-Fi</option>
		<option value="Suspense">Suspense</option>
	</select> <br> <label style="padding-right: 74px" value="Rating">Rating:</label>
	<select name="Rating">
		<option value="5">5 - Excellent</option>
		<option value="4">4 - Very Good</option>
		<option value="3">3 - Good</option>
		<option value="2">2 - Fair</option>
		<option value="1">1 - Poor</option>
	</select> <br> <br> 
	<input type="submit" name="addMovie" value="Add Movie">
</form>
	<p>
		<a href="MovieViewX.php" target="_self">View Movie List</a>
	</p>
</div>
</body>
</html>