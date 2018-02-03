<?php

$handle = fopen ("php://stdin", "r");
function kangaroo($x1, $v1, $x2, $v2) {
    // Complete this function
    if ($v1 > $v2 && ($x2 - $x1)%($v2 - $v1) == 0){
        return 'YES';
    }
    
    return 'NO';
}

fscanf($handle, "%i %i %i %i", $x1, $v1, $x2, $v2);
$result = kangaroo($x1, $v1, $x2, $v2);
echo $result . "\n";

?>
