<?php 

function cardTemplate($car){
    return '
    <article>
        <h2>Model : ' . $car["model"] .' </h2>
        <p>Responsable : ' . $car["prenom"] . '</p>
        <p>Nombre vendu : ' . $car["vendu"] . '</p>
        <p>Nombre en stock: ' . $car["stock"] . '</p>
    </article>
    <hr>';
};
