<?php
function simpleArraySum($ar) {
    //your solve here
    $sum = 0;
    foreach ($ar as $value) {
        $sum += $value;
    }
    return $sum;
}
$ar = [1, 2, 3, 4, 10, 11];
$result = simpleArraySum($ar);
print ($result);
