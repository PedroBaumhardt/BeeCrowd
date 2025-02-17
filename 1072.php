<?php

$range = readline();
$in = 0;
$out = 0;

for ($i = 0; $i < $range; $i++) {
    $number[$i] = readline();
    if ($number[$i] >= 10 && $number[$i] <= 20) {
        $in++;
    } else {
        $out++;
    }
}
echo "$in in\n$out out\n";
