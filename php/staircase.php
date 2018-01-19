<?php

$handle = fopen ("php://stdin", "r");
function staircase($n) {
    // Complete this function
    // Starting Variables
    $num_spaces = $n - 1;
    $num_hashes = 1;
    
    for ($i = 1; $i <= $n; $i++) {
        $spaces = str_repeat(" ", $num_spaces);
        $hashes = str_repeat("#", $num_hashes);
        
        echo($spaces . $hashes . "\n");
        $num_spaces--;
        $num_hashes++;
    }
}

fscanf($handle, "%i",$n);
staircase($n);

?>
