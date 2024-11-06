<?php

/*
 * Complete the 'maximizingXor' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER l
 *  2. INTEGER r
 */

function maximizingXor($l, $r) {
    $maxXor = 0;
    for ($i = $l; $i < $r; $i++) {
        for ($j = $i; $j <= $r; $j++) {
            $maxXor = max($maxXor, $i ^ $j);
        }
    }
    return $maxXor;
}
$l = 10;
$r = 15;
echo maximizingXor($l, $r);
