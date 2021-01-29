<?php
  echo "<h1>Functions</h1>";

  echo "<h2>Sum</h2>";
  function sum($a, $b) {
    echo $a + $b;
  }
  sum(5,10);

  echo "<h2>Multiplication</h2>";
  function moltiply($a, $b) {
    echo $a * $b;
  }
  moltiply(2,4);

  echo "<h2>Division</h2>";
  function divide($a, $b) {
    echo $a / $b;
  }
  divide(12, 2);

  echo "<h2>Given two numbers and an operation returns the result of that operation.</h2>";
  function calculate($a, $b, $operator) {
    switch($operator) {
      case "+":
        sum($a, $b);
        break;
      case "*":
        moltiply($a, $b);
        break;
      case "/":
        divide($a, $b);
        break;
    }
  }
  calculate(25, 2, "/");
?>