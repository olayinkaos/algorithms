<?php

$handle = fopen ("php://stdin", "r");
function miniMaxSum($arr) {
    // Complete this function
    $min = 0;
    $max = 0;
    $omit_index = 0;
    $array_len = sizeof($arr);
    
    for ($i = 0; $i < $array_len; $i++) {
        $sum_array = $arr;
        unset($sum_array[$omit_index]);
        $sum = array_sum($sum_array);
        if ($sum > $max) { $max = $sum; }
        if ($sum < $min || $min == 0) { $min = $sum; }
        $omit_index++;
    }
    
    echo($min . " " . $max);
}

$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
miniMaxSum($arr);

?>
