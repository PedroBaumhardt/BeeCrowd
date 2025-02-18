<?php
//GRENAIS

function lerGols(&$tA, &$tB){

    $inpt = readline();
    $inptArray = explode(" ",$inpt);
    $tA = (int)$inptArray[0];
    $tB = (int)$inptArray[1];

}

$cont = 0;
$vitGre = 0;
$vitInt = 0;
$empate = 0;
$isRunning = true;

while($isRunning){

    lerGols($golInt,$golGre);

    $cont++;

    if($golGre == $golInt){
        $empate++;
    }
    else if($golGre > $golInt){
        $vitGre++;
    }
    else{
        $vitInt++;
    }

    echo "Novo grenal (1-sim 2-nao)\n";
    $input = (int)readline();
    if($input != 1){
        $isRunning = false;
    }

}

echo "$cont grenais\nInter:$vitInt\nGremio:$vitGre\nEmpates:$empate\n";

if($vitGre == $vitInt){
    echo "Nao houve vencedor\n";
}
else{
    echo $vitGre > $vitInt ? "Gremio venceu mais\n" : "Inter venceu mais\n";
}