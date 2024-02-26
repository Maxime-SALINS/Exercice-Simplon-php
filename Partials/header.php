<?php 

@ $keywords = $_GET["search"];
@ $valider = $_GET["valider"];

if(isset($valider)&& !empty(trim($keywords))){
    include './connection.php';
    $req = $conn->prepare("SELECT * FROM cars ");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice | php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="style_header">
        <nav class="navbar">
            <ul class="ul_navbar">
                <li>
                    <a href="index.php">Acceuil</a>
                </li>
                <li>
                    <a href="Ajout.php">Ajouter une voiture</a>
                </li>
            </ul>
        </nav>
        <form action="" method="get" class="search_bar">
            <input type="search" name="search" id="search">
            <input type="submit" name="valider" value="Rechercher" id="valid">
            
        </form>
    </header>