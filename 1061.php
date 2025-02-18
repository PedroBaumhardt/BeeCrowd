<?php
//Tempo de um evento

function getDay(){
    $input = readline();
    $inputArray = explode(" ",$input);
    return $inputArray[1];
}
function getTime(&$h, &$m, &$s){
    $input = readline();
    $inputArray = explode(" : ", $input);
    $h = $inputArray[0];
    $m = $inputArray[1];
    $s = $inputArray[2];
}
$firstP = array(

    "hour" => 0,
    "minute" => 0,
    "second" => 0
);
$lastP = array(

    "hour" => 0,
    "minute" => 0,
    "second" => 0
);

$firstDay = getDay();
getTime($firstP["hour"],$firstP["minute"],$firstP["second"]);
$lastDay = getDay();
getTime($lastP["hour"],$lastP["minute"],$lastP["second"]);

$initSumOfTime = ($firstDay * 60 * 24*60) + ($firstP["hour"] * 60 * 60) + ($firstP["minute"]*60) + $firstP["second"];
$endSumOfTime = ($lastDay * 60 * 24*60) + ($lastP["hour"] * 60 * 60) + ($lastP["minute"]*60) + $lastP["second"];

$timeDifferenceInSeconds = $endSumOfTime - $initSumOfTime;

$daysBetween = (int) floor(floor(floor($timeDifferenceInSeconds/60)/60)/24);

$timeDifferenceInSeconds -= $daysBetween*60*60*24;

$hoursBetween = (int) floor(floor($timeDifferenceInSeconds/60)/60);

$timeDifferenceInSeconds -= $hoursBetween*60*60;

$minutesBetween = (int) floor($timeDifferenceInSeconds/60);

$secondsBetween = $timeDifferenceInSeconds % 60;

echo "$daysBetween dia(s)\n$hoursBetween hora(s)\n$minutesBetween minuto(s)\n$secondsBetween segundo(s)\n";