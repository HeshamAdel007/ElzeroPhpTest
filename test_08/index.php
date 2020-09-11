<?php

echo '<a href="https://elzero.org/php-task-first-last-name-first-letter-middle-name/" target="_blank"> <b> Link Test </b></a><br>';

echo '<hr>';

function getCustomName($name) {
    $namArr  = explode(' ', $name, 3);
    $numName = count($namArr);
    if ($numName == 3) {
        list ($first, $middl, $last) = $namArr;
        echo "$first <b>{$middl[0]}</b> $last";
    } else {
        echo 'Name Must Have Three Parts';
    }
}

getCustomName("Osama Mohamed Elsayed"); // Osama M Elsayed
echo '<br>';
getCustomName("Hesham Adel Anwar"); // Hesham A Anwar
echo '<br>';
getCustomName("Osama Mohamed"); // Name Must Have Three Parts
