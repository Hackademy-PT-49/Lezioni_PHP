<?php

// Le funzioni sono dei blocchi di codice riutilizzabile 

// Per definire un funzione in php ho bisogno di tre elementi:
// keyword function e nome
// I parametri
// Corpo della funzione


// nei nomi delle funzioni si utilizza il CamelCase

// la definizione non viene eseguita
function funzionePerSalutare(){
    echo "Ciao";

}

// per eseguire il codice di una funzione devo richiamarla

// funzionePerSalutare();

// Principio DRY : don't repeat yourself
// Una funzione generalmente deve avere un compito singolo e abbastanza specifico


// 


// Funzioni parametriche

// quelli che inserisco nella definizione della funzione si chiamano parametri formali
// function somma($num1,$num2){
//     return $num1 + $num2;
// }

// parametri effettivi
// somma(10,4);

// echo "Ciao ".somma(10,4);

// var_dump(somma(20,53));



// In PHP i nomi delle funzioni non sono case senstive

// SoMmA(421,421);

// le funzioni hanno uno scope locale, le variabili definite all'interno di una funzione non esistono all'esterno

$a = 5;

function stampa($valoreDaStampare){
    $a = $valoreDaStampare;
    echo $a;
    return $a;
}


// stampa($a);



// ES

// type hinting
// posso indicare nella definizione della funzione di quale tipo devono essere i singoli parametri
function calcolatrice(int $num1,int $num2,string $operazione = 'somma'){
        // codice per effettuare tutte le operazioni matematiche
        $valore = 'Error';
       switch($operazione){
        case 'somma':
            $valore = somma($num1,$num2);
            break;
        case 'moltiplicazione':
            $valore = moltiplicazione($num1,$num2);
            break;
        case 'divisione':
            $valore = divisione($num1,$num2);
            break;
        case 'sottrazione':
            $valore = sottrazione($num1,$num2);
            break;
        default:
            echo "Operazione non riconosciuta";
       }
       return $valore;

    }
    
    function somma($a,$b){
        return $a+$b;
    }
    
    function divisione($a,$b){
        return $a/$b;
    }

    function sottrazione($a,$b){
        return $a-$b;
    }
    function moltiplicazione($a,$b){
        return $a*$b;
    }




function prova() : int{
    return '1';
}

prova();



$array = [123,42,532,754];


function sommaArray($array){
    $sum = 0;
    foreach($array as $value){
        $sum += $value;
    }

    return $sum;
}

// echo sommaArray($array);


// passaggio dati per valore

function valore($a){
    $a += 5;
    echo $a;
}

$c = 230;

// valore($c);

// var_dump($c);


// passaggio dati per riferimento 
function riferimento(&$rif){
    $rif += 10;
    echo $rif;
}

$c = 4;

// riferimento($c);

// var_dump($c);





function incremento10($num){
    $num +=10;
    return $num;
}

$a = 20;

// $a = incremento10($a);

// var_dump($a);


// funzioni con parametri di default

function defaultParams($par1 = 'Default', $par2 = 'parola2'){

    echo "$par1 , $par2";

}

// defaultParams();


// Recap

function camelCaseFunction(&$modificare,string $frase = ' ',int $test1 = 0): int{
    $modificare .= "lettere a caso\n";
    echo $test1."\n";
    return 1;

}

$prova = 'Ciao2';
// passaggio parametri per nome    nomeparametro: valore da assegnare

$a = camelCaseFunction($prova, test1:123);

var_dump($prova);

// in php i parametri nella chiamata vengono passati per posizione