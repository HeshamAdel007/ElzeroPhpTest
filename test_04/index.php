<?php

echo '<a href="https://elzero.org/php-task-count-sub-strings-inside-string/" target="_blank"> <b> Link Test </b></a><br>';

echo '<hr>';


function countSubStrings($thesub, $thestr) {
    for($i=0, $count = 0; ;$i++) {
        if (isset($thestr[$i])) {
            if ($thestr[$i] == $thesub) {
                 $count++;
            }
            
        } else {
            break;
        }
    }
    echo $count;
}


countSubStrings("o", "I Love Elzero Web School"); // 4
echo '<br>';
countSubStrings("P", "I Love PHP"); // 2
echo '<br>';
countSubStrings("a", "Iam Happy"); // 2

