<?php
echo "Test!";
echo "<br>";
$pi = 4; $top = 4; $bot = 3; $minus = TRUE;
$accuracy = 1000000;

for($i = 0; $i < $accuracy; $i++)
{
  $pi += ( $minus ? -($top/$bot) : ($top/$bot) );
  $minus = ( $minus ? FALSE : TRUE);
  $bot += 2;
}
print "Pi ~=: " . $pi;
$executionTime = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
echo "<br>";
print $executionTime;
