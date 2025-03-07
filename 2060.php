<?php
    //Desafio de Bino
    $qntd = readline();

    $m2 = 0;
    $m3 = 0;
    $m4 = 0;
    $m5 = 0;

    $inpt = readline();
    $inptArray = explode(" ", $inpt);


    for($i = 0; $i < $qntd; $i++){
        
        $m2 += $inptArray[$i] % 2 == 0 ? 1 : 0;
        $m3 += $inptArray[$i] % 3 == 0 ? 1 : 0;
        $m4 += $inptArray[$i] % 4 == 0 ? 1 : 0;
        $m5 += $inptArray[$i] % 5 == 0 ? 1 : 0;

    }

    echo "$m2 Multiplo(s) de 2\n";
    echo "$m3 Multiplo(s) de 3\n";
    echo "$m4 Multiplo(s) de 4\n";
    echo "$m5 Multiplo(s) de 5\n";

