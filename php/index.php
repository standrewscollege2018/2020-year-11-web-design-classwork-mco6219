<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="responsivenav.css">
    <meta charset="utf-8">
<head>

</head>

<body>
  <?php

// we use echo to create HTML (print)
echo ("Hello world");
echo ("<h1>Hello world</h1>");

// variables always start with a $
$name = Donald;
  echo ("Hello $name");
   ?>
</body>

// if statements use () brackets for the condition and {} for the code to run

<?php if ($name == "Mickey Mouse"): ?>
  <?php echo $var ?>

<?php endif; ?>

// do {} while () loop

$counter
