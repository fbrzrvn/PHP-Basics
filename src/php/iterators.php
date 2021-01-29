<?php
  echo "<h1>Iterators</h1>";

  echo "<h2>for</h2>";
  for ($i=1; $i<=10; $i++) {
    echo "$i ";
  }

  echo "<h2>foreach</h2>";
  $nums = array(1,2,3,4,5,6,7,8,9,10);
  foreach($nums as $num) {
    echo "$num ";
  };
  echo "<br>";
  $data = array("Mario"=>"31", "Maria"=>"25", "Joe"=>"53");
  foreach($data as $name => $age) {
    echo "$name = $age ";
  }

  echo "<h2>while</h2>";
  $x = 1;
  while($x<=5) {
    echo "$x ";
    $x++;
  }

  echo "<h2>do while</h2>";
  $z = 5;
  do {
    echo "$z";
    $z++;
  } while($z<=5);
?>