<?php 
require_once 'inc/functions.php';
require 'inc/variables.php'; 
include 'inc/learningphp.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning PHP</title>
</head>
<body>
  <?php include 'templates/nav.php' ?>
  <h1><?php echo $title ?></h1> 
  <?php para_print($description) ?>
  <small>Author: <?php echo $author ?></small>
  <hr>
  <p><?php echo learningPHP\double(5) ?></p>
</body>
</html>