<?php
  echo "<h1>Arrays</h1>";

  echo "<h2>Array composed of text strings</h2>";
  $names = array("Martio", "Maria", "Jack");
  var_dump($names);

  echo "<h2>Array composed of whole numbers and decimal numbers</h2>";
  $nums = array(11, .5, -1);
  var_dump($nums);

  echo "<h2>Multidimensional array</h2>";
  $person = array (
    array("Mario",22,"man"),
    array("Maria",15,"women"),
    array("Jack",85,)
  );
  var_dump($person);

  echo "<h2>Length of an array</h2>";
  echo count($names);

  echo "<h2>Combination of two arrays</h2>";
  print_r( array_merge($names, $nums));

  echo "<h2>Given an array return the last element of it</h2>";
  echo end($names);

  echo "<h2>given an array add a new element to the array in question</h2>";
  array_push($names, "Mary");
  print_r($names);
?>