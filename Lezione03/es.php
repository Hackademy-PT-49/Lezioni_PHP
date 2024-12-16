<?php

function implodi($array,$separator){
    $stringa='';
    $first = true;
    foreach($array as $value){
        if($first){
            $stringa = $stringa .$value;
            $first = false;
        }else{
            $stringa = $stringa .$separator.$value;
        }
        
    }
    return $stringa;
}

$array = ['Ciao','persona','come','stai?'];
echo implodi($array,'-');