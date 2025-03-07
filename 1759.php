<?php 
    //Papai Noel

    $hoString = "";

    $inpt = (int)readline();

    for($i = 0; $i < $inpt-1; $i++){
        $hoString = $hoString."Ho ";
    }

    $hoString = $hoString."Ho!\n";

    echo $hoString;