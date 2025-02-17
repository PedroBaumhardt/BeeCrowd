<?php

//Numero de Pares

const NON = 5; // Number Of Numbers

$par = 0;

for ($i = 0; $i < NON; $i++) {
    $number[$i] = readline();
    if ($number[$i] % 2 == 0) {
        $par++;
    }
}

echo "$par valores pares\n";
