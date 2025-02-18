<?php
//Senha fixa

const PASSCODE = 2002;

while(true){

    $input = (int)readline();
    if($input == PASSCODE){
        echo "Acesso Permitido\n";
        break;
    }
    else{
        echo "Senha Invalida\n";
    }

}