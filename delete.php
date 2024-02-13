<?php
session_start();
$id = $_GET["id"];

// var_dump($_SESSION['cars'][array_search($_SESSION['cars'][$id], $_SESSION['cars'])]);

foreach ($_SESSION['cars'] as $car){
    if ($car["id"] == $id) {
        // var_dump($car);
        unset($car['id'], $_SESSION['cars']);
    } else {
        var_dump($car);
    }
}


// var_dump($_SESSION['cars']);