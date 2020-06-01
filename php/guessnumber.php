<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="guessnumber.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

if(isset($_GET['reply'])) {
if ($_GET['reply'] == "correct") {
    echo "<h1 class='celebrate'>That's right!</h1>";
}

}



     ?>
     <div class="guessingform">
       <form action="guess.php" method="post">
        <input required type="number" name="number" value="" placeholder="Enter your guess:">
        <button type="submit" name="button">Submit</button>
       </form>
     </div>
  </body>
</html>
