<?php

if (!empty($_POST)) var_dump($_POST);

foreach ($_POST as $name => $value) {
  if (is_array($value)) {
    $value = implode(', ', $value);
  }

  echo '<p><strong>' . ucfirst($name) . '</strong> is ' . $value . '</p>';
}
