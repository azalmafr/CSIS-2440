<html>
<head>
<meta charset="UTF-8">
<title>Movies!!!!!</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<!-- 
<link rel="stylesheet" type="text/css" href="Taylor_view.css" media="all">
-->
</head>
<body>
<?php
require_once 'DataBaseConnection.php';
$select = "SELECT * FROM Library.Movies";
$person = "SELECT * FROM Library.Talent ORDER BY Last";
?>
<div class="form">
		<div id="form_container">
			<form action="MovieViewX.php" method="post">
				Sort By:
				<ul>
					<li>Director or Lead:<select name="person" id="selector">
<?php
if (isset ( $_POST ['person'] )) {
	$person = "SELECT * FROM Talent ORDER BY idTalent, Last"; // ORDER BY ".$order.";";
}
$return = mysqli_query ( $con, $person );
if (! $return) { // here we check to see if we got a result set
	$message = "Whole query " . $select;
	echo $message;
	die ( 'Invalid query: ' . mysqli_error ( $con ) );
}
while ( $row = mysqli_fetch_array ( $return ) ) { // here we are loading the results into the variable row one at a time and printing out the row
	$fname = $row ['First']; // you will not we have to use the collum names in the database
	$lname = $row ['Last'];
	$theID = $row ['idTalent'];
	echo "<option value = >$theID - $fname $lname</option>";
}
?>
</select></li>
			<li><input type="submit" value="Director" name="sort" id="Button_Input"></li>
			<li><input type="submit" value="Lead" name="sort" id="Button_Input"></li>
			<li><input type="submit" value="Title" name="sort" id="Button_Input"></li>
			<li><input type="submit" value="Year" name="sort" id="Button_Input"></li>
		</ul>
	</form>
<?php
if (isset ( $_POST ['sort'] )) {
	$sortMethod = $_POST ['sort'];
	echo "Sorted by: $sortMethod";
	switch ($sortMethod) {
		case "Director" :
			$select = "SELECT * FROM Library.Movies order by Director";
			/*
			 * $select = "Select Movies.Title, Movies.Director, Movies.Lead," .
			 * "(select Talent.First from Talent where Movies.Director like Talent.First) as dfname, " .
			 * "(select Talent.Last from Talent where Movies.Director like Talent.Last) as dlname," .
			 * "(select Talent.First from Talent where Movies.Lead like Talent.First) as afname," .
			 * "(select Talent.Last from Talent where Movies.Lead like Talent.Last) as alname," .
			 * "Movies.Released, Movies.Genre, Movies.Rating" .
			 * " from Movies, Talent " .
			 * "where Movies.Director like Talent.First"; // and Talent.idTalent = $person";
			 */
			break;
		case "Lead" :
			$select = "SELECT * FROM Library.Movies order by Lead";
			/*
			 * $select = "Select Movies.Title, Movies.Director, Movies.Lead," .
			 * "(select Talent.First from Talent where Movies.Director like Talent.First) as dfname, " .
			 * "(select Talent.Last from Talent where Movies.Director like Talent.Last) as dlname," .
			 * "(select Talent.First from Talent where Movies.Lead like Talent.First) as afname," .
			 * "(select Talent.Last from Talent where Movies.Lead like Talent.Last) as alname," .
			 * "Movies.Released, Movies.Genre, Movies.Rating" .
			 * " from Movies, Talent " .
			 * "where Movies.Lead like Talent.First"; // and Talent.idTalent = $person";
			 */
			break;
		case "Title" :
			$select = "SELECT * FROM Library.Movies order by Title";
			/*
			 * $select = "Select Movies.Title, Movies.Director, Movies.Lead," .
			 * "(select Talent.First from Talent where Movies.Director like Talent.First) as dfname, " .
			 * "(select Talent.Last from Talent where Movies.Director like Talent.Last) as dlname," .
			 * "(select Talent.First from Talent where Movies.Lead like Talent.First) as afname," .
			 * "(select Talent.Last from Talent where Movies.Lead like Talent.Last) as alname," .
			 * "Movies.Released, Movies.Genre, Movies.Rating" .
			 * " from Movies, Talent " .
			 * "where Movies.Director like Talent.First order by Movies.Title";
			 */
			break;
		case "Year" :
			$select = "SELECT * FROM Library.Movies order by Released";
			/*
			 * $select = "Select Movies.Title, Movies.Director, Movies.Lead," .
			 * "(select Talent.First from Talent where Movies.Director like Talent.First) as dfname, " .
			 * "(select Talent.Last from Talent where Movies.Director like Talent.Last) as dlname," .
			 * "(select Talent.First from Talent where Movies.Lead like Talent.First) as afname," .
			 * "(select Talent.Last from Talent where Movies.Lead like Talent.Last) as alname," .
			 * "Movies.Released, Movies.Genre, Movies.Rating" .
			 * " from Movies, Talent " .
			 * "where Movies.Director like Talent.First order by Movies.Released";
			 */
			break;
		default :
			$select = "SELECT * FROM Library.Movies";
			/*
			 * $select = "Select Movies.Title, Movies.Director, Movies.Lead," .
			 * "(select Talent.First from Talent where Movies.Director like Talent.First) as dfname, " .
			 * "(select Talent.Last from Talent where Movies.Director like Talent.Last) as dlname," .
			 * "(select Talent.First from Talent where Movies.Lead like Talent.First) as afname," .
			 * "(select Talent.Last from Talent where Movies.Lead like Talent.Last) as alname," .
			 * "Movies.Released, Movies.Genre, Movies.Rating" .
			 * " from Movies, Talent " .
			 * "where Movies.Director like Talent.First";
			 */
			break;
	}
}
?>
</div>
	</div>
	<div class="datagrid">
<?php
$result = mysqli_query ( $con, $select );
if (! $result) {
	$message = "Whole query " . $select;
	echo $message;
	die ( 'Invalid query: ' . mysqli_error ( $con ) );
}
echo "<table><tr><th>Title</th><th>Director</th><th>Lead Actor/Actress</th><th>Release Date</th><th>Genre</th><th>Rating</th></tr>";
while ( $row = mysqli_fetch_array ( $result ) ) {
	echo "<tr>";
	echo "<td> " . $row [0] . "</td>";
	echo "<td> " . $row [1] . "</td>";
	echo "<td> " . $row [2] . "</td>";
	echo "<td> " . $row [4] . "</td>";
	echo "<td> " . $row [3] . "</td>";
	echo "<td> " . $row [5] . "</td></tr>";
}
echo "</table>";
?>
<p>
	<a href="AddMovieFormX.php" target="_self">Return to AddMovieForm</a>
</p>
</div>
</body>
</html>