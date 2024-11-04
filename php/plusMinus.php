<?php
function plusMinus($arr) {
    // Write your code here
    $n = count($arr);
    $positive = 0;
    $negative = 0;
    $zero = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] > 0) {
            $positive++;
        } elseif ($arr[$i] < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }
    $positive = $positive / $n;
    $negative = $negative / $n;
    $zero = $zero / $n;
    // echo $positive . "\n" . $negative . "\n" . $zero . "\n";
    printf("%f<br>", $positive);
    printf("%f<br>", $negative);
    printf("%f<br>", $zero);
}
$arr =[-4,3,-9,0,4,1,10,5] ;

plusMinus($arr);
