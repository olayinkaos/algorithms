<?php

$handle = fopen ("php://stdin", "r");
function timeConversion($s) {
    // Complete this function
    $time = explode(":", $s);
    $hour = intval($time[0]);
    $am_pm = substr($s, -2);
    
    switch($am_pm){
        case 'PM':
            if(intval($hour) != 12) {
                $hour = intval($hour) + 12;
            }
            break;
        case 'AM':
            if(intval($hour) == 12) {
                $hour = "00";
            } 
            
            if (intval($hour) < 10) {
                $hour = "0" . intval($hour);
            }
            break;
    }
    
    $time[0] = $hour;
    $time = implode(":", $time);
    $time = substr($time, 0, -2);
    
    return $time;
}

fscanf($handle, "%s",$s);
$result = timeConversion($s);
echo $result . "\n";

?>
