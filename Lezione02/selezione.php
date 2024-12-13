<?php

// If permette di eseguire il codice racchiuso tra le parentesi graffe solamente quando la condizione è verificata

/*
if(condizione){
    istruzioni 

}
*/

// Es.

// $persona = "Marco Bianchi";
// $eta = 30;

// if($eta > 18){
//     echo " Iscritto all'università: " . $persona;
// }

// var_dump(5);



// if else -> se  altrimenti

// if(false){
//     echo "Ciao";
// }else{
//     echo "Sono l'else";
// }


$eta = 15;

// se l'eta è maggiore o uguale a 18 stampo "Puoi guidare" altrimenti stampa "Non hai la patente"

// if($eta>=18){
//     echo "Puoi guidare";
    
// }else{
//     echo "Non hai la patente";

// }

// If elseif else  in generale l'i f elseif eseguira il blocco di codice alla prima condizione che risulta vera
// $cond1= true;
// $cond2= true;
// $eta = 18;

// if($eta==18){
//     echo "Puoi iscriverti in autoscuola\n";
// }

// elseif($eta>=18){
//     echo "Puoi guidare\n";

// }elseif($a ==78){
//     echo "Easter egg\n";

// }elseif($eta>=18){
//     echo "Puoi guidare\n";

// }else{
//     echo "Non hai la patente\n";
// }


// Switch:

$indice='242';
$password = 242;

// lo switch verifica se il valore dell'indice è uguale a quello del case, solo se sono uguali fa entrare

// switch($indice){
//     case $password:
//         echo "Indice vale 4\n";
//         break;
//     case 404:
//         echo "Prova";
//         break;
//     case 21:
//         echo "Prova";
//         break;
//     default:
//         echo "Sei arrivato al default";
// }

//ES
$eta =16;

switch(true){
    case $eta== 18: // $eta == 18???
        echo "Prendi la patente ";
        break;
    case $eta>=18: // (bool)$eta == false
        echo "Puoi guidare";
        break;
    default: 
        echo " Non sei maggiorenne";
}

