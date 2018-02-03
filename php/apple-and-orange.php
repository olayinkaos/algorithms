<?php

$handle = fopen ("php://stdin", "r");
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // Complete this function
    $oranges_house = 0;
    $apples_house = 0;
    
    foreach($apples as $apple) {
        $loc = $a + $apple;
        
        if ($loc >= $s && $loc <= $t) {
            $apples_house++;
        }
    }
    
    foreach($oranges as $orange) {
        $loc = $b + $orange;
        
        if ($loc >= $s && $loc <= $t) {
            $oranges_house++;
        }
    }
    
    echo $apples_house . "\n";
    echo $oranges_house;
}

fscanf($handle, "%i %i", $s, $t);
fscanf($handle, "%i %i", $a, $b);
fscanf($handle, "%i %i", $m, $n);
$apple_temp = fgets($handle);
$apple = explode(" ",$apple_temp);
$apple = array_map('intval', $apple);
$orange_temp = fgets($handle);
$orange = explode(" ",$orange_temp);
$orange = array_map('intval', $orange);
countApplesAndOranges($s, $t, $a, $b, $apple, $orange);

?>
