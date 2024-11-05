<?php
$numbers = [1, 2, 3, 4, 5];

// دالة لزيادة الرقم بمقدار 1
// function increment($num) {
//     return $num + 1;
// }

$result = array_map(function($num) {
    return $num + $num;
}, $numbers);

echo "<pre>";
print_r($result); // سيعرض [2, 3, 4, 5, 6]
echo "</pre>";