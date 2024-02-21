<?php require_once './partials/header.php'?>

<form action="" method="post">
    <input type="number" name="vendu" placeholder="vendu">
    <input type="number" name="stock" placeholder="stock">
    <button type="submit">Envoyer</button>
</form>

<?php
require_once 'data.php';

$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $vendu= intval($_POST['vendu']);
    $stock= intval($_POST['stock']);
    
    //On prépare la requête SQL UPDATE
    $reqprapare = $conn->prepare("UPDATE cars SET stock = :stock, vendu = :vendu WHERE id = :id");

    //On Lie les variables $vendu et $stock à :vendu et :stock et $id à :id
    $reqprapare->bindValue(':id', $id);
    $reqprapare->bindValue(':stock', $stock);
    $reqprapare->bindValue(':vendu', $vendu);

    //On execute la requête
    $update = $reqprapare->execute();

    //On se redirige vers la page index.php
    header('Location:index.php');

    //Ancien Exercice
        // foreach ($_SESSION['cars'] as $car){
        //     if ($car['id'] == $id) {
        //         $index = array_search($car, $_SESSION['cars']);
        //         $_SESSION['cars'][$index]= array_replace($car, $newInput);
        //         header('Location:index.php');   
        //     }
        // };
    //
};

// var_dump($_SESSION['cars']);