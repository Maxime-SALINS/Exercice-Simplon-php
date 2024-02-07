<?php

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

if (!empty($name) && ($email) && ($password)) {
    echo " Le nom d'utilisateur est : $name <br>
    l'email de l'utilisateur est : $email <br>
    le mot de passe de l'utilisateur est : $password <br>";
} else{
    echo "Erreur les champs sont vides";
};