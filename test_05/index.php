<?php

echo '<a href="https://elzero.org/php-task-print-number-and-numbers-before/" target="_blank"> <b> Link Test </b></a><br>';

echo '<hr>';

function getNumbersBefore($number) {

    for($i=1; $i<=$number; $i++) {
      echo $i;
    }

}

getNumbersBefore(3); // 123
echo '<br>';
getNumbersBefore(8); // 12345678
echo '<br>';
getNumbersBefore(10); // 12345678910
echo '<br>';
getNumbersBefore(6); // 123456
echo '<br>';
getNumbersBefore(0); // Negative Numbers & Zero Not Allowed
echo '<br>';
getNumbersBefore(-1); // Negative Numbers & Zero Not Allowed
