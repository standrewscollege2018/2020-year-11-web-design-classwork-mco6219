<?php
// this page will run a query and display the result/s

// we include the dbconnect.php code
include("dbconnect.php");

// there are 3 steps
// 1. set up the query in a variable, this is what we want from the db
$result_sql = "SELECT * from student WHERE studentID=14";

// 2. We go to the database and run the query
// we use mysqli_query() this takes two parameters: dbconnect and query
$result_qry = mysqli_query($dbconnect, $result_sql);

// 3. We organise our results into an associative array
// which means we can use the column headings from the database table in our code
// t organise the data from the db we use the mysqli_fetch_assoc() function
// aa = associative array
$result_aa = mysqli_fetch_assoc($result_qry);


// display information from the db
echo $result_aa['firstname'];
 ?>
