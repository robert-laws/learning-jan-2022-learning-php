<?php

function pre_print($var)
{
  echo '<pre>';
  print_r($var);
  echo '</pre>';
}

function para_print($var)
{
  echo "<p>$var</p>";
}

function double($a)
{
  return $a + 2;
}

function multiply($a, $b)
{
  return (($a * $b) > 0) ? $a * $b : throw new Exception("The result is not a positive number.");
}

try {
  echo multiply(-5, 6);
} catch (Exception) {
  error_log('The result was not a positive number');
}
