<?php 

require_once ("data.php");

echo '<a href="index.php">Retour à la page d\'accueil</a>';

// $result = array_filter($cars, function($car){
//     return $car['id'] == $_GET['id'];
// });

// var_dump($result);

$id= $_GET['id'];

foreach ($cars as $car){
    if ($car['id'] == $id) {
        echo '
        <article>
            <h2>Model : ' . $car["model"] .' </h2>
            <p>Nombre vendu : ' . $car["vendu"] . '</p>
            <p>Nombre en stock: ' . $car["stock"] . '</p>
            <img width="80" src="'. $car['image'] . '" alt="logo marque">
        </article>';
    }
}