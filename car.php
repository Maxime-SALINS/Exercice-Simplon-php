<?php
require_once './Partials/header.php';
require_once 'data.php';

// $result = array_filter($cars, function($car){
//     return $car['id'] == $_GET['id'];
// });

// var_dump($result);

$id= $_GET['id'];

foreach ($table as $car){
    if ($car['id'] == $id) {
        echo '
        <article>
            <h2>Model : ' . $car["model"] .' </h2>
            <p>Nombre vendu : ' . $car["vendu"] . '</p>
            <p>Nombre en stock: ' . $car["stock"] . '</p>
            <img width="80" src="asset/images/'. $car['image'] . '" alt="logo marque">
        </article>';
    }
}