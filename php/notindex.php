<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
// echo writes content to the html
  echo "<h1>Hello world</h1>";

// all variables start with a $
  // $name = "Bob";
  // echo "Hello $name";

 ?>
 <form action="guess.php" method="post">
  <input type="text" name="firstname" value="" placeholder="Enter your guess:">
  <button type="submit" name="button">Submit</button>
 </form>

  </body>
</html>
