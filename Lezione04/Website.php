<?php
class Website{
    public static $totUsers=0;
    public $count = 0;

    public function acceptUserRequest(){
        $this->count++;
        self::$totUsers++;
    }
}