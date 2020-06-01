<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="guessnumber.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php
if(!isset($_POST['number'])) {
header("location: http://www.youtube.com/embed/8Us18cjNjR8?start=11");
}
 ?>

    <?php
    // the information out of the $_POST array
      $number = 13;
      $numberguess = $_POST['number'];

      if ($numberguess == $number) {
        // code to run if condition is true
        header("Location: guessnumber.php?reply=Correct!");
    }

      else if ($numberguess < 13) {
      header("Location: guessnumber.php?reply=Toolow!");

      }

      else ($numberguess > 13) {
          // code to run if condition is false
          header("Location: guessnumber.php?reply=Toohigh!")
        }


     ?>
  </body>
</html>
