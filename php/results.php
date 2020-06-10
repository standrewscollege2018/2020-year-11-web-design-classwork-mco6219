<?php
// this page will run a query and display the result/s

// we include the dbconnect.php page, this connects this page with the db
include("dbconnect.php");

// grab the search content from the POST array, and put into a variable
$search = $_POST['search'];

// there are 3 steps
// 1. set up the query in a variable, this is what we want from the db
$result_sql = "SELECT * from student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

// 2. We go to the database and run the query, in this we are physically running the query
// we use mysqli_query() this takes two parameters: dbconnect and query
$result_qry = mysqli_query($dbconnect, $result_sql);

// 3. We organise our results into an associative array
// which means we can use the column headings from the database table in our code
// to organise the data from the db we use the mysqli_fetch_assoc() function
// aa = associative array
$result_aa = mysqli_fetch_assoc($result_qry);

// define variables that you are pulling from the db
$firstname = $result_aa['firstname'];
$lastname = $result_aa['lastname'];

 ?>
 <!-- display data from the db -->
 <div class="">
  <p> <?php echo "$firstname $lastname";
    ?></p>

 </div>
