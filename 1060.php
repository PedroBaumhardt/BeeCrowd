<?php
//Numeros positivos
const RANGE = 6;
$pos = 0; 

for($i = 0; $i < RANGE; $i++){
    $input[$i] = readline();
    if($input[$i] > 0){
        $pos++;
    }
}

echo "$pos valores positivos\n";