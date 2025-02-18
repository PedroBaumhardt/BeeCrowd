<?php
//Tipo de Combustivel

$gasolina = 0;
$alcool = 0;
$diesel = 0;

$index = array(

    1 => &$alcool,
    2 => &$gasolina,
    3 => &$diesel
);

do{

    $input = (int)readline();
    if($input < 1 || $input > 4){
        continue;
    }
    else if($input != 4){

        $index[$input] += 1;

    }

}while($input != 4);

echo "MUITO OBRIGADO\nAlcool: $alcool\nGasolina: $gasolina\nDiesel: $diesel\n";