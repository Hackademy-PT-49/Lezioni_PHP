<?php

// in php gli array sono zero based(le chiavi inziano da 0)

// $array = array('Ciao',123,14);

$array = [32,"zabre",true,43.43];


$array[7] = $array[0] + $array[3];
$array[] = $array[0] + $array[3];
$array[21] = $array[0] + $array[3];
$array[] = $array[0] + $array[3];


$array[5] ="Pos 5";

// var_dump($array);


$arrayAssociativo = [
    'primo' => 'Ciao',
    'secondo'=> 123,
    3 => 0.43,
    true
];

// var_dump($arrayAssociativo['primo']);


$persona1 = [
    'nome'=>'Marco',
    'cognome'=>'Bianchi',
    'eta'=>45
];

$persona2 = [
    'nome'=>'Paola',
    'cognome'=>'Rossi',
    'eta'=>26
];


// $utente = [
//     'username'=> $datoInseritoDallUtente,
//     'email' => $dato2
// ];

// echo "Sono {$persona1['nome']} {$persona1['cognome']} e ho {$persona1['eta']} anni";
// echo "Sono ". $persona2['nome'] ." ". $persona2['cognome'] ." e ho ". $persona2['eta'] ." anni";


// Array multidimensionali

$elencoPersone = [
    [
       'nome'=>'Marco',
       'cognome'=>'Bianchi',
       'eta'=>45
    ],
    $persona2,
    [
       'nome'=>'Piero',
       'cognome'=>'Rossi',
       'eta'=>47
    ],
];

$array1 = [
    123,
    [
        'key'=>'value',
        3421,
        'Ciao',
        
        ['ciao',
            [
                'password segreta'
            ]
        ],
        $elencoPersone
    ],
    true,
    'array'=>[
        'Piero',
        'lupo'=>'cattivo'
    ]
];




echo $elencoPersone[0]['nome'] ." ". $array1[0][1][3][2]['cognome'] ." ha sconfitto il ". $array1['array']['lupo']." con la ".$array1[1][2][1][0] ;

// var_dump($array1[1]);