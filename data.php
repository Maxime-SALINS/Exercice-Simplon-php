<?php

$servername = 'localhost';
$username = 'root';

//On essaie de se connecter
try{
    $conn = new PDO("mysql:host=$servername;dbname=test", $username);
    //On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
}

/*On capture les exceptions si une exception est lancée et on affiche
 *les informations relatives à celle-ci*/
catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}

$reponse = $conn->query('SELECT * FROM cars');
$table = $reponse->fetchAll(PDO::FETCH_ASSOC);
// var_dump($table);
// header('Location:index.php');