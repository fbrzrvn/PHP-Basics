<?php
  echo "<h1>Conditionals</h1>";

  echo "<h2>If</h2>";
  if (date("l") == "Monday") {
    echo "We are on Monday";
  }

  echo "<h2>If Else</h2>";
  if (date("M") == "Oct") {
    echo "We are in Octuber";
  } else {
    echo date("M");
  }

  echo "<h2>If ElseIf Else</h2>";
  if (date('i') < 10) {
    echo "the current minute is less than 10";
  } elseif (date('i') > 15 ) {
    echo "the current minute is more than 15";
  } else {
    echo "does not meet any conditions";
  }

  echo "<h2>Switch</h2>";
  switch(date("l")) {
    case "Monday":
      echo "Today is Monday";
      break;
    case "Tuesday":
      echo "Today is Tuesday";
      break;
    case "Wednesday":
      echo "Today is Wednesday";
      break;
    case "Thursday":
      echo "Today is Thursday";
      break;
    case "Friday":
      echo "Today is Friday";
      break;
      case "Saturday":
        echo "Today is Saturday";
        break;
    case dafault:
      echo "Today is Sunday";
  }
?>