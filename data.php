<?php
session_start();

$_SESSION['cars'] = array(
    array("id"=>1,"model" => "Volvo", "vendu" => 22, "stock" => 18, "image" => "Volvo_Trucks_Logo.png"),
    array("id"=>2,"model" => "BMW", "vendu" => 33, "stock" => 5, "image" => "stickers-logo-bmw-couleurs.png"),
    array("id"=>3,"model" => "Saab", "vendu" => 3, "stock" => 88, "image" => "saab-2-logo-png-transparent.png"),
    array("id"=>4,"model" => "Land Rover", "vendu" => 45, "stock" => 2, "image" => "Logo-Land-Rover.png"),
    array("id"=>5,"model" => "Mercedes", "vendu" => 45, "stock" => 2, "image" => "Mercedes-Logo.svg.png"),
);

header('Location:index.php');