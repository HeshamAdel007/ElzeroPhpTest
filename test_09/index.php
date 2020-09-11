<?php

echo '<a href="https://elzero.org/php-task-dashes-depend-on-number-given/" target="_blank"> <b> Link Test </b></a><br>';

echo '<hr>';

function printDashes($number) {
    for($i=1; $i<=$number; $i++) {
        if($i > 1) {
            echo '|';
        }
    
        echo '-';
    }
}

printDashes(10); // -|-|-|-|-|-|-|-|-|-
echo '<br>';
printDashes(5); // -|-|-|-|-
echo '<br>';
printDashes(3); // -|-|-
