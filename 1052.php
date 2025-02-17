<?php

//Calendario de meses

$calendarioMeses = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$userInpt = readline();
$userInpt--;
echo $calendarioMeses[$userInpt], "\n";
