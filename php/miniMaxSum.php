<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    $min_sum = 0;
    $max_sum = 0;
    sort($arr);
    $min_sum = array_sum(array_slice($arr, 0, -1));
    $max_sum = array_sum(array_slice($arr, 1));
    echo $min_sum . " " . $max_sum;
}
$arr = [1, 2, 3, 4, 5];
miniMaxSum($arr);
?>

<?php

function miniMaxSum1($arr) {
    $totalSum = array_sum($arr);
    $minValue = min($arr);
    $maxValue = max($arr);
    $minSum = $totalSum - $maxValue;
    $maxSum = $totalSum - $minValue;
    echo $minSum . " " . $maxSum;
}
$arr = [1, 2, 3, 4, 5];
miniMaxSum1($arr);

?>
