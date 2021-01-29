<?php
  $username = "Mario";
  $names = array("Mario","Maria","Jack");
  echo "<h1>Print</h1>";

  echo "<h2>echo</h2>";
  echo '<p>echo: Hello $username</p>';
  echo "<p>echo: Hello $username</p>";
  echo '<p>echo: Hello ' . $username . '</p>';

  echo "<h2>print</h2>";
  print '<p>print: Hello $username</p>';
  print "<p>print: Hello $username</p>";
  print "<p>print: Hello " . $username . "</p>";
  print "<p>true</p>";
  print "<p>false</p>";

  echo "<h2>print_r</h2>";
  print_r("<p> print_r: $username</p>");
  print_r("<p>print_r: $names</p>");
  print_r($names);
?>