<?php


    function checkTrue(bool $bool,int $val){
        if($bool){
            return $val;
        }
        else{
            return 0;
        }
    }

    $count = 0;

    $eyeIndex = array(
        "-" => false,
        "*" => true
    );
    $valIndex = array(
        0 => 4,
        1 => 2,
        2 => 1
    );

    $baseVal = 0;
    $submitString = "caw caw";

    while($count < 3){

        $inpt = readline();
        if($inpt != $submitString){
            $inptArray = str_split($inpt);

            for($i = 0; $i < 3; $i++){
                $baseVal += checkTrue($eyeIndex[$inptArray[$i]], $valIndex[$i]);
            }
        }
        else{
            echo $baseVal."\n";
            $baseVal = 0;   
            $count++;
        }

    }