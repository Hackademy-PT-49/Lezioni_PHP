<?php

// Object Oriented Programming è un paradigma di programmazione che sfrutta i concetti di classe e oggetto
// per organizzare il codice in blocchi 

// classe: è una serie di proprietà e comportamenti che descrivono un oggetto

// I nomi delle classi devo essere obbligatoriamente in inglese, devono avere la prima lettera di ogni parola maiuscola
// devono essere descrittivi rispetto all'oggetto che vanno a definire

class Person{
    // attributi 
    public $name;
    public $surname;
    public $age;


    // metodo costruttore
    // il construct deve avere due __ davanti al nome 
    public function __construct($name,$surname,$age){
        // this rappresenta l'oggetto che andrò a creare
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;

        $this->sayHello();
    }

    //metodi

    public function sayHello(){
        echo "Ciao sono $this->name $this->surname e ho $this->age anni\n";
    }

}



// creare oggetti a partire da una classe

// $persona= new Person;

// $persona->name = 'Giorgio';
// $persona->sayHello();


$persona = new Person('Giorgio','Bianchi',89);

$person2 = new Person('Franco','Ubaldi','25');
// var_dump($persona);