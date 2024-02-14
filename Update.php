<?php require_once './partials/header.php'?>

<form action="" method="post">
    <input type="number" name="vendu" placeholder="vendu">
    <input type="number" name="stock" placeholder="stock">
    <button type="submit">Envoyer</button>
</form>

<?php
session_start();

$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $vendu= $_POST['vendu'];
    $stock= $_POST['stock'];
    $newInput = array("vendu" => $vendu, "stock"=> $stock);
    
    foreach ($_SESSION['cars'] as $car){
        if ($car['id'] == $id) {
            $index = array_search($car, $_SESSION['cars']);
            $_SESSION['cars'][$index]= array_replace($car, $newInput);
            header('Location:index.php');   
        }
    };
};

// var_dump($_SESSION['cars']);