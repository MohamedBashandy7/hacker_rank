<?php
function aVeryBigSum($ar) {
    $sum = 0;
    foreach($ar as $value){
        $sum += $value;
    }
    return $sum;
}

$ar = [1000000001,1000000002,1000000003,1000000004,1000000005];

$result = aVeryBigSum($ar);
echo $result ;
