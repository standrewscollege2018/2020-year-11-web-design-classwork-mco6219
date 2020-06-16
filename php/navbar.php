<?php
include("dbconnect.php");

// there are 3 steps to running a select query
// 1. set up the query in a variable, this is what we want from the db
$tutor_sql = "SELECT * from tutorgroup";

// 2. We go to the database and run the query, in this we are physically running the query
// we use mysqli_query() this takes two parameters: dbconnect and query
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);

  // 3. We organise our results into an associative array
  // which means we can use the column headings from the database table in our code
  // to organise the data from the db we use the mysqli_fetch_assoc() function
  // aa = associative array
  $tutor_aa = mysqli_fetch_assoc($tutor_qry);

do {

  // define variables that you are pulling from the db and display info
  $tutorgroupID = $tutor_aa['tutorgroupID'];
  $tutorcode = $tutor_aa['tutorcode'];
?>
  <!-- display data from the db -->
  <!-- putting in div classes allows us to edit and use css to form your search results -->

 <?php
 // this line of code below is turning the tutorcodes into links,
 // and when you click any tutorcode link it takes you to the page
// tutorgroup.php, as shown in the href link below
 ?>
    <a href="tutorgroup.php"><?php echo "$tutorcode" ?></a>

<?php
$tutorgroupID = $tutorgroupID

// the while () condition is just the third step of our process
// of running the query, it effectively means we repeat the code in the do () part
// as many times as there are results coming back from the db. eg. 12 results so the loop would repeat 12 times
} while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));


 ?>
</div>
