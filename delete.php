<?php
require_once './partials/header.php';
session_start();

$id = $_GET["id"];

foreach ($_SESSION['cars'] as $car){
    if ($car["id"] == $id) {
        $index = array_search($car, $_SESSION['cars']);
        array_splice($_SESSION['cars'], $index , 1);
        // var_dump($_SESSION['cars']);
        header('Location:index.php');
    }
}


