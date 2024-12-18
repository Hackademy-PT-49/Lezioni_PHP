<?php

require 'User.php'; // require richiede obbligatoriamente che il file siamo importato correttamente
require 'Website.php'; // include prova ad importarlo se non ci riesce va avanti



$user = new User('Piero');
$user2 = new User('luca2');

$web1 = new Website;
$web2 = new Website;


$user->connectToWebsite($web1);
$user->connectToWebsite($web1);
$user->connectToWebsite($web2);
$user2->connectToWebsite($web2);
$user2->connectToWebsite($web1);

var_dump(Website::$totUsers, $web1->count,$web2->count);