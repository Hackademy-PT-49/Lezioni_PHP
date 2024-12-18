<?php

class School{

    // static keyword rende i metodi e gli attributi non più appartenenti all'oggetto ma alla classe
    public static $totStudents=0;

    public $students;
    // public $subjects;
    // public $teachers;

    public function __construct($students){

        // scope resolution operator ::  viene utilizzato per accedere agli elementi e metodi statici 
        // self indica la classe dentro la quale si trova
        self::$totStudents += $students;
        $this->students = $students;
    }


    public static function getStudentTotal(){
        echo self::$totStudents;
    }
    
}


$school1 = new School(1023);
$school2 = new School(19);

// con :: dobbiamo mettere il $ davanti al nome della variabile
// con -> no

//Per accedere a elementi statici
//School::$totStudents;
//$oggettoDellaClass::$attributo;
//School::getStudentTotal();
//$oggettoDellaClasse::getStudentTotal();
//$oggettoDellaClasse->getStudentTotal();