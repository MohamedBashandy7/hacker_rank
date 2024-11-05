<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles) {
    return count(array_filter($candles, function($candle) use ($candles) {
        return $candle == max($candles);
    }));
}

$candles = [3, 2, 1, 3,3];
$result = birthdayCakeCandles($candles);
echo $result;
?>

<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles1($candles) {
    $max = max($candles);
    $count = 0;
    foreach ($candles as $candle) {
        if ($candle == $max) {
            $count++;
        }
    }
    return $count;
}

$candles = [3, 2, 1, 3];
$result = birthdayCakeCandles1($candles);
echo $result;
?>
