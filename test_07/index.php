<?php

echo '<a href="https://elzero.org/php-task-find-smallest-number-in-array/" target="_blank"> <b> Link Test </b></a><br>';

echo '<hr>';

$arr = [100, 20, 10, 11, -2, 1, 4, 200, 0];

$minNum = $arr[0];
foreach($arr as $key => $val){
    if($minNum > $val){
         $minNum = $val;
    }
}
echo $minNum;
