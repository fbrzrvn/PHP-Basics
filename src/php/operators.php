<?php
  echo "<h1>Operators</h1>";

  $x = 5;
  $y = 10;

  echo "<h2>Arithmetic Operators</h2>";
  echo var_dump($x + $y);
  echo var_dump($x - $y);
  echo var_dump($x * $y);
  echo var_dump($x / $y);
  echo var_dump($x % $y);
  echo var_dump($x ** $y);

  echo "<h2>Assignment Operators</h2>";
  echo var_dump($x == $y);
  echo var_dump($x += $y);
  echo var_dump($x -= $y);
  echo var_dump($x *= $y);
  echo var_dump($x /= $y);
  echo var_dump($x %= $y);

  echo "<h2>Comparison Operators</h2>";
  echo var_dump($x == $y);
  echo var_dump($x === $y);
  echo var_dump($x != $y);
  echo var_dump($x !== $y);
  echo var_dump($x < $y);
  echo var_dump($x > $y);
  echo var_dump($x <= $y);
  echo var_dump($x >= $y);
  echo var_dump($x <> $y);
  echo var_dump($x <=> $y);
  echo("<br>");
  echo "<> return true if $x is not igual $y";
  echo("<br>");
  echo "<=> Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y";

  echo "<h2>Increment / Decrement Operators</h2>";
  echo var_dump(++$x);
  echo var_dump(--$x);
  echo var_dump($x++);
  echo var_dump($x--);

  echo "<h2>Logical Operators</h2>";
  echo var_dump($x && $y);
  echo var_dump($x || $y);
  echo var_dump(!$x);
  echo var_dump($x and $y);
  echo var_dump($x or $y);
  echo var_dump($x xor $y);
  echo "<br>";
  echo "XOR return true only if $x or $y are true, false if both are true or both are false";

  echo "<h2>String Operators</h2>";
  echo var_dump($x . $y);
  echo var_dump($x .= $y);

  echo "<h2>Conditional Operators</h2>";
  echo var_dump($x == $y ? "equal" : "not equal");
  echo var_dump($y ?? 5);

?>