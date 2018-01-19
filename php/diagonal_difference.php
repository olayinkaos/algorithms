<?php

$handle = fopen ("php://stdin", "r");
function diagonalDifference($a) {
    // Complete this function
    $length = sizeof($a);
    $primary_diag = 0;
    $secondary_diag = 0;
    
    $itr = $length - 1;
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length; $j++) {
            if ($i == $j) {
                $primary_diag += $a[$i][$j];   
            }
        }
        
        $secondary_diag += $a[$i][$itr];
        $itr--;
    }
    
    return abs($primary_diag - $secondary_diag);
}

fscanf($handle, "%i",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
   $a[$a_i] = array_map('intval', $a[$a_i]);
}
$result = diagonalDifference($a);
echo $result . "\n";

?>
