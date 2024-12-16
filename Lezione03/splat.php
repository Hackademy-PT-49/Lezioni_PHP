<?php

// Splat o spread operator ...


// ...[1,53,'ueqo'];  diventa 1,53,'ueqo'



$array  = [123,'ciao','oasfjoar',6];

function stampaVariabili(...$array){

    var_dump($array);

    foreach($array as $element){

        echo $element ."\n";
    }
}

// stampaVariabili(634,'Prova',123,'ciao','oasfjoar',6);



function average(int ...$numbers){
    $tot = 0;
    $count = 0;
    foreach($numbers as $number){
        $tot += $number;
        $count++;
    }

    return $tot/$count;
}

$numbers = [123,5125,627747,473];
$numbers2 = [515215,5125,-627747,473];

echo average(2,4,10,2042,...$numbers);