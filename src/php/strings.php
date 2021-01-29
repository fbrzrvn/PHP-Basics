<?php
  echo "<h1>Strings</h1>";

  echo "<h2>Text String</h2>";
  echo "Hello World";

  echo "<h2>Interpreter variables</h2>";
  $username = "Mario";
  echo "Hello $username";

  echo "<h2>Concatenate</h2>";
  echo "Hello " .$username;

  echo "<h2>Replace (case sensitive)</h2>";
  echo str_replace("world", "Mario", "Hello world!");

  echo "<h2>Replace</h2>";
  echo str_ireplace("World", "Mario", "Hello world!");

  echo "<h2>Execute the function that allows you to write a text N times</h2>";
  echo str_repeat("Hello", 5);

  echo "<h2>Length</h2>";
  echo strlen("Hello world!");

  echo "<h2>Position of the first occurrence of a text</h2>";
  echo strpos("Hello world!", "world");

  echo "<h2>Capitalized</h2>";
  echo ucwords("hello world");

  echo "<h2>Lowercase</h2>";
  echo strtolower("HELLO WORLD");

  echo "<h2>Text substring from the position</h2>";
  echo substr("Hello world", 1,5);
?>
