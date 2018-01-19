<?php

$handle = fopen ("php://stdin", "r");
function birthdayCakeCandles($n, $ar) {
    // Complete this function
    $max_value = max($ar);
    $max_array = array_filter($ar, function ($value) use ($max_value) {
        if ($value == $max_value) {
            return $value;
        }
    });
    return sizeof($max_array);
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = birthdayCakeCandles($n, $ar);
echo $result . "\n";

?>
