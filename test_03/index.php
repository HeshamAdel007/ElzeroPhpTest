<?php

echo '<a href="https://elzero.org/php-task-first-letter-from-every-word/" target="_blank"> <b> Link Test </b></a><br>';

echo '<hr>';


$word1 = "Elzero Web School";
$word2 = "Youtube World";
$word3 = "We Love PHP";

function getFirstLetter($word) {

    $words = explode(' ', $word);
    foreach ($words as $word) {
        echo $word[0];
    }

}

getFirstLetter($word1); // "EWS"
echo '<br>';
getFirstLetter($word2); // "YW"
echo '<br>';
getFirstLetter($word3); // "WLP"