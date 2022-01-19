<?php

function pre_print($var) {
  echo '<pre>';
  print_r($var);
  echo '</pre>';
}

function para_print ($var) {
  echo "<p>$var</p>";
}

function double ($a) {
  return $a + 2;
}

?>