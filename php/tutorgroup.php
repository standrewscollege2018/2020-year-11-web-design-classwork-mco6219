<?php

include("dbconnect.php");
include("navbar.php");
include("search.php");

$tutorgroupID = $_GET['tutorgroupID'];

// check to see if the user searched on something to come to this page
if (!isset($_GET['tutorgroupID'])) {
header("Location: https://www.youtube.com/watch?v=QRoWiTcO7dk");
}

// grab the search content from the GET array, and put into a variable
$tutorgroupID = $_GET['tutorgroupID'];

// there are 3 steps to running a select query
// 1. set up the query in a variable, this is what we want from the db
$tutor_sql = "SELECT * from student WHERE tutorgroupID = $tutorgroupID";

// 2. We go to the database and run the query, in this we are physically running the query
// we use mysqli_query() this takes two parameters: dbconnect and query
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);

// check if there are any results to display
// use mysqli_num_rows(), which counts the number of results
if (mysqli_num_rows($tutor_qry)==0) {
// if there are no results found, print a message
echo "No results found";
} else {
  // 3. We organise our results into an associative array
  // which means we can use the column headings from the database table in our code
  // to organise the data from the db we use the mysqli_fetch_assoc() function
  // aa = associative array
  $tutor_aa = mysqli_fetch_assoc($tutor_qry);



}
 ?>
