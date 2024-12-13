<?php

// For  il for esegue il blocco di codice fino a quando la condizione non risulta falsa

//(valore iniziale iteratore; condizione; modifica dell'iteratore)

// l'assegnazione dell'iteratore viene eseguita solo al primo giro
// for($area=0; $area < 20  ; $area++ ){
//     echo $area;
    
// }

// la modifica dell'iteratore viene fatta alla conclusione delle istruzioni di un ciclo

// operatore di incremento 

//$i++ stessa cosa di $i = $i+1;
// $j = 0;
// $stringa = "Stringa molto bella";

// for($j;$j<strlen($stringa);$j++){
//     echo $stringa[$j] ."\n";
// }

// While 

// $condizione = true;
// $i = 0;
// while($condizione){

//     echo "Sono nel while\n";
    
//     if($i==7){
//         $condizione=false;
//     }
//     $i++;
// }

// nel while devo sempre ricordarmi di modificare la condizione in modo che ci sia un punto d'uscita

// Do while funziona come il while ma il codice viene eseguito almeno una volta

// do{
//     echo "Do while\n";
// }while(true);


// Foreach è un costrutto che permette di ciclare ed eseguire istruzioni su ogni elemento presente in un array

$array = ['La','casa','è','in','campagna'];


// $result = '';

// foreach($array as $valore){
//     $result .= $valore ." ";
// }

// echo $result;


// Operatori di operazione e assegnazione

// +=
// -=
// *=
// /=
// .=


$numeri = [132,421,412,4124,'Pippo'=>1,14,1];

$totale = 0;


// foreach($numeri as $numero){
    
//     if($numero%7 == 0){
//         $totale += $numero;
//     }else{
//         echo "Il numero $numero non è divibile per 7\n";
//     }
// }


// echo $totale;


$persone = [
    [
        'lingua'=>'IT',
        'nome'=>'piero',
        'lavoro'=>'programmatore',
        'passione'=>'tennis'
    ],
    [   'lingua'=>'EN',
        'nome'=>'Marcos',
        'lavoro'=>'insegnante',
        'passione'=>'calcio'
    ],
    [
        'lingua'=>'EN',
        'nome'=>'Luca',
        'lavoro'=>'ballerino',
        'passione'=>'danza'
    ]

];


foreach($persone as  $persona){
    
    // if($lingua == 'IT'){
    //     echo " Ciao\n";
    //     continue;
    // }elseif($lingua == 'EN'){
    //     echo "Hii";
    // }
    // echo "Fine ciclo\n";

    
    switch($persona['lingua']){
        case 'IT':
            echo "Ciao sono ....";
            break;
        case 'EN':
            echo "Hi I'm ....";
            break;
        case 'ES':
            echo "Hola ...";
            break;
    }
}
// in questo caso non va bene