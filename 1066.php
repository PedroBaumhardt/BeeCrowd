<?php

// Numero de Pares, Impares, Positivos e Negativos

const NON = 5; // Number Of Numbers

$pos = 0;
$neg = 0; 
$imp = 0;
$par = 0;

for ($i = 0; $i < NON; $i++) {
    $number[$i] = readline();
    if($number[$i] > 0){
        $pos++;
    }
    else if($number[$i] < 0){
        $neg++;
    }
    if($number[$i] % 2 == 0){
        $par++;
    }
    else{
        $imp++;
    }
}

echo "$par valor(es) par(es)\n$imp valor(es) impar(es)\n$pos valor(es) positivo(s)\n$neg valor(es) negativo(s)\n";
