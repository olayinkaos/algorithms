<?php

$handle = fopen ("php://stdin", "r");
function solve($a0, $a1, $a2, $b0, $b1, $b2){
    // Complete this function
    $result = [0, 0];
    $alice = [$a0, $a1, $a2];
    $bob = [$b0, $b1, $b2];
        
    for ($i=0; $i<3; $i++) {
        if($alice[$i] > $bob[$i]){ $result[0]++; }
        if($alice[$i] < $bob[$i]){ $result[1]++; }
    }
    
    return $result;
}

fscanf($handle, "%d %d %d", $a0, $a1, $a2);
fscanf($handle, "%d %d %d", $b0, $b1, $b2);
$result = solve($a0, $a1, $a2, $b0, $b1, $b2);
echo implode(" ", $result)."\n";



?>
