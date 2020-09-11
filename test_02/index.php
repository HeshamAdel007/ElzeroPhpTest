<?php

echo '<a href="https://elzero.org/php-task-remove-duplicates-from-array/" target="_blank"> <b> Link Test </b></a><br>';

echo '<hr>';

$numbers = [1, 2, 2, 2, 4, 5, 7, 2, 2, 8, 9];

$uniqueNum = [];

foreach ($numbers as $number) {
    $uniqueNum[$number] = $number;
}

foreach ($uniqueNum as $number) {
    echo $number . '<br>';
}
