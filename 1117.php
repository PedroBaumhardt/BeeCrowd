<?php
//validação de nota

$media = 0.0;
$cont = 0;

while($cont < 2){
    $input = (float)readline();
    if($input > 10 || $input < 0){
        echo "nota invalida\n";
        continue;
    }

    $media += $input;
    $cont++;

}

$media = (float) $media/2;

echo "media = $media\n";