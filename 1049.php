<?php

$aguia = 'aguia';
$pomba = 'pomba';
$homem = 'homem';
$vaca = 'vaca';
$pulga = 'pulga';
$lagarta = 'lagarta';
$sanguessuga = 'sanguessuga';
$minhoca = 'minhoca';

$ave = [

    'id' => 'ave',
    'carnivoro' => &$aguia,
    'onivoro' => &$pomba

];
$mamifero = [

    'id' => 'mamifero',
    'onivoro' => &$homem,
    'herbivoro' => &$vaca

];
$vertebrado = [

    'id' => 'vertebrado',
    'ave' => &$ave,
    'mamifero' => &$mamifero

];
$inseto = [

    'id' => 'inseto',
    'hematofago' => 'pulga',
    'herbivoro' => 'lagarta'
];
$anelideo = [

    'id' => 'anelideo',
    'hematofago' => &$sanguessuga,
    'onivoro' => &$minhoca

];
$invertebrado = [

    'id' => 'invertebrado',
    'inseto' => &$inseto,
    'anelideo' => &$anelideo

];

$inpt1 = readline();
$inpt2 = readline();
$inpt3 = readline();

if ($inpt1 == $vertebrado['id']) {
    $midpoint = $vertebrado[$inpt2];
} else {
    $midpoint = $invertebrado[$inpt2];
}

echo $midpoint[$inpt3],"\n";
