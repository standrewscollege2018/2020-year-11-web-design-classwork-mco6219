<?php

$tutorgroupID = $_GET['tutorgroupID'];

// there are 3 steps to running a select query
// 1. set up the query in a variable, this is what we want from the db
$result_sql = "SELECT * from student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";


 ?>
