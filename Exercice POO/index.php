<?php

// $obj = (object) array("text" => "bonjour");

// var_dump($obj);

// var_dump(get_declared_classes());

class Ballon {

    public $marque;
    public $sport;

    function lancer(){
        echo "Vous avez lancer le ballon";
    }
}

$ballonfoot = new Ballon();

$ballonfoot -> marque = "Nike";
$ballonfoot -> sport = "foot";

var_dump($ballonfoot);