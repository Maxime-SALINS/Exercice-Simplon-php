<?php
require_once 'data.php';
require_once './partials/header.php';

$id = $_GET["id"];
//On prépare la requête SQL DELETE
$reqprepare = $conn->prepare("DELETE FROM `cars` WHERE id = :id");

//On Lie la variable $id à 'id'
$reqprepare->bindValue(':id', $id);

//On execute la requête
$delete = $reqprepare->execute();

//On redirige vers la page index.php
header('Location:index.php');
// echo "la suppression à marcher";

//Ancien exercice
// foreach ($_SESSION['cars'] as $car) {
//     if ($car["id"] == $id) {
//         $index = array_search($car, $_SESSION['cars']);
//         array_splice($_SESSION['cars'], $index , 1);
//         var_dump($_SESSION['cars']);     
//     }
// }
