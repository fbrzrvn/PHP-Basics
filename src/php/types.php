<?php
  echo "<h1>Types</h1>";

  echo "<h2>Boolean</h2>";
  $bool = true;
  var_dump($bool);

  echo "<h2>Integer</h2>";
  $int = 5;
  var_dump($int);

  echo "<h2>Float</h2>";
  $float = 5.5;
  var_dump($float);

  echo "<h2>String</h2>";
  $str = "Hello World";
  var_dump($str);

  echo "<h2>Array</h2>";
  $arr = array("mike", 5, false);
  var_dump($arr);

  echo "<h2>Object</h2>";
  class Person {
    function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
  }
  $mike = new Person("Mike", "23");
  var_dump($mike);

  echo "<h2>NULL</h2>";
  $empty = null;
  var_dump($empty);
?>