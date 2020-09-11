<?php

echo '<a href="https://elzero.org/php-task-print-number-and-numbers-before/" target="_blank"> <b> Link Test </b></a><br>';

echo '<hr>';

function addCharacters($num) {

    $countCharacters = strlen($num);
    if ($countCharacters <= 3) {
        echo number_format($num, 0, '.', ',');
    } else {
        echo number_format(($num/ 1000), 3, '.', ',');
    }

}

addCharacters(195650432); // 195,650.432
echo '<br>';
addCharacters(1950620); // 1,950.620
echo '<br>';
addCharacters(123951); // 123.951
echo '<br>';
addCharacters(5504); // 5.504
echo '<br>';
addCharacters(120); // 120
