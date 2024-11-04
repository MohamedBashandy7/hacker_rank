<?php

function diagonalDifference($arr) {
    $line1 = 0; 
    $line2 = 0;
    $n = count($arr);

    for ($i = 0; $i < $n; $i++) {
        $line1 += $arr[$i][$i];
        $line2 += $arr[$i][$n - $i - 1];
    }
    return abs($line1 - $line2);
}

$arr = [
    [11, 2, 4,10],
    [4, 5, 6,10],
    [10, 8, -12,10],
    [10, 8, -12,10],
];

$result = diagonalDifference($arr);
echo $result;
