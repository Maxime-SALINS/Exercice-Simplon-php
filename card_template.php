<?php

function cardTemplate($car)
{
    return "
    <article>
        <h2>Model : {$car['model']} </h2>
        <img width='80' src='{$car['image']}' alt='logo marque'><br>
        <a href='car.php?id={$car['id']}'>Voir detail</a><br>
        <a href='delete.php?id={$car['id']}'>Supprimer</a>
        <a href='Update.php?id={$car['id']}'>Modifier</a>
    </article>";
};
