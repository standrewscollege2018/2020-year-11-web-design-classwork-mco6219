<?php
// the dbconnect.php file contains all the information that we need to connect to the database

// we use the mysqli_connect()
// this has 4 parameters: location, username, password, db name
$dbconnect = mysqli_connect("localhost", "root", "", "studentdb");
 ?>
