<?php 
session_start();

require_once ("data.php");

$id = $_POST["id"];
$model = $_POST["model"];
$stock = $_POST["stock"];
$vendu = $_POST["vendu"];
$image = $_POST["image"];
// var_dump($id,$model,$stock,$vendu,$image);

$newCar = array("id" => $id, "model"=>$model, "stock"=>$stock, "vendu"=>$vendu, "image"=>$image);
// var_dump($newCar);

array_push($cars, $newCar);
$_SESSION['cars'] = $cars;
var_dump($cars);