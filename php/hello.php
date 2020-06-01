<?php
// checking to see if $_POST has content

// isset() checks to see if what is in the brackets has been set
if(!isset($_POST['firstname'])) {
// if firstname exists, this returns true

// if firstname doesn't exist, it returns true

// to redirect a browser to another page, use header
  header("location: http://www.youtube.com/embed/8Us18cjNjR8?start=11");
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

// the information out of the $_POST array
  $firstname = $_POST['firstname'];

  if ($firstname == "Moana") {
    // code to run if condition is true
  echo "Congratulations! You guessed correct!";
}  else if ($firstname == "") {
  echo "Please enter a valid name";

  } else {
      // code to run if condition is false
      echo "Wrong, guess again!";
    }

     ?>
  </body>
</html>
