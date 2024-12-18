<?php

// check su una password inserita dall'utente:
/*
-8 caratteri
-una lettera maiuscola
-un numero
-un carattere speciale

*/

function checkPassword($password){
    
    $num = checkNum($password);
    $maiusc=checkMaiusc($password);
    $special=checkSpecial($password);
    
    if( $num && $maiusc && $special && checkLength($password)){
        echo "password corretta\n";
        return true;
    }
    return false;

}


function checkLength($password){

    // if( strlen($password)>=8){
    //     return true;
    // }

    // return false;

    return strlen($password)>=8;
}

function checkNum($password){
    for($i=0;$i<strlen($password);$i++){
        if(is_numeric($password[$i]) ){
            return true;
        }
    }
    echo "Devi inserire almeno un carattere numerico\n";
    return false;
}

function checkMaiusc($password){
    for($i=0;$i<strlen($password);$i++){
        if(ctype_upper($password[$i]) ){
            return true;
        }
    }
    echo "Devi inserire almeno un carattere maiuscolo\n";
    return false;
}

function checkSpecial($password){
    $specialChars = ['?','!'];

    for($i=0;$i<strlen($password);$i++){
        if( in_array($password[$i],$specialChars) ){
            return true;
        }
    }
    echo "Devi inserire almeno un carattere tra ? e !\n";
    return false;
}


do{
    $psw = readline('Inserisci la password:');
    

}while(!checkPassword($psw));

