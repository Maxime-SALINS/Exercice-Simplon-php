<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice | php</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php require_once './partials/header.php'?>
    <h1>Model de voiture</h1>
    <section class="card">
        <?php
            session_start();
            // var_dump($_SESSION['cars']);
            function addId ($array){
                $newid = count($array) + 1;
                return $newid;
            };

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $model = $_POST["model"];
                $stock = $_POST["stock"];
                $vendu = $_POST["vendu"];
                $image = $_POST["image"];
                // var_dump($id,$model,$stock,$vendu,$image);

                $id = addId($_SESSION['cars']);

                $newCar = array("id" => $id, "model" => $model, "stock" => $stock, "vendu" => $vendu, "image" => $image);
                
                array_push($_SESSION['cars'], $newCar);
                // var_dump($_SESSION['cars']);
            };

            require_once "boucle.php";
        ?>
    </section>
    <!-- Exercice sur le formulaire de contact méthode GET & POST -->
    <!-- <section>
        <h2>Test methode POST/GET</h2>
        <div>
            <form action="userinfo.php" method="post">
                <input type="text" name="name" id="name" placeholder="VOTRE NOM">
                <input type="email" name="email" id="email" placeholder="VOTRE EMAIL">
                <input type="password" name="password" id="password" placeholder="MOT DE PASSE">
                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </section> -->
</body>

</html>