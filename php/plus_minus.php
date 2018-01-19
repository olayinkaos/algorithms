<?php

$handle = fopen ("php://stdin", "r");
function plusMinus($arr) {
    // Complete this function
    $count_positive = 0;
    $count_negative = 0;
    $count_zeroes = 0;
    $length = sizeof($arr);
    
    foreach ($arr as $a) {
        if ($a > 0) { $count_positive++; }
        if ($a == 0) { $count_zeroes++; }
        if ($a < 0) { $count_negative++; }
    }

    echo(floatval($count_positive/$length) . "\n");
    echo(floatval($count_negative/$length) . "\n");
    echo(floatval($count_zeroes/$length) . "\n");
}

fscanf($handle, "%i",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
plusMinus($arr);

?>
