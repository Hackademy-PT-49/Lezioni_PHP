<?php

class WeddingPlanner{
    public static $count=0;

    public $list;

    public function __construct($list)
    {
        $this->list = $list;
        $this->sendInvites();
    }

    public function sendInvites(){
        foreach($this->list as $person){
            $person->invite = new Invite;
        }
    }
}

class Invite{
    public $number = 5;

    public function reply($reply,$count=0){
        if($reply=='yes'){
            WeddingPlanner::$count += $count;
        }

    }

}

class Person{
    public $name;
    public $surname;

    public function __construct($name,$surname)
    {
        $this->name = $name;
        $this->surname  = $surname;
    }
}

$p1 = new Person('Pietro','Rossi');
$p2 = new Person('Luca','Verdi');
$personList = [$p1,$p2];

$wedPlan = new WeddingPlanner($personList);



var_dump($wedPlan);