<?php

/*
 * Complete the 'compareTriplets' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 *  المطلوب عملية مقارنة بين شخصين ونقاطهم من ال arrays
 */

function compareTriplets($a, $b) {
    $aliceScore = 0;
    $bobScore = 0;
    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) {
            $aliceScore++; // Alice gets a point
        } elseif ($a[$i] < $b[$i]) {
            $bobScore++; // Bob gets a point
        }
    }
    return [$aliceScore, $bobScore];
}
$a = [1, 2, 3];
$b = [5, 6, 7];
$result = compareTriplets($a, $b);
print_r($result);
