<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    $timeParts = explode(":", substr($s, 0, -2));
    $hour = (int)$timeParts[0];
    $ampm = substr($s, -2);

    if ($ampm === "AM") {
        $hour = $hour === 12 ? 0 : $hour;
    } elseif ($ampm === "PM") {
        $hour = $hour !== 12 ? $hour + 12 : $hour;
    }

    return sprintf("%02d:%s:%s", $hour, $timeParts[1], $timeParts[2]);
}

$s = "1:05:45PM";
$result = timeConversion($s);
echo $result;
?>
<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion1($s) {
    $time = substr($s, 0, -2);
    $timeParts = explode(":", $time);

    if (strpos($s, 'AM') !== false) {
        if ((int)$timeParts[0] == 12) {
            $timeParts[0] = "00";
        }
    } elseif (strpos($s, 'PM') !== false) {
        if ((int)$timeParts[0] != 12) {
            $timeParts[0] += 12;
        }
    }

    return implode(":", $timeParts);
}

$s = "1:05:45PM";
$result = timeConversion1($s);
echo $result;
?>