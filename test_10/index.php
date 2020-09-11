<?php

echo '<a href="https://elzero.org/php-task-check-number-before-and-after-number/" target="_blank"> <b> Link Test </b></a><br>';

echo '<hr>';


$arrayofnumbers = [1, 2, 4, 10, 20, 12];

function checkNumber($number, $arrayofnumbers) {

    $before = $number+1;
    $after  = $number-1;
    if (in_array($before, $arrayofnumbers) && in_array($after, $arrayofnumbers)) {
        echo $after . " | " . $number . " | " .  $before;
    } else {
        echo "False";
    }

}


checkNumber(11, $arrayofnumbers); // True => "10 | 11 | 12"
echo '<br>';
checkNumber(3, $arrayofnumbers); // True => "2 | 3 | 4"
echo '<br>';
checkNumber(5, $arrayofnumbers); // False