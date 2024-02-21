<?php
require_once 'data.php';
require_once './partials/header.php';

$id = $_GET["id"];

foreach ($table as $car) {
    if ($car["id"] == $id) {
        
        //On prépare la requête SQL DELETE
        $reqprepare = $conn->prepare("DELETE FROM `cars` WHERE id = :id");

        //On Lie la variable $id à 'id'
        $reqprepare->bindValue(':id', $id);

        //On execute la requête
        $delete = $reqprepare->execute();

        echo "la suppression à marcher";

        //Ancien exercice
            // $index = array_search($car, $_SESSION['cars']);
            // array_splice($_SESSION['cars'], $index , 1);
            // var_dump($_SESSION['cars']);
        //

        header('Location:index.php');
    }
}
