<?php

class Gardener{
    public function cutGrass(Grass $grass,$luogo){
        if($grass->crescita >=8){

            echo "Il giardiniere taglia un prato di $grass->dimensions metri quadrati a $luogo";
        }
        else{
            echo "Il prato è dell'altezza giusta";
        }
    }

}

class Grass{
    public $dimensions =10;
    public $crescita;

    public function __construct($dimensioni,$crescita = 1)
    {
        // __construct viene chiamata in automatica alla creazione di un nuovo oggetto
        $this->dimensions = $dimensioni;
        $this->crescita = $crescita;
    }
}



$prato11 = new Grass(1000,1);

$prato2 = new Grass(208520,29);

$giardiniere = new Gardener;

$giardiniere->cutGrass($prato11,'Torino');


