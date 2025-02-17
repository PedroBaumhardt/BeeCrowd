<?php

//tempo de jogo com minutos

$uInput = readline();
$inputArray = explode(' ', $uInput);

$hInicial = $inputArray[0];
$mInicial = $inputArray[1];
$hFinal = $inputArray[2];
$mFinal = $inputArray[3];

//converter tempo em minutos
$tInicial = $mInicial + (60 * $hInicial);
$tFinal = $mFinal + (60 * $hFinal);

if ($tInicial > $tFinal || ($hInicial == $hFinal && $mInicial == $mFinal)) {
    $tFinal += 60 * 24;
}

$tDeJogo = $tFinal - $tInicial;

$hDeJogo = (int)floor($tDeJogo / 60);
$mDeJogo = $tDeJogo % 60;

echo "O JOGO DUROU $hDeJogo HORA(S) E $mDeJogo MINUTO(S)\n";
