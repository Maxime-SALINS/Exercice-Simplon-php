<?php

$cars = array(
    array("id"=>1,"model" => "Volvo", "vendu" => 22, "stock" => 18, "image" => "https://upload.wikimedia.org/wikipedia/commons/3/3c/Volvo_Trucks_Logo.png"),
    array("id"=>2,"model" => "BMW", "vendu" => 33, "stock" => 5, "image" => "https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg"),
    array("id"=>3,"model" => "Saab", "vendu" => 3, "stock" => 88, "image" => "https://cdn.freebiesupply.com/logos/large/2x/saab-2-logo-png-transparent.png"),
    array("id"=>4,"model" => "Land Rover", "vendu" => 45, "stock" => 2, "image" => "https://www.logo-voiture.com/wp-content/uploads/2021/01/Logo-Land-Rover.png"),
    array("id"=>5,"model" => "Mercedes", "vendu" => 45, "stock" => 2, "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Mercedes-Logo.svg/1200px-Mercedes-Logo.svg.png"),
);

$id = 1;

foreach ($cars as $car){
    if ($car['id'] == $id) {
        $index = array_search($car, $cars);
        array_splice($cars, $index , 1);
        var_dump($cars);
    }
};

$idsearch = end($cars);
$newid = $idsearch['id'];


var_dump($newid);
