<?php
require_once 'host_connection.php';       /* connect to MySQL on the host */
//include 'dropSchemaLibrary.php';    /* commented out until you want to drop and recreate the schema/database */
//include 'createSchemaLibrary.php';  /* create the database */
require_once 'db_connection.php';   /* connect to the database after creation */
//include 'dropTableMovies.php';     /* commented out until you want to drop and recreate the table */
//include 'dropTableTalent.php';     /* commented out until you want to drop and recreate the table */
include 'createTableTalent.php';   /* create the table */
include 'createTableMovies.php';   /* create the table */
include 'insertTalentTableRecords.php';   /* insert records into the table */
include 'insertMoviesTableRecords.php';   /* insert records into the table */
include 'getTalentRecordCount.php';       /* get number of records in the table */
include 'getMoviesRecordCount.php';       /* get number of records in the table */
include 'AddMovieFormX.php';
include 'AddPersonFormX.php';
include 'MovieViewX.php';     /* create a list by selecting all records from the table */

mysqli_close($con);					/* close the MySQL connection */
?>