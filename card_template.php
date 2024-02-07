<?php 

function cardTemplate($car){
    return '
    <article>
        <h2>Model : ' . $car["model"] .' </h2>
        <p>Nombre vendu : ' . $car["vendu"] . '</p>
        <p>Nombre en stock: ' . $car["stock"] . '</p>
        <a href="car.php?id='.$car['id'].'">
            <img width="80" src="'. $car['image'] . '" alt="logo marque">
        </a>
    </article>';
};
