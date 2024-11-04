<?php

function staircase($n) {
    for ($i = 0; $i < $n; $i++) {
        echo str_repeat(" ", $n - $i - 1) . str_repeat("#", $i + 1) . "\n";
    }
}

$n = 5;
staircase($n);
