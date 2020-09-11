<?php

echo '<a href="https://elzero.org/php-task-simple-loop-on-friends-array/" target="_blank"><b>Link Test</b></a><br>';

echo '<hr>';

$myfriends = ["Ahmed", "Sayed", "Ali", "Shaimaa", "Noha"];

echo '<span><b>Step 1 </b></span><br>';

$i = 1;
foreach ($myfriends as $friend) {
     echo $i++ . ' - ' . $friend. '<br>';
}

echo '<hr>';

echo '<span><b>Step 2 </b></span><br>';

foreach ($myfriends as $key => $val) {
     echo $key+1 . ' - ' . $val . '<br>';
}
